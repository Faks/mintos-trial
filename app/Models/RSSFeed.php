<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\RSSFeed
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $author
 * @property string|null $url
 * @property string|null $img_url
 * @property string|null $mime_type
 * @property string|null $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\RSSFeed onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RSSFeed whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RSSFeed withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\RSSFeed withoutTrashed()
 * @mixin \Eloquent
 */
class RSSFeed extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rss_feed';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'author',
        'url',
        'img_url',
        'mime_type',
        'published_at',
    ];
}
