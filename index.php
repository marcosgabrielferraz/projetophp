<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
            class Chef {
                function makeChiken(){
                    echo "The chef makes chicken <br>";
                }
                function makeChiken(){
                    echo "The chef makes salad <br>";
                }
                function makeChiken(){
                    echo "The chef makes bbq ribs <br>";
                }
            }

            class ItalianChef extends chef {
                function makePasta(){
                    echo "The chef makes pasta"
                }
                function makeSpacialdish(){
                    echo "The chef makes chicken parm";
                }
            }

            $chef = new Chef();
            $chef->makeSpecialDish();

            $italianChef = new Chef();
            $italianChef->makeSpecialDish();

        ?>
    

    </body> 
</HTML>