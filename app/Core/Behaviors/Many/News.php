<?php

namespace App\Core\Behaviors\Many;

use Orchid\CMS\Behaviors\Many;
use Orchid\CMS\Http\Forms\Posts\BasePostForm;
use Orchid\CMS\Http\Forms\Posts\UploadPostForm;


class News extends Many
{
    /**
     * @var string
     */
    public $name = 'Новости';

    /**
     * @var string
     */
    public $description = 'Новости нижнего парка';

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
            'id'          => 'sometimes|integer|unique:posts',
        ];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'name'                  => 'tag:input|type:name|name:name|max:100|required|title:Название события',
            'body'                  => 'tag:wysiwyg|name:body|max:255|required|rows:10|title:Описание события',
            'body-small'            => 'tag:textarea|name:body-small|max:255|required|rows:10|title:Короткое описание события',
            'important'             => 'tag:input|type:important|name:phone_number|max:100|required|title:Важная информация',
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