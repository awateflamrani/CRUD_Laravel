<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
        
    }
    protected $table = 'etudiant';
    protected $primaryKey = 'etd_id';
    use HasFactory;
}
