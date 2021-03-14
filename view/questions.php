<?php
namespace view;
class Questions_page
{
    public function main($test, $question)
    {
       
      
       
  			    
        echo '<div class="registred">
        <a href="index.php?action=tests_page">Тесты</a> /
        <a href="">'.$test->name.'</a>
        
        <h1>Добавить вопрос</h1>';
        
  			    
		echo '<form action="main.php?action=questions_action&test='.$test->id.'" method="post">
 	
		
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
		
 	
        <textarea name="text" rows="10" style="width: 100%;"></textarea>
 

		
 		<p><input type="submit" value="Добавить" /></p>
		</form>';
		
		
		
		echo '<table class="table_blur">';
        echo '<tr><th>№</th><th>Список вопросов</th><th>...</th></tr>';
		 for($i=0; $i<count($question->text);$i++)
		 {
		     echo '<tr><td>'.($i+1).'</td>';
		   echo '<td>'.$question->text[$i].'</td>';
		  echo '<td><a href="main.php?action=options_page&question='.$question->id[$i].'">Редактировать</a></td></tr>';
		 }
  		echo '</table>';
  		
		echo '</div>';
		
		
    }
}

?>