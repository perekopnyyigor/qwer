<?php


namespace controller;
require_once("view/cabinet.php");
require_once("model/model.php");

class Cabinet_page
{
    public function main()
    {
        
        $model = new \Model();
        $client->name= $model->select0('name','client','WHERE iin ='.$_SESSION["iin"]);
        $client->surname= $model->select0('surname','client','WHERE iin ='.$_SESSION["iin"]);
        $client->fathername= $model->select0('fathername','client','WHERE iin ='.$_SESSION["iin"]);
        
        
        $cabinet = new \view\Cabinet_page();
        $cabinet->main($client);
    }
}

?>