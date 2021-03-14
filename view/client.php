<?php
namespace view;
class Client_page
{
    public function main($data,$city,$org)
    {
       
  		    
        echo '<div class="search_client"><h1>Список клиентов</h1>';
        	    
  				    
		echo '<form class="search" action="main.php?action=client_search" method="post">
 	
		<input placeholder="Фамилия" type="text" name="surname" />
		
		<input placeholder="ИИН" type="text" name="iin" />';
		
 		
		$this->region($city);
		$this->organization($org);

 		echo '<p><input type="submit" value="Найти" /></p>
		</form>';
		
		
		
		echo '<table class="table_blur">';
        echo '<tr><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>ИИН</th><th>Город</th><th>Организация</th></tr>';
		 for($i=0; $i<count($data->name);$i++)
		 {
		     echo '<tr><td>'.$data->surname[$i].'</td>';
		     echo '<td>'.$data->name[$i].'</td>';
		     echo '<td>'.$data->fathername[$i].'</td>';
		     echo '<td>'.$data->iin[$i].'</td>';
		     echo '<td>'.$data->city[$i].'</td>';
		     echo '<td>'.$data->organization[$i].'</td></tr>';
		 }
  		echo '</table>';
  		
		echo '</div>';
		
    }
    private function region($city)
    {
        
        echo '<select class="sel_search" placeholder="Выберите регион" name="city">
			<option value="">Выберите регион</option>';
			for($i=0;$i<count($city->region);$i++)
			{
			    
			    echo '<optgroup label="'.$city->region[$i].'">';
			    for($j=0;$j<count($city->name[$i]);$j++)
    			{
    			    echo '<option value="'.$city->id[$i][$j].'" >'.$city->name[$i][$j].'</option>';
    			}
    			echo '</optgroup >';
			}
  		
		echo '</select>';
    }
    private function organization($org)
    {
        echo '<select class="sel_search" placeholder="Выберите организацию" name="organization">
			<option value="">Выберите организацию</option>';
			for($i=0;$i<count($org->name);$i++)
			{
			    echo '<option value="'.$org->id[$i].'" >'.$org->name[$i].'</option>';
			  
			}
  		
		echo '</select>';
    }
}

?>