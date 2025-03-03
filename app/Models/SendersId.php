<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SendersId
 *
 * @property $id
 * @property $user_id
 * @property $Nom
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Pret.message[] $pret.messages
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SendersId extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'Nom', 'isActive'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pret.messages()
    {
        return $this->hasMany(\App\Models\Pret.message::class, 'id', 'sender_id');
    }
    
}
