<?php 
namespace view;
class Protocol_page
{
    public function main($person)
    {
        echo '<div class="registred"><h1>Протокол ПТБ</h1>';
        	    
  	
		echo '<form action="http://exengroup.kz/action/tpdf/protocol.php" method="post">
 	
		
		
 	    <select placeholder="Председатель комиссии" name="cause">
			<option >Причина</option>';
			
			
  			    echo '<option value="первичная">Первичная</option>';
  		        echo '<option value="повторная">Повторная</option>';
		echo '</select>
		
		
		<select placeholder="Председатель комиссии" name="person1">
			<option >Председатель комиссии</option>';
			
			for($i=0; $i<count($person->name);$i++)
  			    echo '<option value="'.$i.'">'.$person->name[$i].'</option>';
  		
		echo '</select>
		
		<select placeholder="Член комиссии" name="person2">
			<option >Член комиссии</option>';
			
			for($i=0; $i<count($person->name);$i++)
  			    echo '<option value="'.$i.'">'.$person->name[$i].'</option>';
  		
		echo '</select>
		
		<select placeholder="Член комиссии" name="person3">
			<option >Член комиссии</option>';
			
			for($i=0; $i<count($person->name);$i++)
  			    echo '<option value="'.$i.'">'.$person->name[$i].'</option>';
  		
		echo '</select>
		
 		<p><input value="Сформировать" type="submit" /></p>
		</form>';
	
  	
		echo '</div>';
    }
}
?>