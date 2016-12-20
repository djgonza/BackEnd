<?php

class Input
{

    public static function get($dato)
    {
        if (isset($_POST[$dato]))
        {
            return $_POST[$dato];
        } else
        {
            return "";
        }
//        if(isset($_GET[$dato]))
//        {
//            return $_GET[$datos];
//        }
//        else
//        {
//            return "";
//        }
    }

    static function siEnviado($tipo = 'post')
    {
        switch ($tipo)
        {
            case 'post':
                if (!empty($_POST))
                {
                    return true;
                } else
                {
                    return false;
                }
                break;

            default:
                return false;
                break;
        }
    }

}
?>

