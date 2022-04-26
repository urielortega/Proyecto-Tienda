<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Question;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'status',
        'published_at',
        'handling_percentage',
        'reason'
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function productable() {
        return $this->morphTo();
    }

    public function orders() {
        return $this->morphToMany(Order::class, 'orderable'); # ->withPivot('quantity'); # Un Product tiene varias Orders relacionadas, pero sin una cantidad en específico.
    }
}
