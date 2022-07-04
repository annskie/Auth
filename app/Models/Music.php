<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title', 'singer', 'genre','year_of_release'];

    public function user() {
        return $this->belongsTo('App\Models\User');

    }
    public function isEditable(){
        $lis = request()->route('lis');

       return auth()->user()->role=='editor' || auth()->user()->id==$lis->user_id;
    }
    public function isDeletable(){
        $lis = request()->route('lis');

       return auth()->user()->role=='editor' || auth()->user()->id==$lis->user_id;
    }
}
