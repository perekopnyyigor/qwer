<?php


namespace controller;
require_once("view/anketa.php");
require_once("model/model.php");
require_once("model/district.php");
require_once("model/client.php");
class Anketa_page
{
    public function main()
    {
        echo "controller";
        
        $model = new \Model();
        $id=$model->select('id','district');
        
        for($i=0;$i<count($id);$i++)
            $district[$i] = new \District($id[$i]);
            
        $personal->id=$model->select('id','personal');
        $personal->rus=$model->select('rus','personal');
        $personal->kaz=$model->select('kaz','personal');
        
        $organization->id=$model->select('id','organization');
        $organization->name=$model->select('name','organization');
        
        $iin = $_SESSION["iin"];
        $id_client = $model->select0('id','client','WHERE iin='.$iin);
        $client = new \Client($id_client);
        
        
        $anketa = new \view\Anketa_page();
        $anketa->main($district,$organization,$client,$personal);
        
       
    }
}

?>