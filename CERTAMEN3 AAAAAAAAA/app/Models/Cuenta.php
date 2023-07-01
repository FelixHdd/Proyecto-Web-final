<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Cuenta extends Model
{
    use HasFactory;

    protected $table = 'cuentas';
    protected $primaryKey = 'user';
    protected $keytype = 'string';

    public function perfil():HasMany{
        return $this->hasMany(Perfil::class);
    }
}
