<?php
    echo "Hello World!\n";
    class Movie 
    {
        private $title = "";
        private $releaseDate = "12/03/1999";
        private $plot= "Lorem ipsum ...";
        private $filmMaker = "L'auteur";
        private $duration = 120;
        
        public function __construct($title = "")
        {
            $this->title = $title;
        }
        
        public function getTitle()
        {
            return $this->title;
        }
        public function setTitle($titre = "")
        {
            $this->title = $titre;
        }
        
    }
    
    $movie = new Movie("LE FILM");
    echo $movie->getTitle();
    $movie->setTitle("taxi 22");
    echo $movie->getTitle();
    