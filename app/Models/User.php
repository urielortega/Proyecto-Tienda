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

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // public $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'registered_at',
        //'manager_since',
        //'role',
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

    /**
     * The attributes that should be mutated to dates.
     *
     * @deprecated Use the "casts" property
     *
     * @var array
     */
    protected $dates = [
        'seller_since','supervisor_since','manager_since','accountant_since',
    ];


    public function questions() {
        return $this->belongsToMany(Question::class);
    }

    // public function products() { // Se indica que un User puede tener un conjunto de Products
    //     return $this->morphMany(Product::class, 'productable');
    // }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function payouts() { // Se indica que un User puede tener un conjunto de Payouts
        return $this->morphMany(Payout::class, 'payoutable');
    } 

    //ROLES

    public function isManager(){
        return $this->manager_since != null 
        && $this->manager_since->lessThanOrEqualTo(now());
    } 

    public function isSupervisor(){
        return $this->supervisor_since != null 
        && $this->supervisor_since->lessThanOrEqualTo(now());
    } 

    public function isSeller(){
        return $this->seller_since != null 
        && $this->seller_since->lessThanOrEqualTo(now());
    } 

    public function isAccountant(){
        return $this->accountant_since != null 
        && $this->accountant_since->lessThanOrEqualTo(now());
    } 

    public function isBuyer(){
        return $this->accountant_since != null 
        && $this->accountant_since->lessThanOrEqualTo(now());
    } 

}
