<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Page
 * @package App\Models
 * @version May 18, 2020, 6:12 am UTC
 *
 * @property \App\Models\Category $category
 * @property integer $category_id
 * @property string $title
 * @property string $small_text
 * @property string $text
 * @property string $img
 * @property string $img_small
 * @property string $slug
 */
class Page extends Model
{
    use SoftDeletes;

    public $table = 'pages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'category_id',
        'title',
        'small_text',
        'text',
        'img',
        'img_small',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'small_text' => 'string',
        'text' => 'string',
        'img' => 'string',
        'img_small' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'title' => 'required',
        'small_text' => 'required',
        'text' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }
}
