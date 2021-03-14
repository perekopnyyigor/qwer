<?php


namespace controller;
require_once("view/options.php");
require_once("model/model.php");

class Options_page
{
    public function main()
    {
        
        $model = new \Model();
        $option->text = $model->select('text','options','WHERE question='.$_GET["question"]);
        $option->id = $model->select('id','options','WHERE question='.$_GET["question"]);
        $option->check = $model->select('check_','options','WHERE question='.$_GET["question"]);
        
        
        
        $question_text = $model->select0('text','question','WHERE id='.$_GET["question"]);
        
        $test->id = $model->select0('test','question','WHERE id='.$_GET["question"]);
        $test->name = $model->select0('value','test','WHERE id='.$test->id );
        
        $options = new \view\Options_page();
        $options->main($_GET["question"], $option,$question_text,$test);
        
       
    }
}

?>