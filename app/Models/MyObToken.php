<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyObToken extends Model
{
   use HasFactory;

   public static function token() {
       return MyObToken::all()->first();
   }

   public static function saveRefreshToken($refresh_token) {
       
       //Try loading existing token
        $token = MyObToken::all()->first();
        
        //if doesn't exists, then create new
        if (is_null($token)) {
            $token = new MyObToken();
        }
        
        $token->refresh_token = $refresh_token;
        $token->save();
   }

   public static function saveAccessToken($access_token) {
       
    //Try loading existing token
     $token = MyObToken::all()->first();
     
     //if doesn't exists, then create new
     if (is_null($token)) {
         $token = new MyObToken();
     }
     
     $token->access_token = $access_token;
     $token->save();
}

}
