<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Device
 *
 * @property $id
 * @property $Token
 * @property $Libelle
 * @property $created_at
 * @property $updated_at
 *
 * @property Pret.message[] $pret.messages
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Device extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Token', 'Libelle'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany(Message::class, 'id', 'device_id');
    }
    
}
