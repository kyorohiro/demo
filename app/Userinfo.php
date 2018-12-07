<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    //
    protected $fillable = [
        "user_id","firstname","lastname",
        "zip_code","country_code","lang_code",
        "prefucture","address","tel","profile"
    ];
    
    public function user() {
        return $this->belongsTo("App\User","user_id","id");
    }
}

