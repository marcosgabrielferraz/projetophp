<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <form action="site.php" mathod="post">
            <input type="text" name="student">
            <input type="submit">
        </form> 

        <?php
           $grades = array("Jim"=>"A+", "pam"=>"A-","Oscar"=>"C-")
           echo $grades[$_POST["student"]];
        ?>





    </body>
</HTML>