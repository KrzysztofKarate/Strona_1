<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof
 * Date: 2018-06-17
 * Time: 18:19
 */
include('load.php');

use model\User;
use utils\UriManager;

include('configureDB.php');
include('configureURL.php');
$users = User::getAll();

?>
<html>
<?php include("parts/header.php") ?>
<body>
<div class="container-fluid">
    <?php include("parts/banner.php") ?>
    <div class="row" >
        <?php include("parts/menu.php") ?>
        <div class="col-md-10">

            <a class="button-link" href="<?php echo UriManager::getUrl('createUser.php')?>"><button type="button" class="btn btn-success">Create +</button></a>

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Surname</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($users as $user){
                    echo "<tr>
                    <td>$user[id]</td>
                    <td>$user[name]</td>
                    <td>$user[surname]</td>
                </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include("parts/footer.php") ?>
</div>
</body>
</html>