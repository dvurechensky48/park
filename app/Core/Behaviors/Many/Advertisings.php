<?php

namespace App\Core\Behaviors\Many;

use Orchid\CMS\Behaviors\Many;
use Orchid\CMS\Http\Forms\Posts\BasePostForm;
use Orchid\CMS\Http\Forms\Posts\UploadPostForm;


class Advertisings extends Many
{
    /**
     * @var string
     */
    public $name = 'Реклама';

    /**
     * @var string
     */
    public $description = 'Блок в футере на главной';

    /**
     * @var string
     */
    public $slug = 'advertisings';

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
            'id'          => 'sometimes|integer|unique:posts',
        ];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            'name'                  => 'tag:input|type:name|name:name|max:100|title:Название',
            'body'                  => 'tag:textarea|name:body|max:255|rows:10|title:Описание,появляется над картинкой',
            'link'                  => 'tag:input|type:name|name:link|max:100|title:Ссылка на страницу',
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