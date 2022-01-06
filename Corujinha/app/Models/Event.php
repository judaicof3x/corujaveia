<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'event_photo_path'
    ];

    /**
     * Relacionamento com Imagens
     */
    public function images() {
        return $this->hasMany(Image::class);
    }
}
