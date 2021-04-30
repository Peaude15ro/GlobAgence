<?php


class PropertyController
{
    public static function switchAction($userAction)
    {


        switch ($userAction) {
            // case à ajouter pour chaque nouvelle action souhaitée
            default:
                self::defaultAction();
                break;
        }
    }


    private static function defaultAction()
    {
        $tabTitle = 'Fonctionnalité';
//        $examples = ExampleDAO::all();
        include('../page/property/index.php');
    }
}