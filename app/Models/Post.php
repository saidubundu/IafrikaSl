<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Post extends Model
{
    use HasFactory;
    use Translatable;
    use Resizable;

    protected $translatable = ['title', 'seo_title', 'excerpt', 'body', 'slug', 'meta_description', 'meta_keywords'];

    const PUBLISHED = 'PUBLISHED';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    public function authorId()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'author_id', 'id');
    }

    /**
     * Scope a query to only published scopes.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished(Builder $query)
    {
        return $query->where('status', '=', static::PUBLISHED);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }

    public function getImagePathAttribute()
    {
        return ("/storage/$this->image");
    }

    public function getPathAttribute()
    {
        return ("/juu/$this->slug");
    }

    public function getBodyHtmlAttribute(){
        return \Parsedown::instance()->text($this->body);
    }

    public function getDateAttribute()
    {
        $time = $this->created_at;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->day;
        return $year;
    }

    public function getMonthAttribute()
    {
        $time = $this->created_at;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->shortMonthName;
        return $year;
    }

    public function getYearAttribute()
    {
        $time = $this->created_at;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->year;
        return $year;
    }
}
