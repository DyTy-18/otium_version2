<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'image', 'document_path',
        'category_id', 'user_id', 'guest_author', 'status', 'published_at',
        'meta_title', 'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function isPublished(): bool
    {
        return $this->status === 'published';
    }

    public function getAuthorNameAttribute(): string
    {
        return $this->author?->name ?? $this->guest_author ?? 'OTIUM';
    }

    public function getAuthorAvatarAttribute(): ?string
    {
        return $this->author?->avatar;
    }

    public function getAuthorJobTitleAttribute(): ?string
    {
        return $this->author?->job_title;
    }

    public function getAuthorBioAttribute(): ?string
    {
        return $this->author?->bio;
    }

    public function getAuthorLinkedinAttribute(): ?string
    {
        return $this->author?->linkedin;
    }

    public function getAuthorTwitterAttribute(): ?string
    {
        return $this->author?->twitter;
    }

    public function getReadingTimeAttribute(): int
    {
        $words = str_word_count(strip_tags($this->content));
        return max(1, (int) ceil($words / 200));
    }
}
