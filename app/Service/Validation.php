<?php
namespace App\Service;

class Validation
{
    protected $errors = array();

    public function IsValid($errors)
    {
        foreach ($errors as $key => $value) {
            if(!empty($value)) {
                return false;
            }
        }
        return true;
    }

    /**
     * emailValid
     * @param email $email
     * @return string $error
     */

    public function emailValid($email)
    {
        $error = '';
        if(empty($email) || (filter_var($email, FILTER_VALIDATE_EMAIL)) === false) {
            $error = 'Adresse email invalide.';
        }
        return $error;
    }

    /**
     * textValid
     * @param POST $text string
     * @param title $title string
     * @param min $min int
     * @param max $max int
     * @param empty $empty bool
     * @return string $error
     */

    public function textValid($text, $title, $min = 3,  $max = 50, $empty = true)
    {
        $error = '';
        if(!empty($text)) {
            $strtext = strlen($text);
            if($strtext > $max) {
                $error = 'Votre ' . $title . ' est trop long.';
            } elseif($strtext < $min) {
                $error = 'Votre ' . $title . ' est trop court.';
            }
        } else {
            if($empty) {
                $error = 'Veuillez renseigner ' . $title . '.';
            }
        }
        return $error;
    }

    /**
     * radioExist
     * @param POST $name string
     * @param $nomRadio string
     * @return string
     */

    public function radioExist($name, $nomRadio)
    {
        $error = '';
        if(empty($name))
        {
            $error= 'Veuillez séléctionner un ' . $nomRadio . '.';
        }
        return $error;
    }

    /**
     * intValide
     * @param $int
     * @param $min
     * @param $max
     * @return string
     */
    public function intValid($int, $min, $max)
    {
        $error = '';
        if(empty($int) || filter_var($int, FILTER_VALIDATE_INT) === false) {
            $error = 'Veuillez renseigner un entier valide';
        } elseif ($int < $min) {
            $error = 'Champ invalide (minimum ' . $min . ')';
        } elseif ($int > $max) {
            $error = 'Champ invalide (maximum ' . $max . ')';
        }
        return $error;
    }

    /**
     * isNumeric
     * @param $value
     * @return string
     */

    public function isNumeric($value)
    {
        $error = '';
        if(is_numeric($value) === false)
        {
            $error= 'Champ invalide';
        }
        return $error;
    }


}
