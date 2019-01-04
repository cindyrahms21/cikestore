<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['id','name','description','stock','price','img_path','tokopedia','bukalapak','lazada','shopee'];
}
