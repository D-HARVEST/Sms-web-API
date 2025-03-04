<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 *
 * @property $id
 * @property $user_id
 * @property $sender_id
 * @property $Destinataire
 * @property $Contenu
 * @property $Status
 * @property $device_id
 * @property $Count
 * @property $created_at
 * @property $updated_at
 *
 * @property Device $device
 * @property SendersId $sendersId
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Message extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'sender_id', 'Destinataire', 'Contenu', 'Status', 'device_id', 'Count'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function device()
    {
        return $this->belongsTo(\App\Models\Device::class, 'device_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sendersId()
    {
        return $this->belongsTo(\App\Models\SendersId::class, 'sender_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
