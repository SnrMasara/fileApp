<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable =['invoiceno','stockcode','description','quantity','invoicedate','unitprice','customerid','country'];

}
