<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function userInfoUpdateOrCreate($request, $id = null){
        UserInfo::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'email' => $request->email,
            'other_info' => $request->other_info,
        ]);
    }
}
