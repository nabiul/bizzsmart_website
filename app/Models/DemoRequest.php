<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    protected $fillable = [
        'name',
        'company',
        'phone',
        'email',
        'business_type',
        'team_size',
        'message',
    ];
}
