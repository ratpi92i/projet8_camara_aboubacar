<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Etudiant extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'prenom',
        'classe',
    ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }

}
