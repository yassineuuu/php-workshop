<?php

    //autoloader:
    require 'Classes/Autoloader.php';
    Autoloader::ToMain();


    //Partie Formateur:

    $Tijani= new Professeurs('Abdellatif Tijani',array(new Etudiants('Ilyass'),
                                                        new Etudiants('Omaima'),
                                                        new Etudiants('Mehdi')
    ));
    $Jaban= new Professeurs('Hanane Jaban',array(new Etudiants('Sara'),
                                                    new Etudiants('Hind'),
                                                    new Etudiants('Salim')
));
    $Chouni= new Professeurs('Youssef Chouni',array(new Etudiants('Yassine'),
                                                    new Etudiants('Abdelghafour'),
                                                    new Etudiants('Maria')
    ));
    $Ouadid= new Professeurs('Youssef Ouadid',array(new Etudiants('Yacine'),
                                                    new Etudiants('Marouane'),
                                                    new Etudiants('Achraf'),
                                                    new Etudiants('Mohamed'),
                                                    new Etudiants('Sara'),
                                                    new Etudiants('Khadija'),
                                                    new Etudiants('Samir'),
                                                    new Etudiants('Ilyas'),
                                                    new Etudiants('Sanaa'),
                                                    new Etudiants('Omaima')
    ));

  
    
    $Ouadid->titre="Dr.";
   


    //Partie output:
    echo $Ouadid->info()
    



    // }
    

?>

