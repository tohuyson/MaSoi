<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RamdomController extends Controller
{
    public function index()
    {
        return view('RandomPage');
    }

    public function postArrays(Request $request)
    {
        // Lấy giá trị từ request
        $mang1 = explode(',', $request->input('mang1'));
        shuffle($mang1);
        $mang2 = explode(',', $request->input('mang2'));
        shuffle($mang2);

        for ($i = 0; $i < count($mang1); $i++) {
            // Kiểm tra xem giá trị mảng 2 có tồn tại không
                $mang2[$i] = "$mang2[$i] - $mang1[$i]";
        }

        // Hiển thị giá trị từ mảng trong view
        return view('Resulst', compact( 'mang2'));
    }
}
