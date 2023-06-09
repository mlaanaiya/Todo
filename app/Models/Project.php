<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    public function project()
    {
        return $this->hasMany(Todo::class);
    }
    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}