<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'image_path',
        'gallery_id'
    ];

    /**
     * Relacionamento com Galeria
     */
    public function gallery() {
        return $this->belongsTo(Gallery::class);
    }
}
