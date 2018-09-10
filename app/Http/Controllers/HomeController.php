<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home')->with(['title'=> "Trang chủ kenton"]);
    }

    public function about(string $var)
    {
        if ($var == "gioi_thieu") {
            $title = "Giới thiệu Kenton";
            return view('pages.gioi_thieu', compact('title'));
        } else {
            $title = "Tại sao chọn Kenton";
            return view('pages.tai_sao', compact('title'));
        }
        
    }
}
