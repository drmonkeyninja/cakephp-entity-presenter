<?php
namespace TestApp\Model\Entity;

use Cake\ORM\Entity;
use EntityPresenter\Presentable;
use TestApp\View\Presenter\ArticlePresenter;

class Article extends Entity
{
    use Presentable;

    protected $presenter = ArticlePresenter::class;
}
