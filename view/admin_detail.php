<?php
namespace view;
class Admin_detail
{
    public function main($data)
    {
       	    
        echo '<div class="registred"><h1>Детализация</h1>';
        
        	    
  		for ($i=0;$i<count($data);$i++)
  		{
  		    echo '<table class="table_blur">';
		    echo '<tr><th>'.$data[$i]->question->text.'</th></tr>';
		    for ($j=0;$j<count($data[$i]->question->options);$j++)
		    {
		        if($data[$i]->answer == $data[$i]->question->options_id[$j])
		            {
		                 if($data[$i]->answer == $data[$i]->true_answer)
		                    echo '<tr><td class="green">'.$data[$i]->question->options[$j].'ok</td></tr>';
		                 if($data[$i]->answer != $data[$i]->true_answer)
		                    echo '<tr><td class="red">'.$data[$i]->question->options[$j].'false</td></tr>';
		            }
		            
		        else    
		            echo '<tr><td>'.$data[$i]->question->options[$j].'</td></tr>';
		        
		    }
	
  		    echo '</table>';
  		}    
		
		
		
		
		
  		
  		
		echo '</div>';
	
    }
}

?>