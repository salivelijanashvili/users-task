<?php


namespace App\PageControllers;

use App\DatabaseControllers\InsertExample;
use App\ViewsControllers\View;
use PDO;

class HomeController {

    public function index(): View {
        $name = [];
        $last_name = [];
        return View::make('users/UserForm',
            [
                'name' => $name,
                'last_name' => $last_name,
            ]
        );
    }

    public function update() {
        return 'Imported Data';
    }


//    public function store(): View {
//
//        $value0 = 0;
//        $value1 = 1;
//
//        $showsForm = View::make('shows/SearchBar', [
//                'value0' => $value0,
//                'value1' => $value1,
//            ]
//        );
//        return $showsForm;
//
//    }
}