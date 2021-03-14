<?php


namespace controller;
require_once("view/reg.php");
require_once("model/model.php");

class Reg_page
{
    public function main()
    {
    
        $model = new \Model();
       
        
        $name= $model->select('name','district');
        $id = $model->select('id','district');
        
        $org = $model->select('name','organization');
        $org_id = $model->select('id','organization');
        for($i=0;$i<count($id);$i++)
        {
            $city[$i]= $model->select('name','city','WHERE district_id = '.$id[$i]);
            $city_id[$i]= $model->select('id','city','WHERE district_id = '.$id[$i]);
        }
        
        
        $reg=  new \view\Reg_page();
        $reg->main($name,$city,$city_id,$org,$org_id);
        
    }
}

?>