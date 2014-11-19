<?php
/**
 * Created by PhpStorm.
 * User: Anais
 * Date: 18/11/2014
 * Time: 15:44
 */

namespace WEB2\StringGenerator;

class PasswordGenerator {
    const PASSWORD_EASY     = 0;
    const PASSWORD_MEDIUM   = 1;
    const PASSWORD_HARD     = 2;

    const PASSWORD_CHAR_EASY     = 'abcdefghijklmnopqrstuvwxyz';
    const PASSWORD_CHAR_MEDIUM   = 'ABCDEFGHIJKLMOPQRSTUVWXYZ0123456789';
    const PASSWORD_CHAR_HARD     = '$€%!@#&éè';



    public function __construct()
    {
    }

    public static function generate($lenght = 10, $strength = self::PASSWORD_EASY)
    {

        if(!in_array($strength, [
            self::PASSWORD_EASY,
            self::PASSWORD_MEDIUM,
            self::PASSWORD_HARD
        ])) {
            throw new \Exception('invalid machin');
        }

        switch($strength){
            case self::PASSWORD_EASY:
                $string = self::PASSWORD_CHAR_EASY;
                break;
            case self::PASSWORD_MEDIUM:
                $string = self::PASSWORD_CHAR_EASY.PASSWORD_CHAR_MEDIUM;
                break;
            case self::PASSWORD_HARD:
                $string = self::PASSWORD_CHAR_EASY.PASSWORD_CHAR_MEDIUM.PASSWORD_CHAR_HARD;
                break;
        }

        $password = '';

        for ($i=0; $i < $lenght; $i++){
            $password.=mb_substr($coucou, mt_rand(0, mb_strlen($coucou)-1), 1);
        }
        return $password;
    }
}