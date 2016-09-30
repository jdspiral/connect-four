<?php namespace Game\Handlers;

include '../Classes/Person.php';

if(isset( $_POST['submit'] )) {
    $person = new Person();
    $result = $person->addMove();
    echo $result;
}



