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
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="files/Sprawozdanie1.txt" target="_blank">Sprawozdanie 1</a>
                        </li>
                        <li class="list-group-item">
                            <a href="files/Sprawozdanie2.txt" target="_blank">Sprawozdanie 2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="files/Sprawozdanie3.txt" target="_blank">Sprawozdanie 3</a>
                        </li>
                        <li class="list-group-item">
                            <a href="files/Sprawozdanie4.txt" target="_blank">Sprawozdanie 4</a>
                        </li>
                        <li class="list-group-item">
                            <a href="files/Sprawozdanie5.txt" target="_blank">Sprawozdanie 5</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php include("parts/footer.php") ?>
        </div>
    </body>
</html>