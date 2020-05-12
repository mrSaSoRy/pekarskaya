<?php

namespace App\Repositories;

use App\Models\Page;
use App\Repositories\BaseRepository;

/**
 * Class PageRepository
 * @package App\Repositories
 * @version May 7, 2020, 3:57 am UTC
*/

class PageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'title',
        'small_text',
        'text',
        'img',
        'img_small',
        'slug'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Page::class;
    }
}
