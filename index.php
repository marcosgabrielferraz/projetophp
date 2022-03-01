<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
           class Book{
            var $title;
            var $author;
            var $pages;


            function _construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
            }
           }

           $book1 = new Book("Harry", "JK Rowling", 400);
           $book1 -> title = "Hunger Games";
           $book2 = new Book("Lord of the Rings", "Tolkien", 700);

        echo $book1-> title;
        ?>
    

    </body> 
</HTML>