<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }
    protected $table = 'filiere';
    protected $primaryKey = 'idfil';
    use HasFactory;
}
