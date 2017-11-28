<?php

namespace App\Core\Behaviors\Single;

use Orchid\CMS\Behaviors\Single;
use Orchid\CMS\Http\Forms\Posts\UploadPostForm;

class Information extends Single
{
    
    /**
     * @var string
     */
    public $name = 'Информация с главной страницы';

    /**
     * @var string
     */
    public $description = 'Главная страница';

    /**
     * @var string
     */
    public $slug = 'information';

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
            'name'        => 'tag:input|type:text|name:name|max:255|title:Заголовок',
            'body'        => 'tag:wysiwyg|name:body|max:255|rows:10|title:Тело страницы',
        ];
    }

    /**
     * @return array
     */
    public function modules() : array
    {
        return [
            UploadPostForm::class,
        ];
    }
}
