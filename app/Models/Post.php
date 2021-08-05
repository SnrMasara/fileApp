<?php

namespace App\Models;

use App\Jobs\ProcessCsvUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Process\Process;

class Post extends Model
{
    use HasFactory;
//    protected $fillable =['invoiceno','stockcode','description','quantity','invoicedate','unitprice','customerid','country'];

protected $guarded = [];

public function importToDb(){

    $path = resource_path('pending-files/*.csv');

        $g = glob($path);

        foreach (array_slice($g, 0, 1) as $file) {

            //dump('processing this file:...', $this->file);

            $data = array_map('str_getcsv', file($file));

            foreach ($data as $row) {

            Post::updateOrCreate([
                    'invoiceno'=>$row[0]
                ],

                [
                    'stockcode' => $row[1],
                    'description' => $row[2],
                    'quantity' => $row[3],
                    'invoicedate' => $row[4],
                    'unitprice' => $row[5],
                    'customerid' => $row[6],
                    'country' => $row[7]

                ]);
            }

            //dump('done processing this file:...', $this->file);

            unlink($this->$file);
        }
    }
}
