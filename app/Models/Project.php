<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'link', 'slug', 'cover_image', 'description'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
