<?php
/**
 * Created by PhpStorm.
 * User: Jeremie
 * Date: 15/12/2016
 * Time: 14:01
 */

namespace App\Model;


use App\Helper\App;

class Score extends Model
{

    protected $className = 'scores';

    protected $fields = ['score', 'game', 'user_id'];

    protected $valid_item = [
        'score' => [
            'validation' => [
                'numeric' => 'Score invalid'
            ],
            'required' => true
        ],
        'game' => [
            'validation' => [
                'alphaNumeric' => 'Name game invalid'
            ],
            'required' => true
        ],
        'user_id' => [
            'validation' => [
                'numeric' => 'ID user invalid'
            ],
            'required' => true
        ]
    ];

    public function save()
    {
        $query = App::getDataBase()->prepare('SELECT * FROM scores WHERE user_id = :id AND game = :game ORDER BY score DESC LIMIT 1', [
            ':id' => App::getAuth()->idAuth(),
            ':game' => $this->game

        ]);
        $donne = $query->fetch();
        if($donne != null){
            if($this->score > $donne->score) {
                App::getDataBase()->prepare('UPDATE scores SET score = :score WHERE user_id = :id AND game = :game',
                    [
                        ':score' => $this->score,
                        ':id' => $this->user_id,
                        ':game' => $this->game
                    ]);
            }
            return true;
        }else{
            return parent::save(); // TODO: Change the autogenerated stub
        }
    }

    public static function getBestScore($game){
        $query = App::getDataBase()->prepare('SELECT score FROM scores WHERE game = :game ORDER BY score DESC LIMIT 1', [':game' => $game]);
        $donne = $query->fetch();
        if($donne != null)
            return $donne->score;
        return 0;
    }

    public static function getTop5($game){
        $query = App::getDataBase()->prepare(
            'SELECT s.score as score, u.pseudo as pseudo
             FROM scores s, users u 
             WHERE s.game = :game
             AND s.user_id = u.id
             ORDER BY score DESC LIMIT 5', [':game' => $game]);
        $result = array();
        while ($donne = $query->fetch())
            $result[$donne->pseudo] = $donne->score;
        return $result;
    }
}