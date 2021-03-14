<?php


namespace controller;
require_once("view/test_list.php");
require_once("model/model.php");
require_once("model/client.php");
class Test_list
{
    public function main()
    {
        $iin = $_SESSION["iin"];
        
        $model = new \Model();
       
        
        $id_client= $model->select0('id','client','WHERE iin ='.$iin);
  
        $test->id = $model->select('id','test');
        $test->value = $model->select('value','test'); 
        
        for($i=0;$i<count($test->id);$i++)
        {
            $resolution[$test->id[$i]]=$model->select0('status','resolution','WHERE client ='.$id_client.' AND test ='.$test->id[$i]);
        }
        
      
        
        
       
        
        
        $request = new \view\Test_list();
        $request->main($test,$resolution);
        
    }
}

?>