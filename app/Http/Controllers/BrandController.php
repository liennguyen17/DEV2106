<?php

namespace App\Http\Controllers;

use App\Brand; // thếu  gọi model
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Brand::all(); //SELECT * FROM brands lấy toàn bộ dữ liệu
        return view('backend.brand.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate dữ liệu gửi từ form
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'website' => 'required'
        ],[
            'name.required' => 'Nhập tên thương hiệu',
            'name.max' => 'Nhập tên tối đa 255 ký tự',
            'image.required' => 'Thêm ảnh',
            'website.required' => 'Nhập website'
        ]);
        //lấy toàn bộ tham số gửi từ form
        $params = $request->all(); //$_POST , $GET

        //lấy từng cái một $name = $request->input('name');

        //INSERT thêm vào CSDL
        $model = new Brand(); // model brand sử dụngc ơ chớ ORM => tự động mapping với table brand
        $model->name = $params['name'];
        $model->slug = str_slug($params['name']);  // đồng hồ =dong-ho
        $model->website = $params['website'];
        $model->position = $params['position'];
        $model->is_active = isset($params['is_active']) ? $params['is_active'] : 0; //isset kiểm tra 1 biến có tồn tại hay khác tool hay ko

        // xử lý lưu ảnh
        if ($request->hasFile('image')) { // kiểm tra xem có file gửi lên không
            // get file được gửi lên
            $file = $request->file('image');
            // đặt lại tên cho file
            $filename = $file->getClientOriginalName();  // $file->getClientOriginalName() = lấy tên gốc của file
            // duong dan upload
            $path_upload = 'uploads/';
            // upload file
            $file->move($path_upload,$filename);

            $model->image = $path_upload.$filename;
        }

        $model->save(); //thêm bảng thêm cột.... inset mysql : UPDATE

        //chuyển hướng đến trang
        return redirect()->route('admin.brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Brand::find($id); //SELECT * FROM brands Where
        return view('backend.brand.edit',['data' => $data ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate dữ liệu gửi từ form
        $request->validate([
            'name' => 'required|max:255',
            'website' => 'required',
            'image' => 'required',
        ],[
            'name.required' => 'Nhập tên thương hiệu',
            'name.max' => 'Nhập tên tối đa 255 ký tự',
            'website.required' => 'Nhập website',
            'image.required' => 'Thêm ảnh',
        ]);
        //lấy toàn bộ tham số gửi từ form
        $params = $request->all(); //$_POST , $GET

        $model = Brand::find($id);
        $model->name = $params['name'];
        $model->slug = str_slug($params['name']);  // đồng hồ =dong-ho
        $model->website = $params['website'];
        $model->position = $params['position'];
        $model->is_active = isset($params['is_active']) ? $params['is_active'] : 0; //isset kiểm tra 1 biến có tồn tại hay khác tool hay ko

        // xử lý lưu ảnh
        if ($request->hasFile('image')) { // kiểm tra xem có file gửi lên không
            // get file được gửi lên
            $file = $request->file('image');
            // đặt lại tên cho file
            $filename = $file->getClientOriginalName();  // $file->getClientOriginalName() = lấy tên gốc của file
            // duong dan upload
            $path_upload = 'uploads/';
            // upload file
            $file->move($path_upload,$filename);
            // lưu lại đường dẫn ảnh upload
            $model->image = $path_upload.$filename;
        }


        $model->save();// insert mysql : UPDATE

        //chuyển hướng đến trang
        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::destroy($id); // DELETE FROM brands WHERE id=15

        //chuyển hướng đến trang
        return redirect()->route('admin.brand.index');
    }
}
