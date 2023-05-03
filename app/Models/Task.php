<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'deadline',
        'finish_date'
    ];

    public function tasklist() {
        return $this->belongsTo(Tasklist::class);
    }
}
