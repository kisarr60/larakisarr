<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
//Define the user function to send a message
// You might also fix a value for the message.
