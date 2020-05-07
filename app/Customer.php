<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Customer extends Model
{
    protected $fillable = [
        'id', 
        'name', 
        'email',
        'contact_number'
    ];
}
