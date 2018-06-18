<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof
 * Date: 2018-06-17
 * Time: 18:52
 */
include("configureURL.php");
use utils\UriManager;
?>

<div class="col-md-2">
    <ul class="list-group">
        <li class="list-group-item">
            <a href="<?php echo UriManager::getUrl("index.php")?>">Strona główna</a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo UriManager::getUrl("sprawozdania.php")?>">Sprawozdania</a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo UriManager::getUrl("kalkulator.php")?>">Kalkulator</a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo UriManager::getUrl("users.php")?>">Użytkownicy</a>
        </li>
    </ul>
</div>
