<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductAssistantConversation extends Model
{
    protected $fillable = ['public_token', 'name', 'email', 'company', 'phone', 'ip_address', 'user_agent', 'last_message_at'];

    public function messages(): HasMany
    {
        return $this->hasMany(ProductAssistantMessage::class, 'conversation_id');
    }
}
