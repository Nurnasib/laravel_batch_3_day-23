<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0 => [
                'id'    => 1,
                'name'  => 'T-shirt',
                'price' => '2890/-',
                'description' => 'Description',
                'image'       => asset('/img/sh3.jpg')
            ],
            1 => [
                'id'    => 2,
                'name'  => 'T-shirt',
                'price' => '2990/-',
                'description' => 'Description',
                'image'       => asset('/img/sh2.jpg')
            ],
            2 => [
                'id'    => 3,
                'name'  => 'T-shirt',
                'price' => '1890/-',
                'description' => 'Description',
                'image'       => asset('/img/sh2.jpeg')
            ],
            3 => [
                'id'    => 4,
                'name'  => 'T-shirt',
                'price' => '1690/-',
                'description' => 'Description',
                'image'       => asset('/img/sh3.jpg')
            ],
            4 => [
                'id'    => 5,
                'name'  => 'T-shirt',
                'price' => '1990/-',
                'description' => 'Description',
                'image'       => asset('/img/sh5.jpg')
            ],
            5 => [
                'id'    => 6,
                'name'  => 'T-shirt',
                'price' => '1190/-',
                'description' => 'Description',
                'image'       => asset('/img/sh1.jpg')
            ],
        ];
    }
}
