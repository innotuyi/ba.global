<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image_url',
        'whatsapp_link',
        'is_featured',
        'order',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_featured' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Generate a unique slug for the product.
     *
     * @param string $name
     * @return string
     */
    public static function generateSlug($name)
    {
        return Str::slug($name);
    }

    /**
     * Scope a query to only include featured products.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->orderBy('order');
    }

    /**
     * Get the WhatsApp link for the product.
     *
     * @return string
     */
    public function getWhatsAppUrlAttribute()
    {
        return $this->whatsapp_link;
    }

    /**
     * Get the image URL for the product.
     *
     * @return string|null
     */
    public function getImageUrlAttribute()
    {
        return $this->image_url;
    }

    /**
     * Set the product's name and automatically generate a slug.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = self::generateSlug($value);
    }
}