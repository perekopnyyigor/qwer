<?php
require_once("model.php");

class District
{
    public $id;
    public $name;
    public $city;
 
    public function __construct($id)
    {
        $model = new Model();
        $this->id = $id;
        $this->name = $model->select0('name','district','WHERE id='.$id);
        
        $cityid = $model->select('id','city','WHERE district_id='.$id);
        $cityname = $model->select('name','city','WHERE district_id='.$id);
        
        for($i=0;$i<count($cityid);$i++)
        {
            $this->city[$i]->name=$cityname[$i];
            $this->city[$i]->id=$cityid[$i];
        }
    }
    
}
?>