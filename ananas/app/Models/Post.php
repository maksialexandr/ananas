<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'content', 'user_id'];
    protected $dates = ['created_at', 'updated_at'];
    protected $table = 'posts';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return mixed
     */
    public function getDate(){
        return $this->updated_at->format('j.m.Y.');
    }
}
