<?php

class DashboardController{

    public static function switchAction($userAction){
        switch ($userAction){
            // case à ajouter pour chaque nouvelle action souhaitée
            default:
                self::defaultAction();
                break;
        }
    }


    private static function defaultAction()
    {
        $tabTitle="Tableau de bord";
        include('../page/dashboard/index.php');
    }
}



