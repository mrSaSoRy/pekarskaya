<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Page
 * @package App\Models
 * @version April 27, 2020, 2:43 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property integer $categories_id
 * @property string $title
 * @property string $small_text
 * @property string $text
 */
class Page extends Model
{
    use SoftDeletes;

    public $table = 'pages';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'categories_id',
        'title',
        'small_text',
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'categories_id' => 'integer',
        'title' => 'string',
        'small_text' => 'string',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'title' => 'required',
        'small_text' => 'required',
        'text' => 'required',
//        'created_at' => 'required',
//        'updated_at' => 'required',
        'categories_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function categories()
    {
        return $this->belongsTo(\App\Models\Category::class, 'categories_id');
    }
}
