<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index ()
    {
        return view('frontend.index');
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
}
