<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // View index file
   public function index(){
       return view('index');
   }

   //Store Files to database
   public function store(Request $request){
    // getting the file
    $upload=$request->file('upload-file');
    $filePath=$upload->getRealPath();

    // Opening and Reading the file
    $file=fopen($filePath, 'r');

    //Reading only the header area
    $header = fgetcsv($file);

    $escapedHeader=[];

    // Validation
    foreach ($header as $key => $value) {
        $lheader=strtolower($value);
        $escapedItem=preg_replace('/[^a-z]/','', $lheader);
        array_push($escapedHeader, $escapedItem);

    }

    // Loop through to acquire other columns

        while ($columns = fgetcsv($file)) {
            if ($columns[0]=="") {
                continue;
            }

    // Trimming Data
            foreach ($columns as $key => &$value) {
                $value=preg_replace('~/\D~','', $value);
            }
        $data = array_combine($escapedHeader,$columns);

        //Datatypes setup

        foreach ($data as $key => $value) {
            $value=($key=="invoiceno" || $key=="stockcode")?(string) $value:(string)$value;


        }
        // Update the table
        $invoiceno=$data['invoiceno'];
        $stockcode=$data['stockcode'];
        $description=$data['description'];
        $quantity=$data['quantity'];
        $invoicedate=$data['invoicedate'];
        $unitprice=$data['unitprice'];
        $customerid=$data['customerid'];
        $country=$data['country'];

        $post= post::firstOrNew(['invoiceno'=>$invoiceno, 'stockcode'=>$stockcode]);
        $post->description=$description;
        $post->quantity=$quantity;
        $post->invoicedate=$invoicedate;
        $post->unitprice=$unitprice;
        $post->customerid=$customerid;
        $post->country=$country;
        $post->save();
        }


   }
}
