<?php
namespace view;
class Citi_page
{
    public function main($id, $name, $city)
    {
       
  			    
        echo '<div class="registred"><h1>Добавить город</h1>';
        	    
  			    
		echo '<form action="main.php?action=citi_action" method="post">
 	
		
		
 		<input placeholder="Имя" type="text" name="name" />
		
		
		<select placeholder="Выберите регион" name="region">
			<option >Выберите регион</option>';
			
			for($i=0; $i<count($id);$i++)
  			    echo '<option value="'.$id[$i].'">'.$name[$i].'</option>';
  		
		echo '</select>
		
 		<p><input type="submit" /></p>
		</form>';
		echo '<div class="list">';
		echo '<table class="table_blur">';
        echo '<tr><th>Список</th></tr>';
		 for($i=0; $i<count($name);$i++)
		 {
		     echo '<tr><td>'.$name[$i].'</td></tr>';
		     for($j=0; $j<count($city[$i]);$j++)
    		 {
    		     echo '<tr><td align="right">'.$city[$i][$j].'</td></tr>';
    		     
    		 }
		 }
  		echo '</table>';
  		echo '</div>';
		echo '</div>';
    }
}

?>