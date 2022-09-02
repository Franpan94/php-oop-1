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
        class movie
        {
            public $title;
            public $genre;
            public $plot;


            function __construct($_title, $_genre, $_plot)
            {
                $this->title = $_title;
                $this->genre = $_genre;
                $this->plot = $_plot;
            }

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

        $movieone = new movie('ciao', 'avventura', 'molto interessante');
        echo 'Film: ' . $movieone->getTitle() . '<br>';
        echo 'Genere: ' . $movieone->getgenre() . '<br>';
        echo 'Trama: ' . $movieone->getplot() . '<br>';
        
      ?>
    </h3>
</body>

</html>