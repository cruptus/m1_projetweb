<?php
/**
 * Created by PhpStorm.
 * User: Jeremie
 * Date: 11/12/2016
 * Time: 18:00
 */

namespace App\Controller;


class HtmlController extends Controller
{

    public function drag(){
        $this->render('html/drag');
    }

    public function google(){
        $this->render('html/google');
    }
}