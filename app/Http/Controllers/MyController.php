<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    public function KhoaHoc($ten)
    {
    	echo "Khoa Hoc: ".$ten;
    	return redirect()->route('MyRoute1');
    }

    public function xinchao()
    {
    	echo "xin chao cac ban!";
    }

    public function GetURL(Request $request)
    {
    	return $request->path();
    }

    public function postForm(Request $request)
    {
        echo "Ten cua ban la: ";
        echo $request->HoTen;
        if($request->has('Tuoi'))
            echo "Co tham so";
        else
            echo "Khong co tham so";
    }

    public function setCookie()
    {
        $response = new Response();
        $response->withCookie('KhoaHoc', 'Laravel-Khoa Pham', 0.1);
        echo "Da set Cookie";
        return $response;
    }

    public function getCookie(Request $request)
    {
        echo "Cookie cua ban la: ";
        return $request->Cookie('KhoaHoc');
    }

    //UPLOAD FILE
    public function postFile(Request $request)
    {
        if($request->hasFile('myFile'))
            {  
                $file = $request->file('myFile');
                if($file->getClientOriginalExtension('myFile') == 'jpg')
                {
                    echo "upload thanh cong!<br>";
                    $file_Name = $file->getClientOriginalName('myFile');
                    $file->move('assets/images', $file_Name);
                    echo "Đã lưu file: ".$file_Name;
                }
                else
                    echo "Không được upload File";               
            }
        else
            echo "upload khong thanh cong!";
    }

    //XUẤT DỮ LIỆU VỚI JSON
    public function getJson()
    {
        $array = [
            'Laravel',
            'PHP',
            'ASP.net',
            'HTML'
        ];
        return response()->json($array);
    }

    //TRUYỀN DỮ LIỆU LÊN VIEW
    public function DataTransmission($t)
    {
        return view('myView', ['ten'=>$t]);
    }

    public function blade($str)
    {
        $KhoaHoc = 'Khoa Hoc-Laravel';
        if($str == 'Laravel')
            return view('pages/Laravel', ['KhoaHoc'=>$KhoaHoc]);
        else
            echo "Lỗi tải trang!";
    }

}

