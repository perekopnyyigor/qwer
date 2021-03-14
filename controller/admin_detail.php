<?php


namespace controller;
require_once("view/admin_detail.php");
require_once("model/model.php");
require_once("model/question.php");
require_once("model/client.php");
class Admin_detail
{
    public function main()
    {
        $res = $_GET["result"];
        
        $model = new \Model();
        
        
        $id = $model->select('id','details','WHERE result='.$res);
        
        for($i=0; $i<count($id);$i++)
        {
           
            $question_id = $model->select0('question','details','WHERE id='.$id[$i]);
            
            $data[$i]->answer =$model->select0('options','details','WHERE id='.$id[$i] );
            $data[$i]->true_answer =$model->select0('true_options','details','WHERE id='.$id[$i] );
            
            $data[$i]->question = new \Question($question_id);
        }   
     
       //echo $data[0]->question->text;
        
        $request = new \view\Admin_detail();
        $request->main($data);
        
    }
}

?>