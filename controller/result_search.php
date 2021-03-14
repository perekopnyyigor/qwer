<?php


namespace controller;
require_once("view/result_admin.php");
require_once("model/model.php");

class Result_search
{
    public function main()
    {
        
        if($_POST["surname"]!= null)
        {
            $model = new \Model();
            $client = $model->select0('id','client','WHERE surname="'.$_POST["surname"].'"');
            $condition = "WHERE client = $client";
        }
        
         if($_POST["iin"]!= null)
        {
            $model = new \Model();
            $client = $model->select0('id','client','WHERE iin="'.$_POST["iin"].'"');
            $condition = "WHERE client = $client";
        }
        
         if($_POST["organization"]!= null)
        {
            $model = new \Model();
            $client = $model->select('id','client','WHERE organization="'.$_POST["organization"].'"');
            for($i=0;$i<count($client);$i++)
                $condition[$i] = "WHERE client = $client[$i]";
        }
        
         if($_POST["date"]!= null)
        {
            $model = new \Model();
            
            $condition = 'WHERE date > "'.$_POST["date"].'"';
        }   
        
         if($_POST["test"]!= null)
        {
            $model = new \Model();
            
             $condition = 'WHERE test = "'.$_POST["test"].'"';
        }   
         
       
        $model = new \Model();
        
        
        if($_POST["organization"]!= null)
        {
            for($i=0;$i<count($condition);$i++)
            {
                $id_ = $model->select('id','result', $condition[$i]);
                for($j=0;$j<count($id_);$j++)
                    $id[]=$id_[$j];
            }
                
        }
        else
            $id = $model->select('id','result', $condition);
      
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