<?php
namespace App\Core\Behaviors\Many;
use Orchid\CMS\Behaviors\Many;
use Orchid\CMS\Http\Forms\Posts\BasePostForm;
use Orchid\CMS\Http\Forms\Posts\UploadPostForm;
class Typical extends Many
{
    /**
     * @var string
     */
    public $name = 'Типовая страница';
    /**
     * @var string
     */
    public $description = 'Создание страниц для слайдера, информационных страниц и т.д. Путь к страницы /typical';
    /**
     * @var string
     */
    public $slug = 'typical';
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
            'name'        => 'tag:input|type:text|name:name|max:255|title:Заголовок',
            'body'        => 'tag:wysiwyg|name:body|max:255|rows:10|title:Тело страницы',
            'title'       => 'tag:input|type:text|name:title|max:255|title:Title SEO',
            'description' => 'tag:textarea|name:description|max:255|rows:5|title:Description SEO',
            'keywords'    => 'tag:tags|name:keywords|max:255|title:Keywords SEO',
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