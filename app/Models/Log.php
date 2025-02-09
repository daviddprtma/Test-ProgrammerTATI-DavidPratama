<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $table = 'logs';
    public $fillable = ['user_id', 'date', 'description', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
