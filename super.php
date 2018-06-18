<html>
    <?php include("parts/header.php") ?>
    <body>
        <?php
            $repeats = rand(1,5);
            for($i=0;$i<$repeats; $i++){
                $function = rand(0,1);
                $a = rand(1,3);
                $b = rand(1,3);
                $word = "9lettWord";
                if($function==0){
                    $result = $a+$b;
                    echo $result;
                }elseif($function==1){
                    $result = $a*$b;
                    echo $result;
                }
                echo "Have a nice day!";
            }
        ?>
        <?php include("parts/footer.php") ?>
    </body>
</html>

	