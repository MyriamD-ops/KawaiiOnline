<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'photo',
        'prix',
        'dais',
        'category_id',
    ];

    protected $casts = [
        'prix' => 'decimal:2',
        'dais' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relation: Un produit appartient à une catégorie
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relation: Un produit peut être dans plusieurs lignes de commande
    public function lines()
    {
        return $this->hasMany(Line::class);
    }
}