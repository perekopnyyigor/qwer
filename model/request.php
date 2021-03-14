<?php
require_once("model.php");

class Request
{
    public $id;
    public $test;
    public $client;
    public $dat;
    public $status;
    public function __construct($id)
    {
        $model = new Model();
        $this->id = $id;
        $this->test = $model->select0('test','request','WHERE id='.$id);
        $this->client = $model->select0('client','request','WHERE id='.$id);
        $this->dat = $model->select0('date','request','WHERE id='.$id);
        $this->status = $model->select0('status','request','WHERE id='.$id);
    }
    
}
?>