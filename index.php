<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
            class Movie {
                public $title;
                private $rating;

                function _construct($title, $rating){
                    $this->title = $title;
                    $this->setRating($rating);
                }

                function getRating(){
                    return $this->rating;
                }

                function setReting($rating){
                    if($ratng == "G" ||$ratng == "PG" ||$ratng == "PG-13" ||$ratng == "R" ||$ratng == "NR" ||){
                          $this->rating = $rating;
                    }else{
                        $this->rating = "NR"
                    }
                }
            }

            $avengers = new Movie ("Avengers", "PG-13");
                    // G, PG, PG-13, R, NR
                    $avengers->setRating("asdf")
            echo $avengers->getRating();
        ?>
    

    </body> 
</HTML>