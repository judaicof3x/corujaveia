<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    private $fillable = [
        'event_id',
        'date'
    ];

    /**
     * Relacionamento com Evento
     */
    public function event() {
        $this->belongsTo(Event::class);
    }

    /**
     * Relacionamento com Imagens
     */
    public function images() {
        return $this->hasMany(Image::class);
    }
}
