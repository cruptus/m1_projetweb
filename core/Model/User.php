<?php
/**
 * Created by PhpStorm.
 * User: Jeremie
 * Date: 11/12/2016
 * Time: 16:08
 */

namespace App\Model;


use App\Helper\App;

class User extends Model
{
    protected $className = 'users';

    protected $valid_item = [
        'email' => [
            'validation' => [
                'email' => 'Email invalide'
            ],
            'required' => true
        ],
        'password' => [
            'validation' => [
                'password' => 'Mot de passe invalide.'
            ],
            'required' => true
        ],
        'pseudo' => [
            'validation' => [
                'alphaNumeric' => 'Pseudo invalide'
            ],
            'required' => true
        ]
    ];

    protected $fields = ['email', 'password', 'salt'];

    public function isValid()
    {
        $bool = parent::isValid();
        if($this->password != $this->password_valid){
            $this->errors[] = 'Les mots de passes sont différents';
            $bool = false;
        }
        return $bool;
    }

    public function save()
    {
        $this->salt = md5(uniqid(rand(), true));
        $this->password = $this->hash();
        return parent::save();
    }

    public function hash(){
        return hash('sha256', $this->salt.$this->password);
    }

    public function login(){
        $query = App::getDataBase()->prepare('SELECT id, pseudo, password, salt FROM users WHERE email = :email LIMIT 1', [':email' => $this->email]);
        $donne = $query->fetch();
        if($donne != false){
            $this->salt = $donne->salt;
            if($this->hash() == $donne->password) {
                App::getAuth()->connect($donne->id, $donne->pseudo);
                return true;
            }
        }
        return false;
    }
}