<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\dataPasien;

class pasien extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function dataPasien(){
        return $this->hasMany(dataPasien::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
