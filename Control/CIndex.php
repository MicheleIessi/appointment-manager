<?php
/**
 * Created by PhpStorm.
 * User: Michele Iessi
 * Date: 24/05/2016
 * Time: 16:51
 */

/**
 * 1. controllare se l'utente ha già effettuato il login (sessioni).
 * 2. se ha già effettuato il login, mandare la home con la possibilità di scegliere le opzioni utente (prenotazione, profilo...)
 * 3. altrimenti far vedere una pagina di presentazione con i pulsanti login/registrazione e senza le opzioni utente
 */


class CIndex {

    public function impostaPagina() {
        $log = 1;
        $sessione = new USession();
        $log=$sessione->getValore('tipoUtente');
        if($log===false)
            $log=1;
        $VIndex = new VIndex();
        $content = $this->smista($log);
        $VIndex->setContent($content);
        $VIndex->mostraPagina();
    }

    public function smista($log) {
        $view = new VIndex();
        $sessione = new USession();
        switch($view->getController()) {
            case 'registrazione':
                $CReg = new CRegistrazione();
                return $CReg->smista();
            case 'login':
                $CLog = USingleton::getInstance('CLogin');
                return $CLog->smista();
            case 'calendario':
                if($log > 0 && isset($_REQUEST['idp'])) { //gestire l'errore se non c'è idp?
                    $cal = new CCalendar();
                    $idp=$_REQUEST['idp'];
                    setcookie('lastCalendar',$idp);
                    $sessione->impostaValore('tipo','cliente'); //solo per provare
                    return $cal->smista();
                }
                else return $view->fetch('forbidden.tpl');
            default:
                return $view->fetch('home_default_content.tpl');
        }
    }
}