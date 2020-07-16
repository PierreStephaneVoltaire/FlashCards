<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public $english;
    public $hiragana;
    public $isChar;
    public $timestamps = false;
    protected $fillable = ['english', 'hiragana', "isChar"];
    protected $attributes = [
        'isChar' => false,
        'english' => null,
        'hiragana' => null
    ];
}
