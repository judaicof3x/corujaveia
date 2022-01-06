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
        'event_date',
        'event_id'
    ];

    /**
     * Relacionamento com Imagens
     */
    public function event() {
        return $this->belongsTo(Event::class);
    }
}
