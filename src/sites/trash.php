<?php


    include_once './vendor/autoload.php';

    \Tracy\Debugger::enable(\Tracy\Debugger::DEVELOPMENT);
    \Tracy\Debugger::detectDebugMode(true);



//    $vzorec = ($sirka==0)?squareContent($delka):squareContent($delka,$sirka);


//
//    $cislo = 10;
//    $deska = 10;
//    while($cislo <= 100){
//        $cislo+=10;
//        echo "číslo je : ". $cislo . " a to je pořád míň než 100";
//    };
//
//    echo PHP_EOL;
//    echo PHP_EOL;
//
//    $c = 10;
//    do {
//        echo ($c . " ");
//        $c += 2;
//        echo PHP_EOL;
//        echo "číslo je :" . $c . " a to je masaker";
//    }
//    while($c<16);





//$chickenGazela = new chicken();
//echo $chickenGazela->showName();
//echo PHP_EOL;

    $chickenAnezka = new chicken();
    $chickenAnezka->setName("Anežka");
    //    echo $chickenAnezka->showName();
    //    echo PHP_EOL;
    //    echo $chickenAnezka->showAge();
    //    echo PHP_EOL;



    // Perform string replacement
    // @TODO ty vole kenny a jak pujdou nahrazovat texty pokud budou v template a budu je chtit nahradit?
    //    $nitwit = 'Kdo není blbec, jako by nebyl blbec.
    //               Špatný blbec, taky blbec & >';
    //
    //    $str = str_replace("blbec", "snový",$nitwit, $count);

    // Display number of replacements performed
    //    echo PHP_EOL;
    //    echo "Bylo nastaveno $count krát";
    //    echo  PHP_EOL;


    //   if ($today == "sobota"){
    //        $greetings = "Pěkný víkend";
    //    } elseif ($today == "neděle"){
    //       $greetings ="Pěkný víkend";
    //    }else {
    //       $greetings =  "Zasraný pracovní den";
    //    }
    //    $today = date("D");
    //    switch($today){
    //        case "Mon":
    //            echo "Today is Monday. Clean your house.";
    //            break;
    //        case "Tue":
    //            echo "Today is Tuesday. Buy some food.";
    //            break;
    //        case "Wed":
    //            echo "Today is Wednesday. Visit a doctor.";
    //            break;
    //        case "Thu":
    //            echo "Today is Thursday. Repair your car.";
    //            break;
    //        case "Fri":
    //            echo "Today is Friday. Party tonight.";
    //            break;
    //        case "Sat":
    //            echo "Today is Saturday. Its movie time.";
    //            break;
    //        case "Sun":
    //            echo "Today is Sunday. Do some rest.";
    //            break;
    //        default:
    //            echo "No information available for that day.";
    //            break;
    //    }


// Class definition
    class chicken{
        //properties
        private $age = "21";
        private $name = "pipina";

        //methods

        public function showAge(){
            return 'Slepičí věk:' . $this->age;
        }
        public function showName(){
            return 'Slepičí jméno:' .  $this->name;
        }
        public function setAge(string $age)
        {
            $this->age = $age;
        }

        public function setName(string  $name)
        {
            $this->name = $name;
        }
    }

    $chickenFile = array(
        array(
            "name" => "Pipina",
            "age" => "21"
        ),
        array(
            "name" => "Kennynka",
            "age" => "23"
        ),
        array(
            "name" => "Pivka",
            "age" => "34"
        ),
    );

    foreach ($chickenFile as $chickenArray => $key) {
        echo "Jméno: " . $key ['name'];
        echo PHP_EOL;
        echo "<br>";
        echo "Věk: " . $key ['age'];
        echo "<br>";
    }

    echo "<br>";
    echo decbin(158);


    $barvy = array("azurová", "modrá", "cerná", "zelená");
//    print_r($barvy);
    echo PHP_EOL;
    rsort($barvy);
//    print_r($barvy);
//    do {
//        echo ($barvy[0] . "");
//    }
//    while ($barvy != "zelená");

    foreach ($barvy as $barva){
        echo $barva;
        echo "<br>";

    }
    echo "<br>";

    for($i=1; $i<=3; $i++){
        echo "The number is " . $i . "<br>";
    }



    function squareContent($sideA, $sideB=5){
        $rectangleResult = $sideA * $sideB;
        echo "jedna strana". $sideA . "druha strana " . $sideB . "je:" . $rectangleResult;
    }

    function contentsString(float $sideA, float $sideB = null) {
        $sideB = $sideB !== null ? $sideB : $sideA;
        $result = $sideA * $sideB;

        echo "jedna strana". $sideA . "druha strana " . $sideB . "je:" . $result;
    }
    $delka = rand(1,12);

    $sirka = rand(0,2);

    contentsString($delka,$sirka);