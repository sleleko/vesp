<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $token
 * @property int $user_id
 * @property Carbon $valid_till
 * @property string $ip
 * @property bool $active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read User $user
 */
class UserToken extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'token';
    protected $guarded = ['created_at', 'updated_at'];
    protected $dates = [
        'valid_till',
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'active' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
