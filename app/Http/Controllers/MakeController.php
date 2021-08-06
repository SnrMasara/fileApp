<?php

namespace App\Http\Controllers;

use App\Models\make;
use Illuminate\Http\Request;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt'
            ]);
        $file =file($request->file->getRealPath());

        $data = array_slice($file,1);
        $parts = (array_chunk($data, 500));

        foreach ($parts as $index => $part) {
            $fileName = resource_path('pending-files/'.date('y-m-d-H-i-s').$index.'.csv');
            file_put_contents($fileName, $part);
        }

        session()->flash('status', 'queued for importing');
        return redirect('test');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\make  $make
     * @return \Illuminate\Http\Response
     */
    public function show(make $make)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\make  $make
     * @return \Illuminate\Http\Response
     */
}
