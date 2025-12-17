<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = [
            ['name' => 'Year-End Edition', 'icon' => '🎁', 'slug' => 'year-end'],
            ['name' => 'Label', 'icon' => '🏷️', 'slug' => 'label'],
            ['name' => 'Merchandise', 'icon' => '🛍️', 'slug' => 'merchandise'],
            ['name' => 'Cetak Stiker', 'icon' => '📄', 'slug' => 'cetak-stiker'],
            ['name' => 'Stationery / ATK', 'icon' => '📚', 'slug' => 'stationery'],
            ['name' => 'Media Promotion', 'icon' => '📢', 'slug' => 'media-promotion'],
        ];

        $products = [
            [
                'name' => 'Year-End Edition (Design Customs, All Disc 20%)',
                'price' => 70000,
                'image' => 'year-end.jpg',
                'sold' => 504
            ],
            [
                'name' => 'Label & Stiker',
                'price' => 250,
                'image' => 'label.jpg',
                'sold' => 9898
            ],
            [
                'name' => 'Tote bag',
                'price' => 20000,
                'image' => 'totebag.jpg',
                'sold' => 1788
            ],
            [
                'name' => 'Payung',
                'price' => 100000,
                'image' => 'payung.jpg',
                'sold' => 288
            ],
        ];

        return view('home', compact('categories', 'products'));
    }
}