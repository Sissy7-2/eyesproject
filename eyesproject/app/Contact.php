<?php
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Contact extends Model
{
    protected $fillable = [
        'type', 'name', 'email', 'gender', 'body'
    ];
    static $types = [
        '体験希望', '質問など', 'その他'
    ];
    static $genders = [
        '男', '女'
    ];
}