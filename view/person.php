<?php
namespace view;
class Person_page
{
    public function main($person)
    {
       echo "view";
  			    
        echo '<div class="registred"><h1>Добавить должность</h1>';
        	    
  			    
		echo '<form action="main.php?action=person_action" method="post">
 	
		<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
		
 		<input placeholder="Имя" type="text" name="name" />
 		<br>
		<p>Должность</p>
		<br>
		<textarea  name="position" rows="10" cols="100"></textarea>
		<br>
		
 		<p><input type="submit" value="Добавить" /></p>
		</form>';
		
		
		
		echo '<table class="table_blur">';
        echo '<tr><th>ФИО</th><th>Должность</th></tr>';
		 for($i=0; $i<count($person->name);$i++)
		 {
		     echo '<tr><td>'.$person->name[$i].'</td><td>'.$person->position[$i].'</td></tr>';
		 }
  		echo '</table>';
  		
		echo '</div>';
		
    }
}

?>