<?php


namespace controller;
require_once("view/request_cab.php");
require_once("model/model.php");

class Request_cab
{
    public function main()
    {
        
        $model = new \Model();
        $test->name= $model->select('value','test');
        $test->id= $model->select('id','test');
        
        $client=$model->select0('id','client','WHERE iin='.$_SESSION["iin"]);
        
        for($i=0;$i<count($test->id);$i++)
            $test->resolution[$i]= $model->select0('status','resolution','WHERE client='.$client.' AND test='.$test->id[$i]);
        
        $request = new \view\Request_cab();
        $request->main($test);
    }
}

?>