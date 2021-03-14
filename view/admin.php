<?php
namespace view;
class Admin_page
{
    public function main()
    {
        
       $this->menu();
    }
    private function menu()
    {
        
        echo '<div class="admin_menu">';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz/?action=citi_page">Добавить город</a></div>';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz/?action=organization_page">Добавить организацию</a></div>';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz/?action=client_page">Список клиентов</a></div>';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz/?action=tests_page">Список тестов</a></div>';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz/?action=request_admin">Заявки</a></div>';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz/?action=result">Результаты</a></div>';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz/?action=person">Ответственные лица</a></div>';
        echo '</div>';
    }
}
?>