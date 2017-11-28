<?php

namespace App\Core\Behaviors\Many;

use Orchid\CMS\Behaviors\Many;
use Orchid\CMS\Http\Forms\Posts\BasePostForm;
use Orchid\CMS\Http\Forms\Posts\UploadPostForm;

class MainSlider extends Many
{
    /**
     * @var string
     */
    public $name = 'Слайдер';

    /**
     * @var string
     */
    public $description = 'Главная страница';

    /**
     * @var string
     */
    public $slug = 'mainslider';

    /**
     * Slug url /news/{name}.
     *
     * @var string
     */
    public $slugFields = 'big_text';

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
            'phone_number'        => 'tag:input|type:text|name:phone_number|max:100|title:Номер телефона|help:На слайдере',
            'small_text'          => 'tag:input|type:text|name:small_text|max:255|title:Мелкий текст|help:На слайдере',
            'big_text'            => 'tag:input|type:text|name:big_text|max:255|title:Крупный текст|help:На слайдере',
            'button_text'         => 'tag:input|type:text|name:button_text|max:255|title:Текст в кнопке|help:На слайдере',
            'button_link'         => 'tag:input|type:text|name:button_link|max:255|title:Ссылка|help:На слайдере',
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
            'big_text'       => 'Название',
            'publish_at' => 'Дата публикации',
            'created_at' => 'Дата Изменения',
        ];
    }
}
