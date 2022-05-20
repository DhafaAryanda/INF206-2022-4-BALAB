<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\dataPasien;
use App\Models\User;

class Laboran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function laboran(){
        return $this->hasOne(dataPasien::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
