<?php
namespace view;
class Test_cab
{
    public function main($test)
    {
       
       
        $liter[0]='А';  
        $liter[1]='Б'; 
        $liter[2]='В'; 
        $liter[3]='Г'; 
        $liter[4]='Д'; 
        $liter[5]='Е';
  			    
        echo '<div class="registred"><h1>Тестирование</h1>';
        	    
  		echo '<div class="list">';	    
		echo '<form action="main.php?action=end_test" method="post">';
		
		$_SESSION["question"]=$test->question_id;
        echo '<input type = "text" name="test_id" value ="'.$test->id.'" hidden />';
		
		
		echo '<table class="table_blur" >';
        
        
		 for($i=0; $i<count($test->question);$i++)
		 {
		    echo '<tr><th>'.($i+1).'</th><th colspan="2">'.$test->question[$i].'</th>';
		    for($j=0; $j<count($test->options[$i]);$j++)
		    {
		        echo '<tr><td>'.$liter[$j].'</td><td>'.$test->options[$i][$j].'</td>';
		        echo '<td><input type="radio" name="'.$test->question_id[$i].'" value="'.$test->options_id[$i][$j].'"></td>';
		    }
		 }
  		echo '</table>';
  		
		echo '<p><input type="submit" value="Добавить" /></p>
		</form></div>';
		echo '</div>';
		
    }
}

?>