<?php
namespace EntityPresenter\TestCase\View;

use Cake\TestSuite\TestCase;
use TestApp\Model\Entity\Article;

class PresenterTest extends TestCase
{
    public function test_presenter_initiated()
    {
        $article = new Article;
        $this->assertInstanceOf(\EntityPresenter\View\Presenter\Presenter::class, $article->present());
    }
}
