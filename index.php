<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof
 * Date: 2018-06-17
 * Time: 18:19
 */
include('load.php');
?>
<html>
    <?php include("parts/header.php") ?>
    <body>
        <div class="container-fluid">
            <?php include("parts/banner.php") ?>
            <div class="row" >
                <?php include("parts/menu.php") ?>
                <div class="col-md-10">

                    <form action="index.php", method="post">
                        <div class="form-group">
                            <label for="name">Imie</label>
                            <input class="form-control" id="imie" name="name" placeholder="Podaj imię">
                        </div>

                        <div class="form-group">
                            <label for="name">Imie</label>
                            <input class="form-control" id="imie" name="name" placeholder="Podaj imię">
                        </div>

                        <div class="form-group">
                            <label for="operation">które z tych zwierząt lubisz najbardziej? </label>
                            <select class="form-control" id="animal" name="animal">
                                <option>Wąż</option>
                                <option>Krowa</option>
                                <option>Kiwi</option>
                                <option>Panda</option>
                                <option>Pingwin</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-control" id="wykonaj">
                        </div>
                    </form>
                    <?php
                    $animal = filter_input(INPUT_POST, 'animal',FILTER_SANITIZE_SPECIAL_CHARS );
                    if($animal == 'Kiwi') {
                        $msg=" Dzien dobry piszę do Ciebie ... ";
                        $to = "krzysiek96pl@onet.eu";
                        $subject = "Moj pierwszy mail.";
                        $mailheaders = "From: moja strona <http://mts.wibro.agh.edu.pl/~s285798/index.php> \n";
                        $mailheaders .= "Odpowiedz: krzysiek96pl@onet.eu\n";
                        $mailheaders .= "Content-Type: text; charset=utf-8\n";

                        echo mail($to,$subject,$msg,$mailheaders);
                    }
                    ?>

                </div>
            </div>
            <?php include("parts/footer.php") ?>
        </div>
    </body>
</html>