<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupe extends Model
{
    use HasFactory;
    protected $appends = ['is_joined'];
    protected $withCount = ['membres'];
    public function createur()
    {
        return $this->belongsTo(user::class,'id_user');
    }
    public function membres()
    {
        return $this->belongsToMany(User::class,membre::class);
    }
    public function comments()
    {
        return $this->hasMany(commment::class);
    }
    protected function isJoined(): Attribute
    {
        return new Attribute(
            get: function () {
                if (request()->user() ?? false) {
                    return $this->membres()->where('user_id',request()->user()->id)->exists();
                }
                return false;
            }
        );
    }
}
