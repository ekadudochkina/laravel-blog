<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Like extends Model
{
    use HasFactory;

    /**
     * Создает хэш
     * @param Request $request
     * @return false|string
     */
    public function createHash(Request $request){

        $ua = $request->header('User-Agent');
        $ip = $request->ip();

        if(!$ua || !$ip){
            return false;
        }

        $hash = md5($ua."_".$ip);
        return $hash;
    }
}
