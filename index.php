<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Film</h1>
    <h3>
      <?php

        // Creazione della classe film
        class movie
        {   
            // Proprietà
            public $title;
            public $genre;
            public $plot;

            // Costruttore
            function __construct($_title, $_genre, $_plot)
            {
                // Inizializzazione delle variabili titolo, genere e trama
                $this->title = $_title; 
                $this->genre = $_genre;
                $this->plot = $_plot;
            }

            // Metodi
            public function getTitle()
            {
                return $this->title;
            }

            public function getgenre()
            {
                return $this->genre;
            }

            public function getplot()
            {
                return $this->plot;
            }
        }

        // Istanza di un primo oggetto della classe movie
        $movieone = new movie('Ciao ciao', 'Avventura', 'Molto interessante');
        echo 'Film: ' . $movieone->getTitle() . '<br>';
        echo 'Genere: ' . $movieone->getgenre() . '<br>';
        echo 'Trama: ' . $movieone->getplot() . '<br>' . '<br>';
        
        // Istanza di un secondo oggetto della classe movie
        $movietwo = new movie('Il più forte del mondo', 'Azione', 'Emozionante');
        echo 'Film: ' . $movietwo->getTitle() . '<br>';
        echo 'Genere: ' . $movietwo->getgenre() . '<br>';
        echo 'Trama: ' . $movietwo->getplot() . '<br>' . '<br>';

        // Istanza di un terzo oggetto della classe movie
        $moviethree = new movie('Natale a Miami', 'Commedia', 'Divertente');
        echo 'Film: ' . $moviethree->getTitle() . '<br>';
        echo 'Genere: ' . $moviethree->getgenre() . '<br>';
        echo 'Trama: ' . $moviethree->getplot();

      ?>
    </h3>
</body>

</html>