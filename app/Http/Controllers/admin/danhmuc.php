<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class danhmuc
{
    public function danhmuc()
    {
        return view('admin.danhmuc');
      
    }

    public function themdanhmuc(Request $request)
{
    // Kiểm tra xem có tệp hình ảnh được tải lên không
    if ($request->hasFile('image')) {
        // Lấy tên gốc của tệp hình ảnh
        $imageName = $request->file('image')->getClientOriginalName();
        // Di chuyển hình ảnh đến thư mục public/img
        $request->file('image')->move(public_path('img'), $imageName);
        // Tạo mới một danh mục với thông tin từ request và đường dẫn ảnh
        DanhMuc::create([
            'name' => $request->name,
            'mota' => $request->mota,
            'image' => $imageName // Lưu tên tệp ảnh vào cơ sở dữ liệu
        ]);
        // Chuyển hướng người dùng sau khi thêm danh mục thành công
        return redirect()->intended('admin/danhmuc');
    } else {
        // Xử lý trường hợp không có tệp hình ảnh được tải lên
        // Thích hợp với yêu cầu của bạn
        return back()->withErrors(['image' => 'No image uploaded.']);
    }
}

    
//showw danh mục
 public function showdanhmuc()
 {
     $danhmucs = DanhMuc::paginate(10); 
     return view('admin.showdanhmuc', ['danhmucs' => $danhmucs]);
 }



//edit danh mục

 public function edit($id)
 {
     $danhmuc = DanhMuc::find($id);
     return view('admin.danhmucedit', compact('danhmuc'));
 }
 
 public function update(Request $request, $id)
 {
    $danhmuc = DanhMuc::find($id);
    $danhmuc->name = $request->input('name');
    $danhmuc->mota = $request->input('mota');
    
    // Check if a file has been uploaded
    if ($request->hasFile('image')) {
        // Get the file from the request
        $image = $request->file('image');
    
        // Generate a unique name for the file
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
    
        // Move the uploaded file to a directory
        $image->move(public_path('images'), $imageName);
    
        // Update the image field in the database
        $danhmuc->image = $imageName;
    }
    
    // Save the changes to the database
    $danhmuc->save();
    
    return redirect()->intended('admin/danhmuc');
 }
 //xóa sản phẩm
 public function destroy($id)
 {
     // Find the danh muc by id
     $danhmuc = DanhMuc::findOrFail($id);
 
     // Delete the danh muc
     $danhmuc->delete();
 
     // Redirect back with a success message
     return redirect()->route('themdanhmuc')->with('success', 'Danh mục đã được xóa thành công.');
 }
 


 //thêm sản phẩm
 public function themsanpham()
 {
    $danhmucs = DanhMuc::all();
     return view('admin.sanpham', ['danhmucs' => $danhmucs]);

     
 }


//  public function search(Request $request)
//  {
//      $keyword = $request->input('keyword');
 
//      // Tìm kiếm sản phẩm dựa trên từ khóa
//      $sanphams = SanPham::where('name', 'like', "%$keyword%")
//                          ->orWhere('motadai', 'like', "%$keyword%")
//                          ->orWhere('motangan', 'like', "%$keyword%")
//                          ->get();
 
//      // Trả về view hiển thị kết quả tìm kiếm
//      return view('search_results', ['sanphams' => $sanphams, 'keyword' => $keyword]);
//  }
 





public function showsanpham()
{
    return view('admin.showsanpham');
  
}








// Trong model SanPham



 public function sanpham(Request $request)
 {
     // Check if a file has been uploaded and is valid
     if ($request->hasFile('image') && $request->file('image')->isValid()) {
         // Retrieve the list of categories from the database
         
 
         // Get the original name of the uploaded image file
         $imageName = $request->file('image')->getClientOriginalName();
 
         // Move the uploaded image to the public/img directory
         $request->file('image')->move(public_path('img'), $imageName);
 
         // Create a new product with information from the request and the image path
         sanpham::create([
             'name' => $request->name,
             'price' => $request->price,
             'motadai' => $request->motadai,
             'motangan' => $request->motangan,
             'hot' => $request->hot,
             'image' => $imageName,
             'danhmuc_id' => $request->danhmuc_id,
         ]);
 
         // Redirect the user after successfully adding the product
         return redirect()->intended('admin/sanpham')->with('success', 'Product added successfully');
     } else {
         // Handle the case where no image is uploaded
         return back()->withErrors(['image' => 'No image uploaded.']);
     }

 }
 











}
