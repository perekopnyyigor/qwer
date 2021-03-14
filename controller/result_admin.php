<?php


namespace controller;
require_once("view/result_admin.php");
require_once("model/model.php");
require_once("model/request.php");
require_once("model/client.php");
class Result_admin
{
    public function main()
    {
        
        
        $model = new \Model();
      
          
        $count=$model->count('result');
     
      $id = $model->select('id','result','WHERE id >'.($count-10));
      
        for($i=0; $i<count($id);$i++)
        {
            
            $test_id=$model->select0('test','result','WHERE id='.$id[$i]); 
          
            $client_id=$model->select0('client','result','WHERE id='.$id[$i]); 
             
            $data[$i]->client = new \Client($client_id);
             
            $data[$i]->test = $model->select0('value','test','WHERE id='.$test_id);
           
            $data[$i]->result =$model->select0('result','result','WHERE id='.$id[$i]); 
            $data[$i]->result_date =$model->select0('date','result','WHERE id='.$id[$i]); 
            $data[$i]->result_id =$id[$i]; 
        }
        
     
        $org = $this->organization();
        $test = $this->test();
        $request = new \view\Result_admin();
        $request->main($data, $org, $test);
        
    }
    private function organization()
    {
        $model = new \Model();
        $org->name = $model->select('name','organization');
        $org->id = $model->select('id','organization');
        return $org;
    }
    private function test()
    {
        $model = new \Model();
        $test->name = $model->select('value','test');
        $test->id = $model->select('id','test');
        return $test;
    }
}

?>