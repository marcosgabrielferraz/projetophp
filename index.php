<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php?>
        
            <form action="site.php" method="get">
                Name:<input type="text" name="username">
                <br>
                Age:<input type="number" name="age"
                <input type="submit">
            </form>
            <br>
            Your name is<?php echo $_GET["username"] ?>
            <br>
            Your age is<?php echo $_GET["age"] ?>
    </body>
</HTML>