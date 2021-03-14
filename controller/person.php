<?php


namespace controller;
require_once("view/person.php");
require_once("model/model.php");

class Person_page
{
    public function main()
    {
        
    
        $model = new \Model();
        $data->name= $model->select('name','person');
        $data->position= $model->select('position','person');
        /*
        $id = $model->select('id','district');
        
        for($i=0;$i<count($id);$i++)
        {
            $city[$i]= $model->select('name','city','WHERE district_id = '.$id[$i]);
        }
        */
        $person=  new \view\Person_page();
        $person->main($data);
        
    }
}

?>