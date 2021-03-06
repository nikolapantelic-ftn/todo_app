<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id' ,'title', 'content', 'priority', 'is_done', 'public',
    ];

    /**
     * Get the user that owns the entry.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}