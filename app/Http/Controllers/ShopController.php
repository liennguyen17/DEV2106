<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Category;
use App\Contact;
use App\Product;
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

    public function index(Request $request)
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
            'data' => $data
        ]);
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

        return view('frontend.product',[
            'product' => $product
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
    public function article()
    {
        return view('frontend.article');
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
}
