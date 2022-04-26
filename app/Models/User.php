<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Question;
use App\Models\Product;
use App\Models\Payout;
use App\Models\Order;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'registered_at',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function questions() {
        return $this->belongsToMany(Question::class);
    }

    public function products() { // Se indica que un User puede tener un conjunto de Products
        return $this->morphMany(Product::class, 'productable');
    }

    public function payouts() { // Se indica que un User puede tener un conjunto de Payouts
        return $this->morphMany(Payout::class, 'payoutable');
    } 

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
