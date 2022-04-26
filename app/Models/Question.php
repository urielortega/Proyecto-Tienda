<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
        'answer',
        'product_id',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
