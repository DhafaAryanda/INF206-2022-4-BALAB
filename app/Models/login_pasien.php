<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User as Authenticate;
use Illuminate\Auth\Events\Authenticated;

class login_pasien extends Authenticable
{
    use HasFactory;

    protected $table = 'login_pasien';
    protected $primaryKey = 'id_pasien';
    
    protected $fillabel = ['username', 'password'];
}
