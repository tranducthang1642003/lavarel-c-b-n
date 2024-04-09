<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    use HasFactory;
    protected $table = 'danhmuc'; // Định nghĩa tên bảng
    protected $fillable = [
        
        'name',
        'mota',
        'image',
    ];
}

