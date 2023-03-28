<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livres extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function favories()
    {
        return $this->belongsToMany(User::class,'favories' ,'user_id','livres_id' );
    }
    public function reactions()
    {
        return $this->hasMany(reaction::class);
    }

    protected function isLiked(): Attribute
    {
        return new Attribute(
             function () {
                if (request()->user() ?? false) {
                    return $this->reactions()->where('user_id', request()->user()->id)->exists();
                }
                return null;
            }
        );
    }


}
