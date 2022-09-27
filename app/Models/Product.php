<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable=[
      'name',
      'price_cents',
      'description',
      'is_avaliable',
      'establishment_id',
    ];

    public function orders()
    {
      return $this->belongsToMany(order::Class);
    }

    public function establishment()
    {
      return $this->belongsTo(Establishment::class,'foreign_key','establishments_id');
    }


    public function menus()
{
      return $this->belongsToMany(Menu::class);
}
}
