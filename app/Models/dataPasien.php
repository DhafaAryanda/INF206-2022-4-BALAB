<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pasien;
use App\Models\User;
use App\Models\Laboran;
use App\Models\Dokter;

class dataPasien extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
    public function laboran(){
        return $this->belongsTo(Laboran::class);
    }
    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
