<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfiles';
    

    public function cuentas():BelongsTo{
        return $this->belongsTo(Cuenta::class);
    }
}
