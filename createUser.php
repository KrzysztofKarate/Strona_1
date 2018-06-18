<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof
 * Date: 2018-06-17
 * Time: 18:19
 */
include('load.php');

use utils\UriManager;
use model\User;

include('configureURL.php');
include('configureDB.php');
?>

<html>
<?php include("parts/header.php") ?>
<body>
<div class="container-fluid">
    <?php include("parts/banner.php") ?>
    <div class="row" >
        <?php include("parts/menu.php") ?>
        <div class="col-md-10">
            <?php
                $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
                if($method == "POST") {
                    $success = true;

                    // walidacja pól
                    // czy wszystko ok
                    // weź zmienne z requestu i na ich podstawie dodaj usera, jak tu:
                    $user = new User(array("name" => "Krzysiek", "surname" => "Lipinski"));
                    $user->save();

                    // ofc jak cos nie tak to nie zapisuj, ani nie redirectuj. Możesz przy polach formularza
                    // wypisać błędy
                    //
                    //
                    //
                    // możesz.

                    if($success) UriManager::redirect("users.php");
                }
            ?>


            <form action="<?php echo UriManager::getUrl("createUser.php") ?>" method="POST">
                <?php include("users/form/userFields.php") ?>
            </form>
        </div>
    </div>
    <?php include("parts/footer.php") ?>
</div>
</body>
</html>

