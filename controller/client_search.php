<?php


namespace controller;
require_once("view/client.php");
require_once("model/model.php");

class Client_search
{
    public function main()
    {
        
        
       
        
        if($_POST["surname"]!= null)
            $request_surname = "WHERE surname = '".$_POST["surname"]."'";
        if($_POST["iin"]!=null)
           $request_surname = "WHERE iin = '".$_POST["iin"]."'";
        if($_POST["city"]!=null)
           $request_surname = "WHERE city = '".$_POST["city"]."'";
       if($_POST["organization"]!=null)
           $request_surname = "WHERE organization = '".$_POST["organization"]."'";
        
       
        $data=$this->client($request_surname);
        $org=$this->organization();
        $city=$this->city();
         
        $client = new \view\Client_page();
        $client->main($data,$city,$org);
        
    }
    private function client($request_surname)
    {
        $model = new \Model();
        $data->surname= $model->select('surname','client',$request_surname);
        $data->name= $model->select('name','client',$request_surname);
        $data->fathername= $model->select('fathername','client',$request_surname);
        $data->iin= $model->select('iin','client',$request_surname);
        
        $city_id= $model->select('city','client',$request_surname);
        $organization_id= $model->select('organization','client',$request_surname);
        
        for($i=0;$i<count($city_id);$i++)
        {
             $data->city[]= $model->select0('name','city','WHERE id='.$city_id[$i]);
             $data->organization[]= $model->select0('name','organization','WHERE id='.$organization_id[$i]);
        }
       return $data;
    }
    private function organization()
    {
        $model = new \Model();
        $org->name = $model->select('name','organization');
        $org->id = $model->select('id','organization');
        return $org;
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