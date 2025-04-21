<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PushNotification extends Model
{
    protected $table = 'push_subscriptions';

    protected $fillable = [
        'subscribable_type',
        'subscribable_id',
        'endpoint',
        'public_key',
        'auth_token',
        'content_encode',
    ];

    // Relación polimórfica inversa
    public function subscribable()
    {
        return $this->morphTo();
    }
}
