<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    protected $fillable = [
        'user_id',
        'titre',
        'description',
        'nom_original',
        'chemin',
        'type_mime',
        'taille',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}