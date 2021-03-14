<?php
require_once("model.php");

class Client
{
    public $id;
    public $iin;
    public $surname;
    public $name;
    public $fathername;
    public $organization;
    public $city;
    public $position;
    public $ptb_group;
    public $ptb_date;
    public $ptm_date;
    public $personal;
    public function __construct($id)
    {
        $model = new Model();
        $this->id=$id;
        $this->surname = $model->select0('surname','client','WHERE id='.$id);
        $this->name = $model->select0('name','client','WHERE id='.$id);
        $this->iin = $model->select0('iin','client','WHERE id='.$id);
        $this->fathername = $model->select0('fathername','client','WHERE id='.$id);
        $this->organization = $model->select0('organization','client','WHERE id='.$id);
        $this->city = $model->select0('city','client','WHERE id='.$id);
        $this->position = $model->select0('position','client','WHERE id='.$id);
        $this->ptb_group = $model->select0('ptb_group','client','WHERE id='.$id);
        $this->ptb_date = $model->select0('ptb_date','client','WHERE id='.$id);
        $this->ptm_date = $model->select0('ptm_date','client','WHERE id='.$id);
        $this->personal = $model->select0('personal','client','WHERE id='.$id);
    }
    
}
?>