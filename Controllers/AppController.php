<?php
declare(strict_types=1);

namespace App\Controllers;

use Den\Controller;

final class AppController extends Controller
{
    public function index() {
        return $this->render("index");
    }
}
