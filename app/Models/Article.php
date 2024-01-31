<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
class Article extends Model
{
    use HasFactory;
    protected $fillable=['user_id','title','slug','body','image'];

    
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

//     public function getRouteKeyName()

// {
//     return 'slug';
// }
 public function user()
 {
    return $this->belongsTo(User::class);
 }
 public function categories()
    {
       return $this->belongsToMany(Category::class);
    }
}

