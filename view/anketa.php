<?php
namespace view;
class Anketa_page
{
    public function main($district, $org, $client, $personal)
    {
      
           
        echo '<div class="registred">
        
        <form action="main.php?action=anketa_action" method="post">
       
        <h1>Редактировать данные</h1>
        <br>
        <p>Фамилия
        <input value="'.$client->surname.'" type="text" name = "surname" >
		</p>
		<p>Имя</p>
        <input value="'.$client->name.'" type="text" name = "name" >
        
        <p>Отчество</p>
        <input value="'.$client->fathername.'" type="text" name = "fathername" >
        
        <p>ИИН</p>
        <input value="'.$client->iin.'" type="text" name = "iin">';
	    echo '<p>Регион</p>';
  		$this->region($district, $client);
  		echo '<p>Организация</p>';
  		$this->organization($org, $client);
  		 echo '<p>Должность</p>
        <input value="'.$client->position.'" type="text" name = "position">';
        echo '<p>Группа</p>';
        $this->group($client);
        echo '<p>Дата сдачи ПТБ</p>
        <input  type="date" name="ptb_date" value="'.$client->ptb_date.'">';
        echo '<p>Дата сдачи ПТМ</p>
        <input  type="date" name="ptm_date" value="'.$client->ptm_date.'">';
        echo '<p>Персонал</p>';
        $this->personal($personal, $client);
        echo '<input type="submit" value="Изменить">';
       
  		
  		
		echo '</form></div>';
		
		
    }
    
     private function region($district, $client)
    {
        
        echo '<select  placeholder="Выберите регион" name="city">
			<option value="">Выберите регион</option>';
			for($i=0;$i<count($district);$i++)
			{
			    
			    echo '<optgroup label="'.$district[$i]->name.'">';
			    for($j=0;$j<count($district[$i]->city);$j++)
    			{
    			    if($district[$i]->city[$j]->id==$client->city)
    			    {
    			        echo '<option selected value="'.$district[$i]->city[$j]->id.'" >'.$district[$i]->city[$j]->name.'</option>';   
    			    }
    			        
    			    else
    			        echo '<option value="'.$district[$i]->city[$j]->id.'" >'.$district[$i]->city[$j]->name.'</option>';
    			}
    			echo '</optgroup >';
			}
  		
		echo '</select>';
    }
    private function organization($org, $client)
    {
        echo '<select  placeholder="Выберите организацию" name="organization">
			<option value="">Выберите организацию</option>';
			for($i=0;$i<count($org->name);$i++)
			{
			    if($org->id[$i]==$client->organization)
			        echo '<option selected value="'.$org->id[$i].'" >'.$org->name[$i].'</option>';
			    else
			        echo '<option value="'.$org->id[$i].'" >'.$org->name[$i].'</option>';
			    
			}
  		
		echo '</select>';
    }
    
     private function personal($personal, $client)
    {
        echo '<select  placeholder="Выберите организацию" name="personal">
			<option value="">Выберите тип персонал</option>';
			for($i=0;$i<count($personal->rus);$i++)
			{
			        if($client->personal==$personal->id[$i])
			            echo '<option selected value="'.$personal->id[$i].'" >'.$personal->rus[$i].'</option>';
			        else
			            echo '<option value="'.$personal->id[$i].'" >'.$personal->rus[$i].'</option>';
			}
  		
		echo '</select>';
    }
    
    private function group($client)
    {
        $gr[2]="II";
        $gr[3]="III";
        $gr[4]="IV";
        $gr[5]="V";
        
        echo '<select  placeholder="Группа" name="group">';
		//	echo '<option value="">Группа допуска</option>';
			for($i=2;$i<=5;$i++)
			{
			    if($client->ptb_group == $i)
			        echo '<option selected value="'.$i.'" >'.$gr[$i].'</option>';
			    else
			        echo '<option  value="'.$i.'" >'.$gr[$i].'</option>';
			}
  		
		echo '</select>';
    }
    
}

?>