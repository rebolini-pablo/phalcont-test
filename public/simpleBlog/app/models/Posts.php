<?php


class Posts extends \Phalcon\Mvc\Model
{
     
    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $title;
     
    /**
     *
     * @var string
     */
    public $description;
     
    /**
     *
     * @var string
     */
    public $content;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id',
            'title' => 'title', 
            'description' => 'description', 
            'content' => 'content'
        );
    }

}
