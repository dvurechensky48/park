<?php

namespace App\Core\Behaviors\Many;

use Orchid\CMS\Behaviors\Many;
use Orchid\CMS\Http\Forms\Posts\BasePostForm;
use Orchid\CMS\Http\Forms\Posts\UploadPostForm;

class Galery extends Many
{
    /**
     * @var string
     */
    public $name = 'Галерея';

    /**
     * @var string
     */
    public $description = 'Фотографии из нижнего парка';

    /**
     * @var string
     */
    public $slug = 'galery';

    /**
     * Slug url /news/{name}.
     *
     * @var string
     */
    public $slugFields = 'name';

    /**
     * Rules Validation.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'id'             => 'sometimes|integer|unique:posts',
        ];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'name'        => 'tag:input|type:text|name:name|max:100|title:Название|help:Альбома',
            'title'                 => 'tag:input|type:title|name:title|max:255|title:title SEO',
            'description'           => 'tag:textarea|name:description|max:255|rows:5|title:Description SEO',
            'keywords'              => 'tag:tags|name:keywords|max:255|title:keywords SEO',
        ];
    }

    /**
     * @return array
     */
    public function modules() : array
    {
        return [
            UploadPostForm::class,
            BasePostForm::class,
            
        ];
    }

    /**
     * Grid View for post type.
     */
    public function grid() : array
    {
        return [
            'name'       => 'Название',
            'publish_at' => 'Дата публикации',
            'created_at' => 'Дата Изменения',
        ];
    }
}
