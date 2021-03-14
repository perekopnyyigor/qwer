<?php
namespace view;
class Organization_page
{
    public function main($name)
    {
       
  			    
        echo '<div class="registred"><h1>Добавить организацию</h1>';
        	    
  			    
		echo '<form action="main.php?action=organization_action" method="post">
 	
		
		
 		<input placeholder="Организация" type="text" name="name" />
		
		
		
  		
		
		
 		<p><input type="submit" value="Добавить" /></p>
		</form>';
		
		
		
		echo '<table class="table_blur">';
        echo '<tr><th>Список организаций</th></tr>';
		 for($i=0; $i<count($name);$i++)
		 {
		     echo '<tr><td>'.$name[$i].'</td></tr>';
		    
		 }
  		echo '</table>';
  		
		echo '</div>';
		
    }
}

?>