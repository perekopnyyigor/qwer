<?php
namespace view;
class Options_page
{
    public function main($question, $options,$question_text,$test)
    {
        $liter[0]='А';  
        $liter[1]='Б'; 
        $liter[2]='В'; 
        $liter[3]='Г'; 
        $liter[4]='Д'; 
        $liter[5]='Е'; 
       
        
        echo '<div class="registred">
        <p>
        <a href="index.php?action=tests_page">Тесты</a> /
        <a href="index.php?action=questions_page&id='.$test->id.'">'.$test->name.'</a>
        </p>
        
        <br>
        <h1>Редактировать вопрос</h1>
 
     

        <form action="main.php?action=question_redact&question='.$question.'" method="post">
               <textarea name="question_text" rows="10" style="width: 100%;">'.$question_text.'</textarea>';
 
  			    
	
		
		
		echo '<table class="table_blur">';
        echo '<tr><th></th><th>Список вариантов</th><th>Правильный ответ</th></tr>';
		 for($i=0; $i<count($options->text);$i++)
		 {
		     echo '<tr><td>'.$liter[$i].'</td>';
		     
		     echo '<td><textarea name="'.$options->id[$i].'" rows="5">'.$options->text[$i].'</textarea></td>';
		     
		     if($options->check[$i]==="check")
		        echo '<td><input type="radio" name="check" value ="'.$options->id[$i].'" checked /></td></tr>';
		     else
		        echo '<td><input type="radio" name="check" value ="'.$options->id[$i].'" /></td></tr>';
		 }
  		echo '</table>
  		
  		<input type="submit" value="Редактировать" /></p>
  		</form>';
  		
  		
  		
  		
  		
  		
  			echo '<h1>Добавить вариант</h1><form action="main.php?action=options_action&question='.$question.'" method="post">
 	
		
		
 	
        <textarea name="text" rows="10" style="width: 100%;"></textarea>
 

		
 		<p><input type="submit" value="Добавить" /></p>
		</form>';
	
  		
		echo '</div>';
		
		
    }
    
}

?>