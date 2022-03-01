<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php 
        class Book{
            var $name;
            var $major;
            var $gpa;

            function _construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }
            function hasHonors(){
                if($this->gpa >= 4.0){
                    return "true";
                }  
                return "falce";            
        }

        $student1 = new Student ("Jim", "Business", 2.8)
        $student2 = new Student ("Pam", "Art", 3.6)

        echo $student2->hashonors();
        ?>
    

    </body> 
</HTML>