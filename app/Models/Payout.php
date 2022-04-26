<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Question;

class Payout extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'amount',
        'delivered_at',
    ];

    public function payoutable() {
        return $this->morphTo();
    }

    public function orders() {
        return $this->morphToMany(Order::class, 'orderable'); # ->withPivot('quantity'); # ¿?
    }
}
