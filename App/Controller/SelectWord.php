<?php

    declare (strict_types = 1);
    namespace App\Controller;

    
    
    class SelectWord{

        public LoadWords $loadWord;
        private string $word;
        
        public function __construct()
        {
            // Instancie la class -> LoadWords
            $this->loadWord = new LoadWords();

            // Permet de charger les mots dans $words
            $this->loadWord->loadWords();
        }

        public function getWord(){
            // ICI Tout les mots
            
            // PIF 
            $this->word = $this->loadWord->words[mt_rand(0,count($this->loadWord->words)-1)]['word'];
            return $this->word;
        }
    }


?>

