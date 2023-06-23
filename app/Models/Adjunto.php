<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adjunto extends Model
{
    use HasFactory;

    public function adjunto(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'id_ticket');
    }

}
