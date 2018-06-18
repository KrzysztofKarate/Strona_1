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
            <form action="kalkulator.php", method="POST">
                <div class="form-group">
                    <label for="firstNumber">Pierwsza liczba</label>
                    <input class="form-control" id="firstNumber" name="firstNumber" placeholder="wpisz liczbę">
                </div>

                <div class="form-group">
                    <label for="secondNumber">Druga liczba</label>
                    <input class="form-control" id="secondNumber" name="secondNumber" placeholder="wpisz liczbę">
                </div>

                <div class="form-group">
                    <label for="operation">wybierz operację</label>
                    <select class="form-control" id="operation" name="operation">
                        <option>Dodaj</option>
                        <option>Odejmij</option>
                        <option>Pomnóż</option>
                        <option>Podziel</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="form-control" id="wykonaj">
                </div>
            </form>

            <?php
            use utils\Validator;

            $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

            $correctNumbers = true;

            if($method == "POST"){
                $firstNumber = (int)filter_input(INPUT_POST, 'firstNumber',FILTER_SANITIZE_SPECIAL_CHARS );
                if(!filter_var($firstNumber,FILTER_VALIDATE_INT )) {
                    Validator::userError("Zły format pierwszej liczby! \n");
                    $correctNumbers = false;
                }

                $secondNumber = (int)filter_input(INPUT_POST, 'secondNumber',FILTER_SANITIZE_SPECIAL_CHARS );
                if(!filter_var($secondNumber,FILTER_VALIDATE_INT )) {
                    Validator::userError("Zły format drugiej liczby! \n");
                    $correctNumbers = false;
                }

                $operation = filter_input(INPUT_POST, 'operation',FILTER_SANITIZE_SPECIAL_CHARS );

                if($correctNumbers) {
                    $result = null;
                    switch($operation) {
                        case "Dodaj":
                            $result =  $firstNumber + $secondNumber;
                            break;
                        case "Odejmij":
                            $result = $firstNumber - $secondNumber;
                            break;
                        case "Pomnóż":
                            $result = $firstNumber * $secondNumber;
                            break;
                        case "Podziel":
                            if($secondNumber == 0){
                                Validator::userError("Nie można dzielić przez 0! \n");
                            }else{
                                $result = $firstNumber / $secondNumber;
                            }
                            break;
                        default:
                            Validator::userError("Nie ma takiej operacji! \n");
                    }

                    if($result !== null) {
                        echo "Wynik = " . $result;
                    }
                }
            }
            ?>

        </div>
    </div>
    <?php include("parts/footer.php") ?>
</div>
</body>
</html>