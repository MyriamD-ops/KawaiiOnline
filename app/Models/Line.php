<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'order_cart_id',
        'product_id',
        'quantite',
        'montant',
        'date',
        'product_id',
    ];

    protected $casts = [
        'quantite' => 'integer',
        'montant' => 'decimal:2',
        'date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relation: Une ligne appartient à une commande (optionnel)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relation: Une ligne appartient à un panier (optionnel)
    public function orderCart()
    {
        return $this->belongsTo(OrderCart::class);
    }

    // Relation: Une ligne concerne un produit
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}