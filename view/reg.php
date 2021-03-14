<?php
namespace view;
class Reg_page
{
    public function main($name,$city,$id,$org,$org_id)
    {
        
        echo '<div class="registred"><h1>Регистрация</h1>
		
		<form action="main.php?action=reg_action" method="post">
 	
		<input placeholder="Фамилия" type="text" name="surname" />
		
 		<input placeholder="Имя" type="text" name="name" />
		<input placeholder="Отчество" type="text" name="fathername" />
		<input placeholder="ИИН" type="text" name="iin" />
		
		<input placeholder="Пароль" type="password" name="first_password" />
		<input placeholder="Повторите пароль:" type="password" name="second_password" />';
		
		echo '<select placeholder="Выберите регион" name="city">
			<option disabled>Выберите регион</option>';
			for($i=0;$i<count($name);$i++)
			{
			    echo '<option value="" disabled>'.$name[$i].'</option>';
			    for($j=0;$j<count($city[$i]);$j++)
    			{
    			    echo '<option value="'.$id[$i][$j].'" >'.$city[$i][$j].'</option>';
    			}
			}
  		
		echo '</select>';
		
		echo '<select placeholder="Выберите организацию" name="organization">
			<option disabled>Выберите организацию</option>';
			for($i=0;$i<count($org);$i++)
			{
			    echo '<option value="'.$org_id[$i].'" >'.$org[$i].'</option>';
			  
			}
  		
		echo '</select>';
		
		
		
 		echo '<p><input type="submit" /></p>
		</form>
		</div>';
    }
}

?>