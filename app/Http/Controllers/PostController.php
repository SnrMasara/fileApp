<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // View index file
   public function index(){
       return view('index');
   }

   //Store Files to database
   public function store(Request $request)
   {

    $request->validate([
    'file-name' => 'required|mimes:csv,txt'
    ]);

    $file = file($request->file->getRealPath());

    $data = array_slice($file, 1);

    $parts = (array_chunk($data, 500));

    foreach ($parts as $index=>$part)
    {
        $filename = resource_path('pending-files/'.date('y-m-d-H-i-s').$index. '.csv');
        file_put_contents($filename, $part);

    }
    session()->flash('status', 'queued for importing');
    return redirect("/");

   }
}
