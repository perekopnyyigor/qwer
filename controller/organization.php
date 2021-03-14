<?php


namespace controller;
require_once("view/organization.php");
require_once("model/model.php");

class Organization_page
{
    public function main()
    {
        $model = new \Model();
        $name= $model->select('name','organization');
        
        $organization = new \view\Organization_page();
        $organization->main($name);
    }
}

?>