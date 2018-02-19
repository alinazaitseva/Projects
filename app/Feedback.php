<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $fillable = [
        'id_messages', 'feedback', 'description'
    ];
}
