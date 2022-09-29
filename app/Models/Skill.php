<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillage = [
        'name',
        'image'
    ];

    public function projects() {
        return $this->hasMany(Project::class);
    }
}
