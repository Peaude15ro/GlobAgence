<?php

class FeatureController{
    public static function switchAction($userAction){

//        if(!$_SESSION['user']['isAdmin']){
//            header('Location:?route=dashboard');
//        }

        switch ($userAction){
            // case à ajouter pour chaque nouvelle action souhaitée
            case 'addExample':
                self::addExampleAction();
                break;
            default:
                self::defaultAction();
                break;
        }
    }


    private static function defaultAction()
    {
        $tabTitle="Fonctionnalité";
        $examples=ExampleDAO::all();
        include('../page/feature/index.php');
    }

    private static function addExampleAction()
    {
        ExampleDAO::save($_POST['name']);
        header('Location:.?route=feature');
    }
}





