<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Spatie\Permission\Traits\HasRoles;

class Utilisateurs extends Authenticatable
{
    use BasicAuthenticatable;
    use HasRoles;
    protected $fillable = ['email', 'mot_de_passe'];

    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
}
