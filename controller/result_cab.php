<?php


namespace controller;
require_once("view/result_cab.php");
require_once("model/model.php");
require_once("model/request.php");
require_once("model/client.php");
class Result_cab
{
    public function main()
    {
        
        
        $model = new \Model();
      
       
        $id_client = $model->select0('id','client','WHERE iin ='.$_SESSION["iin"]);
        
        $result->dat=$model->select('date','result','WHERE client = '.$id_client);
        $result->test_id=$model->select('test','result','WHERE client = '.$id_client);
        $result->result=$model->select('result','result','WHERE client = '.$id_client);
        
        
        for($i=0;$i<count($result->dat);$i++)
           {
              $result->test[$i]=$model->select0('value','test','WHERE id = '.$result->test_id[$i]); 
              
              
              //echo $result->test[$i].' '.$result->result[$i].' '.$result->dat[$i].'<br>';
           }
        
     
        $request = new \view\Result_cab();
        $request->main($result);
       
    }
    
}

?>