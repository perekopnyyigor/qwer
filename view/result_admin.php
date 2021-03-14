<?php
namespace view;
class Result_admin
{
    public function main($request="",$org="",$test="")
    {
        
  		echo '<div class="search_client"><h1>Результаты</h1>';
        	    
  				    
		echo '<form class="search" action="main.php?action=result_search" method="post">
 	
		<input placeholder="Фамилия" type="text" name="surname" />
		
		<input placeholder="ИИН" type="text" name="iin" />
		
		<input placeholder="Дата" type="date" name="date" />
		
		';
		
 		
		
		$this->organization($org);
        $this->test($test);
 		echo '<p><input type="submit" value="Найти" /></p>
		</form>';	    
		echo '</div>';
		
        echo '<div class="search_result">';
        	    
  		
		
	
		echo '<form class="search" action="main.php?action=protocol_all" method="post">';
		echo '<table class="table_blur">';
        echo '<tr><th>ФИО</th><th>ИИН</th><th>Тест</th><th>Результат</th><th>Дата</th><th>Подробнее</th><th>Протокол</th><th><input id ="all" type="checkbox" class="check_all" /></th></tr>';
		 for($i=0; $i<count($request);$i++)
		 {
		     echo '<tr><td>'.$request[$i]->client->surname.' '.$request[$i]->client->name.' '.$request[$i]->client->fathername.'</td>';
		     echo '<td>'.$request[$i]->client->iin.'</td>';
		     echo '<td>'.$request[$i]->test.'</td>';
		     echo '<td>'.$request[$i]->result.'</td>';
		     echo '<td>'.$request[$i]->result_date.'</td>';
		     echo '<td><a href="index.php?action=admin_detail&result='.$request[$i]->result_id.'">Просмотреть</a></td>';
		     echo '<td><a href="index.php?action=protokol&result='.$request[$i]->result_id.'">Протокол</a></td>';
		     echo '<td><input class="check" type="checkbox" name="check[]" value="'.$request[$i]->result_id.'" /><br /></td></tr>';   
		        
		    //echo '<td><a href="http://exengroup.kz/?action=request_cab_action&test='.$test->id[$i].'">Подать заявку</a></td></tr>';
		 }
  		echo '</table>';
  		echo '<input type="submit" value="Протоколы" /></form>';
		echo '</div>';
		echo '<script src="js/check.js"></script>';
		
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
    private function test($test)
    {
        echo '<select class="sel_search" placeholder="Выберите тест" name="test">
			<option value="">Выберите тест</option>';
			for($i=0;$i<count($test->name);$i++)
			{
			    echo '<option value="'.$test->id[$i].'" >'.$test->name[$i].'</option>';
			  
			}
  		
		echo '</select>';
    }
}

?>