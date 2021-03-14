<?php
namespace view;
class Tests_page
{
    public function main($test)
    {
       
  			    
        echo '<div class="registred">
        <a href="">Тесты</a>
        <h1>Добавить тест</h1>';
          
  			    
		echo '<form action="main.php?action=test_action" method="post">
 	
		
		
 		<input placeholder="Название теста" type="text" name="name" />
		
		
		
  		
		
		
 		<p><input type="submit" value="Добавить" /></p>
		</form>';
		
		
		
		echo '<table class="table_blur">';
        echo '<tr><th>Список тестов</th><th>...</th></tr>';
		 for($i=0; $i<count($test->value);$i++)
		 {
		     echo '<tr><td>'.$test->value[$i].'</td>';
		  echo '<td><a href="main.php?action=questions_page&id='.$test->id[$i].'">Добавить вопросы</a></td></tr>';
		 }
  		echo '</table>';
  		
		echo '</div>';
		
    }
}

?>