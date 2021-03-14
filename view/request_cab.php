<?php
namespace view;
class Request_cab
{
    public function main($test)
    {
       
  			    
        echo '<div class="registred"><h1>Оставьте заявку</h1>';
        	    
  			    
		
		
		
		
		echo '<table class="table_blur">';
        echo '<tr><th>Список заявок</th><th></th></tr>';
		 for($i=0; $i<count($test->name);$i++)
		 {
		     if($test->resolution[$i]!='ok')
		     {
		         echo '<tr><td>'.$test->name[$i].'</td>';
		         echo '<td><a href="http://exengroup.kz/?action=request_cab_action&test='.$test->id[$i].'">Подать заявку</a></td></tr>';
		     }
		     
		 }
  		echo '</table>';
  		
		echo '</div>';
		
    }
}

?>