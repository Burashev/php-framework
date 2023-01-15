<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;

final class AppController extends Controller
{
    public function index() {
        return $this->render("index");
    }

    public function testViewFunction() {
        return $this->render('test', ["user" => "Some user name"]);
    }

    public function form() {
        return $this->render('form');
    }

    public function handleForm(Request $request) {
        $data = $request->input();
        dd($data);
        return "handling form";
    }
}
