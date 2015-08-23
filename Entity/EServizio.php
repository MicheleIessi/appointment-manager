<?php

class EServizio {
    
    // Attributi
    private $nomeServizio=null;
    private $descrizione=null;
    private $settore=null;
    private $durata=0;
    
    /* L'attributo $durata è da intendere come unità da 30 minuti 
     * (vedi agenda) */
    
    // Costruttore
    public function __construct($nom,$des, $set, $dur)   {
        $this->setNomeServizio($nom);
        $this->setDescrizione($des);
        $this->setSettore($set);
        $this->setDurata($dur);
    }
    
    // Metodi
    public function setNomeServizio($nom)    {
        $this->nomeServizio=$nom;
    }
    
    public function setDescrizione($des)    {
        $this->descrizione=$des;
    }
    
    public function setSettore($set)    {
        $this->settore=$set;
    }
    
    public function setDurata($dur)    {
        $this->durata=$dur;
    }
    
    public function getNomeServizio()   {
        return $this->nomeServizio;
    }
    
    public function getDescrizione()    {
        return $this->descrizione;
    }
    
    public function getSettore()    {
        return $this->settore;
    }
    
    public function getDurata()   {
        return $this->durata;
    }

}