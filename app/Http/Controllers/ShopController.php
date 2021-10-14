<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Category;
use App\Contact;
use App\Product;
use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ShopController extends Controller
{
    protected $categories; //class php  là thuộc tính của lớp : lưu trữ toàn bộ danh mục

    public function __construct()
    {
        $this->categories = Category::where('is_active', 1)->orderBy('id', 'desc')
                                                     ->orderBy('position', 'asc')
                                                     ->get();
        // chia sẻ dữ liệu qua nhiêù trang khác nhau
        view()->share([
            'categories' => $this->categories,
        ]);
    }

    public function index(Request $request )
    {

        // 2. Lấy dữ liệu - Banner
        $banners = Banner::where('is_active', 1)->orderBy('id', 'desc')
                                                ->orderBy('position', 'asc')
                                                ->take(6)->get();


        //2. chứa tên danh mục cha và sản phẩm theo danh mục (gồm cả sản phẩm thuộc cha và con)
        $data = [];

        foreach ($this->categories as $category) {
            if ($category->parent_id == 0) { //lấy danh mục cha

                $categoryIds = []; //biến chứa id của danh mục cha/con

                $categoryIds[] = $category->id;
                foreach ($this->categories as $categoryChild1) {
                    if ($categoryChild1->parent_id == $category->id) {
                        $categoryIds[] = $categoryChild1->id;

                        foreach ($this->categories as $categoryChild2) {
                            if ($categoryChild2->parent_id == $categoryChild1->id) {
                                $categoryIds[] = $categoryChild2->id;
                            }
                        }
                    }
                }

                //sql query dữ liệu sản phẩm của cả cha/con
                $products = Product::where(['is_active' => 1])
                                            ->whereIn('category_id', $categoryIds)
                                            ->limit(40)
                                            ->orderBy('id', 'desc')
                                            ->orderBy('position', 'asc')
                                            ->get();

                $data[] = [ // em sai ở đây, không có dâu [], ểu khngôêu dạ e hi
                    'name' => $category->name,
                    'products' => $products, //toàn bộ sản phẩm gồm cả cha/con
                ];
            }
        }

//        echo '<pre>';
//        dd($data);
//        die;

        return view('frontend.index', [
            'banners' => $banners,
            'data' => $data,

        ]);
    }

    public function article($slug)
    {
        $articles = Article::where(['slug' => $slug])->first();
        return view('frontend.index',['articles' => $articles]);
    }

    public function brands()
    {
        $brands= Brand::where(['is_active'=> 1])->get();
        return view('frontend.layout.main',['brands' => $brands]);
    }


    //danh muc san pham
    public function category($slug)
    {
        $cate = Category::where(['slug' => $slug])->first();
        //2 . chứa tên danh mục cha và sản phẩm theo danh mục (gồm cả SP thuộc cha và con)
        $data = [];

        foreach ($this->categories as $category) {
            if ($category->id == $cate->id ) { // lấy danh mục cha

                $categoryIds = []; // biến chưa id của danh mục , cha / con

                $categoryIds[] = $category->id;

                foreach ($this->categories as $categoryChild1) {
                    if ($categoryChild1->parent_id == $category->id) {
                        $categoryIds[] = $categoryChild1->id;

                        foreach ($this->categories as $categoryChild2) {
                            if ($categoryChild2->parent_id == $categoryChild1->id) {
                                $categoryIds[] = $categoryChild2->id;
                            }
                        }
                    }
                }

                // SQL query dữ liệu sản phẩm của cả cha/con
                $products = Product::where(['is_active' => 1])
                    ->whereIn('category_id' , $categoryIds)
                    ->limit(40)
                    ->orderBy('id', 'desc')
                    ->orderBy('position', 'asc')
                    ->get();


                $data = [
                    'name' => $category->name,
                    'products' => $products ,// toàn bộ sản phẩm gồm cả cha / con
                ];


            }
        }

        return view('frontend.category',['data' => $data]);
    }

    //chi tiet san pham
    public function product($slug)
    {
        $product = Product::Where(['slug'=> $slug]) -> first();

        //bước 1: lưu lại thông tin sản phẩm đã xem vào cookie
        //lưu id sản phẩm đã xem lần đầu vào cookie
        if(isset($_COOKIE['list_product_viewed'])) {   //$_COOKIE LẤY cookie hiện tại
            $list_products_viewed = $_COOKIE['list_product_viewed']; //list id sản phẩm , nhưng đang là 1 chuỗi
            $list_products_viewed = json_decode($list_products_viewed); //json_decode :chuyển chuỗi thành mảng

            $list_products_viewed[] = $product->id;

            //danh sách bị thay đổi => nạp lại giá trị cho key
            $string_list_id = json_encode($list_products_viewed);  //json_encode : chuyển mảng thành chuỗi
            setcookie('list_product_viewed', $string_list_id , time() + (7*86400));
        }
        else {
            $arr_viewed_product = [$product->id];  // đưa id vaò mảng
            $arr_viewed_product = json_encode($arr_viewed_product); //{"ten" :"gia tri"} //json_encode : chuyển mảng thành chuỗi
            setcookie('list_product_viewed', $arr_viewed_product , time() + (7*86400)); // hàm setcookie : tênkey , giá trị của cookie , thời gian sống _ 30 ngày 30*86400) LẤY RA GIÁ TRỊ COOKIE ĐÃ DC LƯU VÀO MẢNG
        }

        //bước 2 : lấy ra chi tiết thông tin những sản phẩm đã xem . từ cookie
        if(!empty($_COOKIE['list_product_viewed'])) {
            $products_viewed = $_COOKIE['list_product_viewed'];
            $array_products_viewed = json_decode($products_viewed); //chuỗi thành mảng lấy ra mảng các id đã lưu [6,6,9,14,52,22]

            $array_products_viewed = array_unique($array_products_viewed); // array_unique : hàm lọc trùng trong php [6,9,14,52,22]

            $array_products_viewed = array_slice($array_products_viewed, -5, 5);


            //lấy ra danh sách sản phẩm đã xem từ mảng : $list_products_viewed
            $viewedProducts = Product::where([
                                                ['is_active', '=', 1],
                                                ['id' , '<>' , $product->id],
                                            ]) -> whereIn('id' , $array_products_viewed)   // lấy sp có id ở trong $array_products_viewed
                                                ->get();

        }
        return view('frontend.product',[
            'product' => $product,
            'viewedProducts' => $viewedProducts
            ]);
    }

    //trang lien he
    public function contact()
    {
        return view('frontend.contact');
    }

    //dat hang
    public function order()
    {
        return view('frontend.order');
    }

    // trang danh sach tin tuc
    public function articles()
    {
        $data = Article::where(['is_active'=> 1])->get();
        return view('frontend.article',['data' => $data]);
    }



    // chi tiet tin tuc
    public function detailArticle($slug)
    {
        $article = Article::Where(['slug'=> $slug]) -> first();

        return view('frontend.detail-article',[
            'article' => $article
        ]);
    }

    public function postContact(Request $request)
    {
        //validate dữ liệu gửi từ form
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'content' => 'required'
        ], [
            'name.required' => 'Nhập họ tên',
            'name.max' => 'Nhập họ tên tối đa 255 ký tự',
            'email.email' => 'Nhập đúng định dạng email',
            'email.required' => ' Nhập email ',
            'phone.required' => ' Nhập SĐT',
            'content.required' => ' Nhập nội dung'
        ]);

        //luu vào csdl
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();

        // chuyển về trang chủ
        return redirect('/');
    }

    public function search(Request $request)
    {
        $key = $request->input('tu-khoa');
        $products = Product::where([
                                        ['name', 'like', '%'. $key. '%'],
                                        ['is_active', '=', 1]
                                    ])->paginate(20);
        return view('frontend.search', [
            'products' => $products
        ]);
    }


}
