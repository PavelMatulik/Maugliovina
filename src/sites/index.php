<?php

    use App\model\Photo;
    use Nette\Utils\Json;

//    $content = file_get_contents('https://jsonplaceholder.typicode.com/photos');
//    $decoded = Json::decode($content, Json::FORCE_ARRAY);
//
////    /** @var Photo[] $data */
////    $data = [];
//    foreach ($decoded as $item){
//        $data[] = $photo = new Photo($item['id'], $item['url']);
//        $photo->setTitle($item['title']);
//        $photo->setThumbnailUrl($item['thumbnailUrl']);
//    }

    $latte = new Latte\Engine;
    $latte->setTempDirectory('./temp');



    function todayCzech($day) {
        static $dayName = array('neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota');
        return $dayName[$day];
    }
    $today = todayCzech(date("w")) . "\n";
    $numberDay = date("j");

    function monthCzech($month) {
        static $monthName = array(1 => 'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec');
        return $monthName[$month];
    }
    $thisMonth = monthCzech(date("n")) . "\n";


    $ages = array("PDCZ"=>"prodeti.cz", "Clark"=>32, "John"=>28);
    echo $ages[2];

    $name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
    $greetings = ($today == "sobota" || $today =="neděle")? 'Fajnový víkendový den':'Zasraný pracovní den';


//    $errorFileMsg = "ERROR: File does not exist.";

    $file = "data.csv";
    $note = $_POST["Note"];

    function writeCsv ($note,$file){
        $handle = fopen($file, "a");
        if ($note) {
            fputcsv($handle,explode(',',$note));
        }
        fclose($handle);
    }


    function readCsv($file)
    {
        $pole = [];
//        $row = 1;
        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
                $num = count($data);
//                echo "Poznámka $row:";
////                $row++;
                for ($c = 0; $c < $num; $c++) {
                   $pole[] = $data[$c];
                }
            }
            fclose($handle);
        }
        return $pole;
    }
////    $handle = fopen($file, "r");
//    $roman = fgetcsv($handle, 0, ",");
    writeCsv($note,$file);
    $mazec = readCsv($file);
//    var_dump($mazec);

    $parameters = [
        'greetings' => $greetings,
        'numberDay' => $numberDay,
        'today' => $today,
        'thisMonth' => $thisMonth,
//        'items' => array_slice($data, 0, 10),
//        'str' => $str,
        'data' => $mazec,
    ];

//    Check the existence of file
//    if(file_exists($myFile)){
//        $handle = fopen($myFile, "r");
//    } else{
//        $parameters["errorFileMsg"] = $errorFileMsg;
//    }
//




    $latte->render('index.latte', $parameters);