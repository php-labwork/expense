<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu {

    public $mainMenu;
    public function __construct() {
        $this->mainMenu = [
            (object) [
                "text" =>  "Dashboard",
                "icon" => "fa fa-dashboard",
                "path" => "/"
            ],
            (object) [
                "text" =>  "Catatan Keuangan",
                "icon" => "fa fa-edit",
                "path" => "/catatan"
            ],
            (object) [
                "text" =>  "Laporan",
                "icon" => "fa fa-book",
                "path" => "/laporan"
            ],
            (object) [
                "text" =>  "Pengaturan",
                "icon" => "fa fa-cog",
                "path" => "/pengaturan"
            ],
        ];
    }

}
