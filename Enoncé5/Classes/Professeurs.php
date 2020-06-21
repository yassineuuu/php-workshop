<?php

class Professeurs{
        public $Nom;
        public $Classe;
        public $titre= 'Prof';

        public function __construct($Nom, $Classe){
                $this->Nom=$Nom;
                $this->Classe=$Classe;
        }

        public function info () {
                
            echo $this->titre.' '.$this->Nom."<br><br>";
            echo "$this->Nom has ".sizeof($this->Classe)." Students:<br><br>";

                foreach($this->Classe as $stud){
                        echo "<li>$stud->Nom</li> <br>";
                }
            echo"<hr>";
        }
        
}

?>