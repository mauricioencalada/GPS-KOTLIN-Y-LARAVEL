<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedClient extends Model
{
    protected $fillable = [
        'name', 'nameAdress', 'length','altitude','x','y',
    ];
}
