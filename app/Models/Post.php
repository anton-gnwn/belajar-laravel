<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // Boleh di isi sisa nya gaboleh diisi
    // protected $fillable = [
    //     'title', 'excrept', 'body'
    // ];

    // Tidak boleh diisi sisa nya boleh
    protected $guarded = ['id'];
    protected $with = ['author', 'category']; // Menggunakan Eager Loading

    public function scopeFilter($query, array $filters) // Membuat kolom search menggunakan Query Scope
    {
        // Pencarian All Post
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        // Pencarian Category versi Callback
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // Pencarian Author versi Erofunction
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas('author', fn ($query) =>
            $query->where('username', $author))
        );
    }

    public function category() // Menghubungkan ke Category
    {
        return $this->belongsTo(Category::class); // Relasi One to One
    }

    public function author() // Menghubungkan ke User dengan nama berbeda: Author
    {
        return $this->belongsTo(User::class, 'user_id');  // Relasi One to One
    }

    public function getRouteKeyName()
    {
        return 'slug'; // Pencarian data menggunakan key name = slug untuk mengedit
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
