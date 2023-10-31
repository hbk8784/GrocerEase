<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';

    // public function users() {
    //     return $this->belongsTo(Users::class, 'uid');
    // }

    // public function products() {
    //     return $this->belongsTo(Products::class, 'pid');
    // }
}
