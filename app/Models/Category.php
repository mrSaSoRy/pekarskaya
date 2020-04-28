<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @version April 27, 2020, 2:11 am UTC
 *
 * @property string $title
 */
class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'/*,
        'created_at' => 'required',
        'updated_at' => 'required'*/
    ];

    public function page()
    {
        return $this->hasMany('App\Models\Page');
    }

}
