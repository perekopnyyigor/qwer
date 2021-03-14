<?php
namespace view;
class Result_cab
{
    public function main($request)
    {
        
  		echo '<div class="registred"><h1>Результаты</h1>';

	
		echo '<table class="table_blur">';
        echo '<tr><th>Тест</th><th>Результат</th><th>Дата</th></th></tr>';
		 for($i=0; $i<count($request->test);$i++)
		 {
		     
		     echo '<tr><td>'.$request->test[$i].'</td>';
		     echo '<td>'.$request->result[$i].'</td>';
		     echo '<td>'.$request->dat[$i].'</td></tr>';
		   
		        
		    //echo '<td><a href="http://exengroup.kz/?action=request_cab_action&test='.$test->id[$i].'">Подать заявку</a></td></tr>';
		 }
  		echo '</table>';
  		
		echo '</div>';
		
		
    }
 
}

?>