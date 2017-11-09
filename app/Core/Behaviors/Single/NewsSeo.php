<?php

namespace App\Core\Behaviors\Single;

use Orchid\CMS\Behaviors\Single;
use Orchid\CMS\Http\Forms\Posts\UploadPostForm;

class NewsSeo extends Single
{
    
    /**
     * @var string
     */
    public $name = 'Новости листинг SEO';

    /**
     * @var string
     */
    public $description = 'Новости';

    /**
     * @var string
     */
    public $slug = 'news';

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
            'title'       => 'tag:input|type:text|name:title|max:255|required|title:Title SEO',
            'description' => 'tag:textarea|name:description|max:255|required|rows:5|title:Description SEO',
            'keywords'    => 'tag:tags|name:keywords|max:255|required|title:Keywords|help:Keywords SEO',
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
