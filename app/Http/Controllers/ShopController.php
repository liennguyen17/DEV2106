<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Contact;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // 2. Lấy dữ liệu - Banner
        $banners = Banner::where('is_active', 1)->orderBy('id', 'desc')
                                                ->orderBy('position', 'asc')
                                                ->take(6)->get();

        return view('frontend.index', [
            'banners' => $banners
        ]);
    }

    //danh muc san pham
    public function category()
    {
        return view('frontend.category');
    }

    //chi tiet san pham
    public function product()
    {
        return view('frontend.product');
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
    public function detailArticle()
    {
        return view('frontend.detail-article');
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
