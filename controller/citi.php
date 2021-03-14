<?php


namespace controller;
require_once("view/citi.php");
require_once("model/model.php");

class Citi_page
{
    public function main()
    {
    
        $model = new \Model();
        $name= $model->select('name','district');
        $id = $model->select('id','district');
        
        for($i=0;$i<count($id);$i++)
        {
            $city[$i]= $model->select('name','city','WHERE district_id = '.$id[$i]);
        }
        
        $citi=  new \view\Citi_page();
        $citi->main($id, $name,$city);
        
    }
}

?>