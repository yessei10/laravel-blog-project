<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use Searchable;
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];
    // it need to be exactly the same name of method
    public function toSearchableArray(){
        return [
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
