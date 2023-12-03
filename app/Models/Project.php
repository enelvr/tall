<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = ['title', 'description', 'image', 'is_public', 'user_id'];


    public function getImagenUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function scopeIsPublic($query)
    {
        return $query->where('is_public', true);
    }

    public function scopeFilter($query, $search) {
        return $query
        ->when($search, fn ($query) => $query->where('title', 'like', '%' . $search . '%'));
    }
}