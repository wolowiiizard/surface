<?php

class ApiController extends Controller
{

    public function run( $sAction )
    {
        global $oApp;

        switch ($sAction) {
            case 'ville':
                $this->view = new ApiVilleView();
                $this->view->setData('ville', ['Ville bidon', 'autre ville bidon']);
                $this->view->render();
                $this->exitDone();
                break;

            default:
                throw new \Exception(__CLASS__.": Error action '$sAction' not found", 1);
                break;
        }
    }

}
