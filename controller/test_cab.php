<?php


namespace controller;
require_once("view/test_cab.php");
require_once("model/model.php");

class Test_cab
{
    public function main()
    {
    
        $id = $_GET["id"];
        $test->id=$id;
        $model = new \Model();
        $test->question = $model->select('text','question','WHERE test ='.$id);
        $test->question_id = $model->select('id','question','WHERE test ='.$id);
        for($i=0;$i<count($test->question_id);$i++)
        {
            $test->options[$i] = $model->select('text','options','WHERE question ='.$test->question_id[$i]);
            $test->options_id[$i] = $model->select('id','options','WHERE question ='.$test->question_id[$i]);
        }
        
        $id_client=$model->select0('id','client','WHERE iin ='.$_SESSION["iin"]);
        $status = $model->select0('status','resolution','WHERE test ='.$id.' AND client = '.$id_client);
        
        
        
        if($status=='ok')
        {
           $tests = new \view\Test_cab();
            $tests->main($test); 
        }
        
       
       
    }
}

?>