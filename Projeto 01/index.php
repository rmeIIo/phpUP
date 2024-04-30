<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>

    <?php
    

    function getInputAsString($values) {
        /**
        * Função que converte um array de valores em uma string concatenada.
        *
        * @param array $values O array de valores a serem convertidos em string.
        * @return string A string resultante da concatenação dos valores do array.
        */

        $o = "";
        foreach ($values as $value) {
            $o .= $value;
        }

        return $o;
    }

    

    function calculateInput($userInput) { 
        /**
        * Função para calcular a entrada do usuário.
        *
        * Esta função recebe a entrada do usuário como parâmetro e realiza o cálculo necessário.
        *
        * @param mixed $userInput A entrada do usuário.
        * @return mixed O resultado do cálculo.
        */

        $arr = [];
        $char = "";
        foreach ($userInput as $num) {
            if(is_numeric($num) || $num == ".") {
                $char .= $num;
            } else if (!is_numeric($num)) {
                if(!empty($char)) {
                    $arr[] = $char;
                    $char = "";
                }

                $arr[] = $num;
            }
        }

        if(!empty($char)) {
            $arr[] = $char;
        }

        $current = 0;
        $action = null;

        for($i = 0; $i <= count($arr) - 1; $i++) {
            if(is_numeric($arr[$i])) {
                if($action) {
                    if($action == "+"){
                        $current = $current + $arr[$i];
                    }
                    if($action == "-"){
                        $current = $current - $arr[$i];
                    }
                    if($action == "x"){
                        $current = $current * $arr[$i];
                    }
                    if($action == "/"){
                        $divisor = floatval($arr[$i]);
                        if ($divisor != 0) {
                            $current = $current / $divisor;
                        } else {
                            echo "Erro: Divisão por zero não é permitido";
                            $current = 0;
                            $arr = [];
                            break;
                        }
                    }
                    if($action == "√"){
                        $current = sqrt($current);
                    }
                    if($action == "^") {
                        $current = pow($current, $arr[$i]);
                    }
                    if($action == "!") {
                        $sum = 0;
                        for ($j = 0; $j < $i; $j++) {
                            if(is_numeric($arr[$j])) {
                                $sum += $arr[$j];
                            }
                        }
                        $factorial = 1;
                        for ($j = 1; $j <= $sum; $j++) {
                            $factorial *= $j;
                        }
                        $current = $factorial;
                    }
                    $action = null;
                } else {
                    if($current == 0) {
                        $current = $arr[$i];
                    }
                } 
            } else {
                $action = $arr[$i];
            }
        }

        return $current;
    }

    $rep="";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $valid = true;

        if (empty($_POST['input'])) {
            $valid = false;
            echo "Erro: O campo não pode estar em branco.";
        }

        if ($valid) {
        
        if(isset($_POST['input'])){
            $input = json_decode($_POST['input']);
        }


        if(isset($_POST)){

            foreach ($_POST as $key=>$value){

                if($key == 'raiz'){
                    $currentValue = sqrt(floatval(getInputAsString($input)));
                    $input = [];
                    $input[] = $currentValue;
                } else if($key == 'expoente'){
                    $currentValue = pow(floatval(getInputAsString($input)),2);
                    $input = [];
                    $input[] = $currentValue;
                } else if($key == 'igual'){
                    $currentValue = calculateInput($input);
                    $currentValueFormatted = number_format($currentValue, 2);
                    $input = [];
                    $input[] = $currentValueFormatted;
                } else if($key == "C"){
                    $input = [];
                    $currentValue = 0;
                } else if($key == "back"){
                    $lastPointer = count($input) -1;
                    if(is_numeric($input[$lastPointer])){
                        array_pop($input);
                    }
                } else if($key != 'input'){
                    $input[] = $value;
                }
            }
        }
    }
}

    ?>
    </head>
    <body>
        <main>
            <div id="calculadora">
                <form method="post" id="form">
                    <div id="display">
                        <input id="lastCalc" value="<?php echo getInputAsString($input);?>">
                        <input name="input" type="hidden" value='<?php echo json_encode($input);?>'>
                    </div>

                    <table id="teclado">
                        <tr>
                            <td>
                                <button class="secondary" type="submit" name="C" value="C">C</button>
                            </td>

                            <td>
                                <button type="submit" name="expoente" value="^">
                                    <img src="./assets/superscript-solid 1.svg" alt="exponenciação">
                                </button>
                            </td>

                            <td>
                                <button type="submit" name="raiz" value="√">
                                    <img src="./assets/Vector.svg" alt="raiz quadrada">
                                </button>
                            </td>

                            <td>
                                <button class="tertiary" type="submit" name="divisao" value="/">
                                    <img src="./assets/divide.svg" alt="divisao">
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button type="submit" name="7" value="7">7</button>
                            </td>

                            <td>
                                <button type="submit" name="8" value="8">8</button>
                            </td>

                            <td>
                            <button type="submit" name="9" value="9">9</button>
                            </td>

                            <td>
                                <button class="tertiary" type="submit" name="multipĺicacao" value="x">
                                    <img src="./assets/x.svg" alt="multiplicacao">
                                </button>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <button type="submit" name="4" value="4">4</button>
                            </td>

                            <td>
                                <button type="submit" name="5" value="5">5</button>
                            </td>

                            <td>
                            <button type="submit" name="6" value="6">6</button>
                            </td>

                            <td>
                                <button class="tertiary" type="submit" name="subtração" value="-">
                                    <img src="./assets/minus.svg" alt="menos">
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button type="submit" name="1" value="1">1</button>
                            </td>

                            <td>
                                <button type="submit" name="2" value="2">2</button>
                            </td>

                            <td>
                            <button type="submit" name="3" value="3">3</button>
                            </td>

                            <td>
                                <button class="tertiary" type="submit" name="adicao" value="+">
                                    <img src="./assets/plus.svg" alt="mais">
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button type="submit" name="fatorial" value="!">
                                    <img src="./assets/exclamation-solid 1.svg" alt="fatorial">
                                </button>
                            </td>

                            <td>
                                <button type="submit" name="0" value="0">0</button>
                            </td>

                            <td>
                            <button type="submit" name="." value=".">.</button>
                            </td>

                            <td>
                                <button class="tertiary" type="submit" name="igual" value="=">
                                    <img src="./assets/result.svg" alt="igual">
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </main>

        <footer>
            <p>Feito com ♥ por Roger Correa</p>
        </footer>
        
    </body>
    </html>