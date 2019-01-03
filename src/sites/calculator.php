<?php

    use Nette\Utils\Json;

    include_once './vendor/autoload.php';

    \Tracy\Debugger::enable(\Tracy\Debugger::DEVELOPMENT);
    \Tracy\Debugger::detectDebugMode(true);

    $content = file_get_contents('https://jsonplaceholder.typicode.com/photos');
    $decoded = Json::decode($content, Json::FORCE_ARRAY);



    $latte = new Latte\Engine;
    $latte->setTempDirectory('./temp');

//  Výpočet obsahu obdelníku
    $rectangleWidth = $_POST["rectangleWidth"];
    $rectangleLength = $_POST["rectangleLength"];
    $rectangleResult = $rectangleWidth * $rectangleLength;

//  Výpočet obsahu čtverce
    $squareWidth = $_POST["squareWidth"];
    $squareResult = (pow($squareWidth,2));

//  Výpočet obsahu kruhu
    $ringRadius = $_POST['ringRadius'];
    $ringResult = round((pi()*(pow($ringRadius,2))),3);

    $parameters = [
        'rectangleResult' => $rectangleResult,
        'rectangleWidth' => $rectangleWidth,
        'rectangleLength' => $rectangleLength,
        'squareResult' => $squareResult,
        'ringResult' => $ringResult,
        'items' => array_slice($decoded, 0, 10)
    ];



    $latte->render('calculator.latte', $parameters);