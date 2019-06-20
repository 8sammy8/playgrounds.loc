<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class DesignRequest extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function responsible()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     * @return void
     */
    public function scopeGetRequestsByUser($query)
    {
//        $user = \Auth::id();
        $user = 5;

        return $query->where('responsible_id', $user);
    }
}
