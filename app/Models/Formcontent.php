<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formcontent extends Model
{
    //テーブル名
    protected $table = 'formcontents';
    //可変項目
    protected $fillable = [
        'title',
        'username',
        'email',
        'phoneNumber',
        'content'
    ];
}
