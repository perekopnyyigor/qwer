<?php


namespace controller;
require_once("view/questions.php");
require_once("model/model.php");

class Questions_page
{
    public function main()
    {
        
        $model = new \Model();
        $question->text = $model->select('text','question','WHERE test='.$_GET["id"]);
        $question->id = $model->select('id','question','WHERE test='.$_GET["id"]);
        
        $test->id=$_GET["id"];
        $test->name = $model->select0('value','test','WHERE id='.$_GET["id"]);
        
        $questions = new \view\Questions_page();
        $questions->main($test, $question);
        
       
    }
}

?>