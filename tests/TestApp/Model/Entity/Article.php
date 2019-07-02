<?php
namespace TestApp\Model\Entity;

use Cake\ORM\Entity;
use EntityPresenter\PresentableTrait;
use TestApp\View\Presenter\ArticlePresenter;

class Article extends Entity
{
    use PresentableTrait;

    protected $presenter = ArticlePresenter::class;
}
