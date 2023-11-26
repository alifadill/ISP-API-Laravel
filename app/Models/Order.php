<?php

namespace App\Models;

use App\Models\Status;
use App\Models\User;
use App\Models\Paket;
use App\Models\Teknisi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function paket(){
        return $this->belongsTo('App\Models\Paket');
    }

    public function teknisi(){
        return $this->belongsTo('App\Models\Teknisi');
    }

    public function status(){
        return $this->belongsTo('App\Models\Status');
    }
    
}
