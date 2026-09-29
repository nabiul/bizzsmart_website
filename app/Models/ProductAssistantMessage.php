<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductAssistantMessage extends Model
{
    protected $fillable = ['role', 'content'];

    public function conversation(): BelongsTo
    {
        return $this->belongsTo(ProductAssistantConversation::class, 'conversation_id');
    }
}
