<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Tugas 1',
            'description' => 'membuat alur dari sistem yang akan dijalankan',
            'deadline' => '2023-07-29',
            'status' => 'Selesai'
        ],
        [
            'id' => 2,
            'name' => 'Tugas 2',
            'description' => 'membuat UI dari sistem yang akan dijalankan',
            'deadline' => '2023-07-30',
            'status' => 'Selesai'
        ],
        [
            'id' => 3,
            'name' => 'Tugas 3',
            'description' => 'membuat fitur dari sistem yang akan dijalankan',
            'deadline' => '2023-07-31',
            'status' => 'Belum selesai'
        ],
    ];

    public static function getAll() {
        return collect(self::$tasks);
    }

    public static function getById($id) {
        $posts = static::getAll();
        return $posts->firstWhere('id', $id);
    }
}
