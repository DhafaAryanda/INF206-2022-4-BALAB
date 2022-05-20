<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\dataPasien;
use App\Models\User;

class Dokter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function dataPasien(){
        return $this->hasOne(dataPasien::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
