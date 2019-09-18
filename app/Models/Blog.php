<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model
{
    use SoftDeletes;
    public function getStatusMessageAttribute()
    {
        if ($this->status) {
            return "Active";
        }
        return "Not Active";
    }    
 
}
