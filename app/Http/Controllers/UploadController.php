<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function create()
    {
        return view('upload.index');
    }
    public function store(Request $request)
    {
      $size = $request->file('photo')->getSize();
      $name = $request->file('photo')->getClientOriginalName();
      $request->file('photo')->store('public/images');
      return $name;
        // dd($request->file());
    }
}