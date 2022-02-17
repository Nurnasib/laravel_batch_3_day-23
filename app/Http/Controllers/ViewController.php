<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $moible;
    private $data = [];
    private $products;
    public function index()
    {
        return view('test');
    }
    public function bitm()
    {
        $this->city = 'Dhaka';
        $this->data = [
            0 => [
                'name'   => 'Sreejon',
                'city'   => 'Rajshahi',
                'mobile' => '56234789'
            ],
            1 => [
                'name'   => 'Nur',
                'city'   => 'Dhaka',
                'mobile' => '745674576'
            ],
            2 => [
                'name'   => 'Nasib',
                'city'   => 'Bogra',
                'mobile' => '34534534'
            ],

        ];
        $this->moible = '01784033051';
        return view('bitm', [
            'a' => $this->city,
            'b' => $this->moible,
            'c' => $this->data
        ]);
    }
    public function about()
    {
        $this->products = Product::getAllProduct();
        return view('about', ['products' => $this->products]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $id)
            {
                return view('detail', ['data' => $item]);
            }
        }
    }
}
