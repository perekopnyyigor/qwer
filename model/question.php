<?php
require_once("model.php");

class Question
{
    public $id;
    public $text;
    public $options;
    public $options_id;
    public function __construct($id)
    {
        $model = new Model();
        $this->id = $id;
        $this->text = $model->select0('text','question','WHERE id='.$id);
        $this->options=$model->select('text','options','WHERE question='.$id);
        $this->options_id=$model->select('id','options','WHERE question='.$id);
    }
    
}
?>