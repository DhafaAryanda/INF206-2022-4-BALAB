<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\dataPasien;
use App\Models\Dokter;
use App\Models\Laboran;
use App\Models\Pasien;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dataPasien(){
        return $this->hasMany(dataPasien::class);
    }
    public function dokter(){
        return $this->hasOne(Dokter::class);
    }
    public function laboran(){
        return $this->hasOne(Laboran::class);
    }
    public function pasien(){
        return $this->hasOne(Pasien::class);
    }

    
}
