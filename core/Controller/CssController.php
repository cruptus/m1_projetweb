<?php
/**
 * Created by PhpStorm.
 * User: Jeremie
 * Date: 14/12/2016
 * Time: 18:36
 */

namespace App\Controller;


class CssController extends Controller
{

    public function rotate(){
        $this->render("css/rotate");
    }

    public function translate(){
        $this->render("css/translate");
    }
}