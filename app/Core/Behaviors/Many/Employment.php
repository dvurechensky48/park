<?php

namespace App\Core\Behaviors\Many;

use Orchid\CMS\Behaviors\Many;
use App\Http\Forms\Posts\Options;
use Orchid\CMS\Http\Forms\Posts\BasePostForm;
use Orchid\CMS\Http\Forms\Posts\UploadPostForm;

class Employment extends Many
{
    /**
     * @var string
     */
    public $name = 'Чем заняться';

    /**
     * @var string
     */
    public $description = 'Чем заняться в нижнем парке';

    /**
     * @var string
     */
    public $slug = 'employment';

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
            'id'          => 'sometimes|integer|unique:posts',
        ];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'name'                  => 'tag:input|type:name|name:name|max:100|required|title:Название раздела',
            'article-title'         => 'tag:input|type:name|name:article-title|max:100|required|title:Заголовок статьи',
            'article-main'         => 'tag:input|type:article|name:article-main|max:100|required|title:Надпись под названием на главной',
            'body'                  => 'tag:wysiwyg|name:body|max:255|required|rows:10|title:Описание',
            'title'                 => 'tag:input|type:title|name:title|max:255|required|title:title SEO',
            'description'           => 'tag:textarea|name:description|max:255|required|rows:5|title:Description SEO',
            'keywords'              => 'tag:tags|name:keywords|max:255|required|title:keywords SEO',
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
            'title'       => 'Название',
            'publish_at' => 'Дата публикации',
            'created_at' => 'Дата Изменения',
        ];
    }
}