<?php
namespace view;
class Cabinet_page
{
    public function main($client)
    {
        
       $this->menu($client);
    }
    private function menu($client)
    {
        
        echo '<div class="admin_menu">';
        echo $client->surname.' '.$client->name;
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz?action=request_cab">Заявки</a></div>';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz?action=test_list">Тесты</a></div>';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz?action=anketa">Анкета</a></div>';
        echo '<div class="admin_menu_punkt"><a href="http://exengroup.kz?action=result_cab">Результаты</a></div>';
        echo '</div>';
    }
}
?>