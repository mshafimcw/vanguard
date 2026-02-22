<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'slug',
        'body',
        'image',
        'post_category_id',
        'user_id',
        'published',
        'featured',
     'gallery_category_id',
    ];

    /**
     * Get the gallery category that owns the post.
     */
    public function galleryCategory()
    {
        return $this->belongsTo(GalleryCategory::class);
    }

    /**
     * Scope posts by gallery category
     */
    public function scopeByGalleryCategory($query, $categoryId)
    {
        return $query->where('gallery_category_id', $categoryId);
    }
    /**
     * Casts for specific columns.
     */
    protected $casts = [
        'published' => 'boolean',
        'featured' => 'boolean',
    ];

    /**
     * Relationship: Post belongs to a category.
     */
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    /**
     * Relationship: Post belongs to a user (author).
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
