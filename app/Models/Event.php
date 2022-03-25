<?php

namespace App\Models;

use Overtrue\LaravelLike\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model 
{
    use Likeable;

    protected $fillable = [
        'Name',
        'Category_id',
        'Date',
        'Description',
        'Organiser',
        'Place',
        'URL',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
