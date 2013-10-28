<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
      $posts = new Posts();
      $this->view->setVar('posts', $posts::find());
    }

}

