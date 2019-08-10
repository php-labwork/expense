<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller {

    private $menu;
    public function __construct() {
        $this->menu = new Menu();
    }
    
    public function index() { return view('dashboard.index', ["mainMenu" => $this->menu->mainMenu]); }

}
