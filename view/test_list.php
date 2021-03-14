<?php
namespace view;
class Test_list
{
    public function main($test,$resolution)
    {
        
      
       
  		    
        echo '<div class="registred"><h1>Тесты</h1>';
        	    
  			    
		
		
		
		
		echo '<table class="table_blur">';
        echo '<tr><th>Список тестов</th><th></th></tr>';
		 for($i=0; $i<count($test->value);$i++)
		 {
		     
		     if($resolution[$test->id[$i]]=='ok')
		     {
		         
		         echo '<tr><td>'.$test->value[$i].'</td>';
		        echo '<td><a href="index.php?action=test_cab&id='.$test->id[$i].'">Пройти</a></td></tr>';
		     }
		     
		 }
  		echo '</table>';
  	
		echo '</div>';
		
		
    }
}

?>