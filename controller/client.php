<?php


namespace controller;
require_once("view/client.php");
require_once("model/model.php");

class Client_page
{
    
    public function main()
    {
        
        
        
        
        $data=$this->client();
        $city=$this->city();
        $org=$this->organization();
       
        $client = new \view\Client_page();
        $client->main($data,$city,$org);
        
    }
    
    private function organization()
    {
        $model = new \Model();
        $org->name = $model->select('name','organization');
        $org->id = $model->select('id','organization');
        return $org;
    }
    
    private function client()
    {
        $model = new \Model();
        $count=$model->count('client');
        $condition = "WHERE id >".($count-10);
        $data->surname= $model->select('surname','client',$condition);
        $data->name= $model->select('name','client',$condition);
        $data->fathername= $model->select('fathername','client',$condition);
        $data->iin= $model->select('iin','client',$condition);
        
        $city_id= $model->select('city','client',$condition);
        $organization_id= $model->select('organization','client',$condition);
        
         for($i=0;$i<count($city_id);$i++)
        {
             $data->city[]= $model->select0('name','city','WHERE id='.$city_id[$i]);
             $data->organization[]= $model->select0('name','organization','WHERE id='.$organization_id[$i]);
        }
        
        return $data;
    }
    private function city()
    {
        $model = new \Model();
        
        $city->region= $model->select('name','district');
        $id = $model->select('id','district');
        
        for($i=0;$i<count($id);$i++)
        {
            $city->name[$i]= $model->select('name','city','WHERE district_id = '.$id[$i]);
            $city->id[$i]= $model->select('id','city','WHERE district_id = '.$id[$i]);
        }
        return $city;
    }
}

?>