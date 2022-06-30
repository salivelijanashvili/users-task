<?php


namespace App\PageControllers;

use App\ViewsControllers\View;

class UserFormController
{
    public  function userForm() {

        $name = '';
        $last_name = '';
        return View::make('users/UserForm',
            [
                'name' => $name,
                'last_name' => $last_name,
            ]
        );
    }
}