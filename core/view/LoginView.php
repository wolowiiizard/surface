<?php

class LoginView extends View
{

    public function __construct()
    {
        $this->setPageTitle("Connexion - Calculez la surface de votre logement");
        $this->setPageKeywords( "Calcul surface logement" );
        $this->setPageDescription( "Connexion à votre espace personnel" );
        $this->setHtmlHeadContent( $this->readTemplate("htmlhead_core.html") );

    }

    public function render()
    {

        // Preparation du rendu
        // Preparation du message alerte
        $sAlertType = $this->getData( 'login_alert_type' );
        $sAlertMessage = $this->getData( 'login_alert_message' );
        if (! empty($sAlertType)) {
            $sAlertContent = sprintf( $this->readTemplate('login_alert.html'), $sAlertType, $sAlertMessage );
        } else {
            $sAlertContent = '';
        }
        // Preparation contenu de la page
        $this->setPageContent( sprintf( $this->readTemplate("login.html"), $sAlertContent ) );

        // Effectuer le rendu final
        parent::render();
    }

}
