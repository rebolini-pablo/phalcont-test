<?php

class AdminController extends \Phalcon\Mvc\Controller
{

  public function indexAction()
  {

  }

  public function listAction(){
    $posts = Posts::find();
    $this->view->setVar('posts', $posts);
  }

  public function createAction(){
    if ($this->request->isPost() === true) {
      $post = new Posts();
      $post->title       = $this->request->getPost('title');
      $post->description = $this->request->getPost('description');
      $post->content     = $this->request->getPost('content');

      if ($post->save() === false) {
        foreach ($post->getMessages() as $message) {
            echo $message, "\n";
        }
      }
      else {
        $this->response->redirect("admin/list");
      }
    }
  }

  public function editAction($postID){
    if(!$postID) throw new InvalidArgumentException('Invalid or InExistent ID');

    if ($this->request->isPost() === true) {
      $post = Posts::findFirst($postID);
      $post->title = $this->request->getPost('title');
      $post->description = $this->request->getPost('description');
      $post->content = $this->request->getPost('content');

      if ($post->save() == false) {
        echo "Error: \n";
        foreach ($post->getMessages() as $message) {
          echo $message, "\n";
        }
      } else {
        $this->response->redirect("admin/list");
      }
    }

    $post = Posts::findFirst((int)$postID);
    $this->view->setVar('post', $post);
  }

  public function deleteAction($postID){
    if(!$postID) throw new InvalidArgumentException('Invalid or InExistent ID');

    $post = Posts::findFirst((int)$postID);
    $this->view->setVar('post', $post);
  }
}

