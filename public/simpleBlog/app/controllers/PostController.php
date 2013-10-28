<?php

class PostController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
      /* */
    }

    public function readAction($postID)
    {
      $post = Posts::findFirst($postID);
      $this->view->setVar('post', $post);
    }

}

