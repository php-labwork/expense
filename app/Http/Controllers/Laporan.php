<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laporan extends Controller {

    private $menu;
    public function __construct() {
        $this->menu = new Menu();
    }
    
    public function index() { return view('laporan.index', ["mainMenu" => $this->menu->mainMenu]); }
    
}
