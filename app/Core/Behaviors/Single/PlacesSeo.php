<?php

namespace App\Core\Behaviors\Single;

use Orchid\CMS\Behaviors\Single;
use Orchid\CMS\Http\Forms\Posts\UploadPostForm;

class PlacesSeo extends Single
{
    
    /**
     * @var string
     */
    public $name = 'Места листинг SEO';

    /**
     * @var string
     */
    public $description = 'Места';

    /**
     * @var string
     */
    public $slug = 'places';

    /**
     * Slug url /news/{name}.
     *
     * @var string
     */
    public $slugFields = 'title';

    /**
     * Rules Validation.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'id'             => 'sometimes|integer|unique:posts',
            'content.*.name' => 'required|string',
            'content.*.body' => 'required|string',
        ];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'title'       => 'tag:input|type:text|name:title|max:255|title:Title SEO',
            'description' => 'tag:textarea|name:description|max:255|rows:5|title:Description SEO',
            'keywords'    => 'tag:tags|name:keywords|max:255|title:Keywords|help:Keywords SEO',
        ];
    }

    /**
     * @return array
     */
    public function modules() : array
    {
        return [
        ];
    }
}
