<?php
/**
 * Created by PhpStorm.
 * User: Jeremie
 * Date: 14/12/2016
 * Time: 19:33
 */

namespace App\Controller;


use App\Helper\App;
use App\Model\Score;

class JSController extends Controller
{

    public function __construct()
    {
        if(!App::getAuth()->isConnect()) {
            header('Location: /signin');
            die();
        }
    }

    public function game2048(){
        $best = Score::getBestScore('2048');
        if ($best == null) {
            $best = '0';
        }
        $this->render("js/2048", compact("best"));
    }

    public function game2048Post(){
        if($this->isAjax()){
            $score = new Score([
                'user_id' => App::getAuth()->idAuth(),
                'game' => '2048',
                'score' => $_POST['score']
            ]);
            if($score->isValid()) {
                if (!$score->save()) {
                    http_response_code(500);
                    echo 'Error';
                }else{
                    echo 'success';
                }
            } else {
                http_response_code(500);
                foreach ($score->getErrors() as $s) {
                    echo $s;
                }
            }
        }else{
            $this->error(403);
        }
    }

    public function gameSnake(){
        $this->render('js/snake');
    }

    public function gameSnakePost(){
        if($this->isAjax()){
            $score = new Score([
                'user_id' => App::getAuth()->idAuth(),
                'game' => 'snake',
                'score' => $_POST['score']
            ]);
            if($score->isValid()) {
                if (!$score->save()) {
                    http_response_code(500);
                    echo 'Error';
                }else{
                    echo 'success';
                }
            } else {
                http_response_code(500);
                foreach ($score->getErrors() as $s) {
                    echo $s;
                }
            }
        }else{
            $this->error(403);
        }
    }
}