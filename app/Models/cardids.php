<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cardids extends Model
{
    use HasFactory;
    protected $table = 'cardids';
    protected $fillable = ['cardid', 'user_id'];
}
