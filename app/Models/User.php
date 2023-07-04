<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * ユーザーに関連している電話の取得
     */
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}
