<?php

namespace App\Models;

use App\Models\DanhMuc;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    
    // Định nghĩa tên bảng nếu khác với tên mô hình
    protected $table = 'sanpham'; 

    // Các cột có thể được gán dữ liệu thông qua phương thức create()
    protected $fillable = [
        
        'name',
        'price',
        'motadai',
        'motangan',
        'hot',
        'image',
    ];
}
