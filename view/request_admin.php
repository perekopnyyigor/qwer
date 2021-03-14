<?php
namespace view;
class Request_admin
{
    public function main($request)
    {
       
  			    
        echo '<div class="registred"><h1>Заявки</h1>';
        	    
  			    
		
		
		
		
		echo '<table class="table_blur">';
        echo '<tr><th>Клиент</th><th>ИИН</th><th>Заявка на</th><th>Дата</th><th>---</th></tr>';
		 for($i=0; $i<count($request);$i++)
		 {
		     if($request[$i]->req->status=="request")
		     {
		        echo '<tr><td>'.$request[$i]->client->surname.' '.$request[$i]->client->name.' '.$request[$i]->client->fathername.'</td>';
		        echo '<td>'.$request[$i]->client->iin.'</td>';
		        echo '<td>'.$request[$i]->test.'</td>';
		        echo '<td>'.$request[$i]->req->dat.'</td>';
		        echo '<td><a href="index.php?action=resolution_action&request='.$request[$i]->req->id.'">Одобрить</a></td></tr>';
		     }
		        
		        
		    //echo '<td><a href="http://exengroup.kz/?action=request_cab_action&test='.$test->id[$i].'">Подать заявку</a></td></tr>';
		 }
  		echo '</table>';
  		
		echo '</div>';
		
    }
}

?>