<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img', 'slug'];

    // protected $guarded = [];

    // один к многим
    // данная модель имеет много коментариев
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // один к одному
    // статистика
    public function state() {
        return $this->hasOne(State::class);
    }

    // многие ко многим
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
