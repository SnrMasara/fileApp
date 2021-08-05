<?php

namespace App\Jobs;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class ProcessCsvUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $file;
        /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $file)
    {
        $this->file =$file;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Redis::throttle('upload-csv')->block(0)->allow(1)->every(5)->then(function()

        {
            dump('processing this file:...', $this->file);

            $data = array_map('str_getcsv', file($this->$file));

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

            dump('done processing this file:...', $this->file);

            unlink($this->$file);

        },
        function(){

            return $this->release(5);
        });

    }
}
