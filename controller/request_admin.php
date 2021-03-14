<?php


namespace controller;
require_once("view/request_admin.php");
require_once("model/model.php");
require_once("model/request.php");
require_once("model/client.php");
class Request_admin
{
    public function main()
    {
        
        
        $model = new \Model();
        $id = $model->select('id','request');
        
      
        
        for($i=0; $i<count($id);$i++)
        {
            
            $req[$i]->req= new \Request($id[$i]); 
            
        }
        for($i=0; $i<count($id);$i++)
        {
            $id_client = $req[$i]->req->client;
            $req[$i]->client= new \Client($id_client); 
            
        }
        for($i=0; $i<count($id);$i++)
        {
            $id_test = $req[$i]->req->test;
            $req[$i]->test= $model->select0('value','test','WHERE id='.$id_test);
        }
        
         
        $request = new \view\Request_admin();
        $request->main($req);
        
    }
}

?>