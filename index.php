<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php?>
        
            <form action="site.php" method="post">
                Password: <input type="password" name="name"> <br>
                <input type="submit">
            </form>
            <br></br>
                
                <?php 
                    echo $_POST["password"]
                ?>
    </body>
</HTML>