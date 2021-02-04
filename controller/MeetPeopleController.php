<?php
declare(strict_types = 1);

class MeetPeople
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
         function get()
    {
        $sql="SELECT * FROM pokemon";
        return $databaseManager->database->query($sql);
    }
    get();
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        
        //load the view
        require 'view/meetpeople.php';
    
}

}