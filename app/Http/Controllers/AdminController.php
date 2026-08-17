<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    function blog2()
    {
        $blog2 = DB::table('blogs')->get();  
        return view('blog2', compact('blog2'));
    }

    function about2()
    {
        $name = 'Pornnutcha Kokaew';
        $data = '6 กรกฎาคม 2026';
        return view('about2', compact('name', 'data'));
    }
    function form()
    {
        return view('form');
    }

    function insert(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
        ],[
            'title.required'=> 'กรุณาระบุชื่อบทความ',
            'title.max'=> 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
            'content.required' => 'กรุณาระบุเนื้อหาบทความ',
        ]); 
        DB::table('blogs')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
        ]);
        return redirect()->route('blog2');
    }

    function delete($id)
    {
        DB::table("blogs")->where('id', $id)->delete();
        return redirect()->route('blog2');
    }

     function claim(    Request $request){
        $request->validate([
            'serial_number' => 'required|max:50',
            'email' => 'required|email',
            'problem' => 'required',
            'priority' => 'required',
        ],[
            'serial_number.required'=> 'กรุณาระบุหมายเลขซีเรียล',
            'serial_number.max'=> 'หมายเลขซีเรียลต้องไม่เกิน 50 ตัวอักษร',
            'email.required' => 'กรุณาระบุอีเมล',
            'email.email' => 'กรุณาระบุอีเมลให้ถูกต้อง',
            'problem.required' => 'กรุณาระบุอาการชำรุด',
            'priority.required' => 'กรุณาระดับความเร่งด่วน',
        ]); 
        DB::table('claim')->insert([
            'serial_number' => $request->serial_number,
            'email' => $request->email,
            'problem' => $request->problem,
            'priority' => $request->priority,
        ]);
        return redirect()->route('form');
    }
    function change($id){
     dd($id);   
    }
}
