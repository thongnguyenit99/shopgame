<?php

require'Controller.php';

class ErrorController extends Controller{
    function ErrorMessage (){
        return parent::loadView('error');
    }
}
?>