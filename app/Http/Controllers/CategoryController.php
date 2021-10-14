<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //hiển thị danh sách
    public function index()
    {
        $data = Category::all();

        return view('backend.category.index',['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // hiển thị 1 form để thêm dữ liệu
    public function create()
    {
        $data = Category::all(); // lấy toàn bộ danh mục => build option Danh mục Cha
        return view('backend.category.create',['data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     *sau khi nhấn submit from tạo, xử lý lưu dữ liệu ở đây
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //validate dữ liệu gửi từ form
        $request->validate([
            'name' => 'required|max:255',
        ],[
            'name.required' => 'Nhập tên danh mục',
            'name.max' => 'Nhập tên tối đa 255 ký tự',
        ]);
        //lấy toàn bộ tham số gửi từ form
        $params = $request->all(); //$_POST , $GET

        //lấy từng cái một $name = $request->input('name');

        //INSERT thêm vào CSDL
        $model = new Category(); // model brand sử dụngc ơ chớ ORM => tự động mapping với table brand
        $model->name = $params['name'];
        $model->slug = str_slug($params['name']);  // đồng hồ =dong-ho
        $model->parent_id = $params['parent_id'];
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
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     * hiển thị chi tiết 1 thông tin dữ liệu cho 1 bản ghi nào đó
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * hiển thị chi tiêts dữ liệu nhưng dữ liệu dc đắtj trong 1 from , để ng dùng có thể chỉnh sửa lại thông tin
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id); //SELECT * FROM brands Where
        $list = Category::all(); // lấy toàn bộ danh mục => build option Danh mục Cha
        return view('backend.category.edit',['data' => $data ,'list' => $list ]);
    }

    /**
     * Update the specified resource in storage.
     * sau khi nhấn submit  from edit thì sẽ nhận dữ liệu và xử lý lưu lại từ from edit trên
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ],[
            'name.required' => 'Nhập tên danh mục',
            'name.max' => 'Nhập tên tối đa 255 ký tự',
        ]);

        //lấy toàn bộ tham số gửi từ form
        $params = $request->all(); //$_POST , $GET

        $model = Category::findOrFail($id); //lấy ra đối tương cần sửa
        $model->name = $params['name'];
        $model->slug = str_slug($params['name']);  // đồng hồ =dong-ho
        $model->parent_id = $params['parent_id'];
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

        $model->save(); //thêm bảng thêm cột.... inset mysql : UPDATE

        //chuyển hướng đến trang
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     * xóa 1 bản ghi dữ liệu
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id); // DELETE FROM brands WHERE id=15

        //chuyển hướng đến trang
        return redirect()->route('admin.category.index');
    }
}
