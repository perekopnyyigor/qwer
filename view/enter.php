<?php
namespace view;
class Enter_page
{
    public function main()
    {
        echo '<div class="registred"><h1>Вход</h1>
		
		<form action="main.php?action=enter_action" method="post">
 	
		
		<input placeholder="ИИН" type="text" name="iin" />
		
		<input placeholder="Пароль" type="password" name="password" />
		
		
 		<p><input type="submit" value="Войти" /></p>
		</form>
		</div>';
    }
}

?>