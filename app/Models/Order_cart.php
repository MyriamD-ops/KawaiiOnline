<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quantite',
    ];

    protected $casts = [
        'quantite' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relation: Un panier appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation: Un panier peut avoir plusieurs lignes
    public function lines()
    {
        return $this->hasMany(Line::class);
    }
}