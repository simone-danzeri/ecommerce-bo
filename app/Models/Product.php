<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function employee() {
        return $this->hasOne(Employee::class);
    }
    public function order() {
        return $this->hasOne(Order::class);
    }
}
