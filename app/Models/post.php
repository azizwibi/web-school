<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model

{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with=['category','author'];

    public function ScopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search){
        return $query->where('title','like','%' . $search . '%')
                   ->orWhere('body','like', '%' . $search . '%');
        });
     }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }


    public function getRouteKeyName()
{
    return 'slug';
}

    public function sluggable(): array
    {
        return [
            'Slug' => [
                'source' => 'title'
            ]
        ];
    }


}

