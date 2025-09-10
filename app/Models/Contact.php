<?php

namespace App\Models;

use App\Models\Scopes\ContactScope;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'user_id'];


     protected static function booted(): void
    {
        static::addGlobalScope(new ContactScope);
    }

   
}
    

    