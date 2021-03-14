<?php


namespace controller;
require_once("view/tests.php");
require_once("model/model.php");

class Tests_page
{
    public function main()
    {
        
        $model = new \Model();
        $data->value= $model->select('value','test');
        $data->id= $model->select('id','test');
        
        $tests = new \view\Tests_page();
        $tests->main($data);
        
       
    }
}

?>