<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <foom action= "site.php" method= "post">
            Apples<input type= "checkbox" name="fruits[]" value="apples"><br>
            orangess<input type= "checkbox" name="fruits[]" value="oranges"><br>
            Pears<input type= "checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
        </form>

            <?php
                $fruits = $_POST["fruits"];
                echo $fruts [0];
            ?>





    </body>
</HTML>