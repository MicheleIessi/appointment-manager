<?php

class FUtente extends Fdb   {
    
    public function __construct() {
        $this->table = 'utenti';
        $this->_key = 'numID';
        $this->return_class = 'EUtente';
        $this->db = USingleton::getInstance('Fdb');
    }
}
    
 
