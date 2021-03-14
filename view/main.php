<?php
namespace view;
class Main_page
{
    public function main()
    {
       
        $this->head();
        $this->name();
        $this->line();
        
    }
    private function head()
    {
        echo '<head>';
        echo '<link rel="stylesheet" href="css/main.css">';
        echo '<link rel="stylesheet" href="css/step.css">';
        echo '<link rel="stylesheet" href="css/menu.css">';
        echo '<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">';
        //echo '<link rel="stylesheet" href="vidget/slider/css/reset.min.css">';
       
        echo '<link rel="stylesheet prefetch" href="vidget/slider/css/swiper.min.css">';
            
     
        echo '<link rel="stylesheet" href="vidget/slider/css/style.css">';
        echo '<script type="text/javascript" src="vidget/redactor/nicEdit.js"></script>';
        echo '</head>';
    }
    private function name()
    {
        echo '<div class="main">';
        echo '<div class="header">';
		echo '  <div class="name">ExEnGroup</div>';
	
		echo '</div>';
		
    }
    private function step()
    {
        echo'<div class="gallery">
        <a target="_blank" href="http://exengroup.kz?action=reg_view">
        <img src="img/registration-3938434_1280.jpg" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">Шаг 1. Зарегистрируйтесь на сайте</div>
        </div>

        <div class="gallery">
        <a target="_blank" href="http://exengroup.kz/?action=request_cab">
        <img src="img/blogging-3094201_1280.jpg" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Шаг 2. Подайте заявку </div>
        </div>

        <div class="gallery">
        <a target="_blank" href="http://exengroup.kz/?action=test_list">
        <img src="img/correcting-1870721_1280.jpg" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Шаг 3. Пройдите тест </div>
        </div>
        <div class="gallery">
        <a target="_blank" href="">
        <img src="img/certificate-5817033_1280.jpg" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Шаг 4. Получите удостоверение</div>
        </div>';
    }
    private function line()
    {
        
        echo '<nav>
  <a href="http://exengroup.kz">Главная</a>';
  if(!isset($_SESSION["iin"]))
		    echo '<a href="http://exengroup.kz?action=enter_view">Кабинет</a>';
		else if($_SESSION["iin"]=="admin")    
		    echo '<a href="http://exengroup.kz?action=admin">Администратор</a>';
        else
            echo '<a href="http://exengroup.kz?action=cabinet">Кабинет</a>';
            
     echo '<a href="http://exengroup.kz?action=enter_view"> Вход </a>';
		echo '<a href="http://exengroup.kz?action=reg_view"> Регистрация </a>';
		
  echo '<div class="animation start-home">
</nav>';
/*
		echo '<div class="menu">';
        echo '<ul>
  <li><a href="http://exengroup.kz">Главная</a></li>';
  
  if(!isset($_SESSION["iin"]))
		    echo '<li><a href="http://exengroup.kz?action=enter_view">Кабинет</a></li>';
		else if($_SESSION["iin"]=="admin")    
		    echo '<li><a href="http://exengroup.kz?action=admin">Администратор</a></li>';
        else
            echo '<li><a href="http://exengroup.kz?action=cabinet">Кабинет</a></li>';
		echo '<li><a href="http://exengroup.kz?action=enter_view"> Вход </a></li>';
		echo '<li><a href="http://exengroup.kz?action=reg_view"> Регистрация </a></li>';
		
		echo '<ul></div>';
*/	

		
    }
    public function content()
    {
        readfile("vidget/slider/index.html");
        $this->step();
    }
    
  
}

?>