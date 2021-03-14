<?php

namespace controller;
require_once("view/protocol.php");
require_once("model/model.php");
require_once("model/client.php");
class Protocol_page
{
    public function main()
    {
        $group[2]='II';
        $group[3]='III';
        $group[4]='IV';
        $group[5]='V';
        
        $result = $_GET["result"];
        
        $model=new \Model();
        
        $data->id_client = $model->select0('client','result','WHERE id ='.$result);
        $data->id_test = $model->select0('test','result','WHERE id ='.$result);
        
        $data->result_date = $model->select0('date','result','WHERE id ='.$result);
        
        $data->result = $model->select0('result','result','WHERE id ='.$result);
        $data->name_test = $model->select0('value','test','WHERE id ='.$data->id_test );
        $data->result_group = $model->select0('group_ptb','test','WHERE id ='.$data->id_test );
  
        $data->person_name= $model->select('name','person');
        $data->person_position= $model->select('position','person');
        $data->person_id= $model->select('id','person');
        
        $client = new \Client($data->id_client);
        
        $data->client_name=$client->name;
        $data->client_surname=$client->surname;
        $data->client_fathername=$client->fathername;
        $data->client_organization=$model->select0('name','organization','WHERE id ='.$client->organization);
        $data->client_position=$client->position;
        $data->client_ptb_date=$client->ptb_date;
        $data->client_group_ptb=$group[$client->ptb_group];
        $data->client_personal=$client->personal;
        
        $data->personal_rus=$model->select0('rus','personal','WHERE id ='.$data->client_personal );
        $data->personal_kaz=$model->select0('kaz','personal','WHERE id ='.$data->client_personal );
        
        echo $data->personal_rus;
        
        
        $_SESSION["data"]=$data;
       
        
        
        
        $person->name = $model->select('name','person');
        $person->position = $model->select('position','person');
        $person->id = $model->select('id','person');
        
        $protocol = new \view\Protocol_page();
        
        $protocol->main($person);
        
        
    }
}

?>