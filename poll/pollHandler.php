<?

$selection = $_GET["selection"];
$clientName = $_GET["name"];
$rawSelect = $_GET["rawSelect"];

date_default_timezone_set("Israel");
$dateNumber = date("dmy");

if (file_exists("pollData/" . $dateNumber . "-Wod.xml")) {
    echo("XML exists, adding new records...");
    $file = "pollData/" . $dateNumber . "-Wod.xml";
    $xml = simplexml_load_file($file);

    //$data = $xml->data;

    $newParticipant = $xml->addChild('participant');
    $newParticipant->addChild('name', $clientName);
    $newParticipant->addChild('wod', $selection);
    $newParticipant->addChild('rawData', $rawSelect);

    $xml->asXML($file);
} else {
    echo("XML didn't exist. Generating XML and adding new records...");
    $xml = new DOMDocument("1.0");

    $root = $xml->createElement("data");
    $xml->appendChild($root);

    $name = $xml->createElement("name");
    $nameText = $xml->createTextNode("$clientName");
    $name->appendChild($nameText);

    $wod = $xml->createElement("wod");
    $wodText = $xml->createTextNode("$selection");
    $wod->appendChild($wodText);

    $raw = $xml->createElement("rawData");
    $rawText = $xml->createTextNode("$rawSelect");
    $raw->appendChild($rawText);

    $participant = $xml->createElement("participant");
    $participant->appendChild($name);
    $participant->appendChild($wod);
    $participant->appendChild($raw);

    $root->appendChild($participant);

    $xml->formatOutput = true;
    echo "<xmp>" . $xml->saveXML() . "</xmp>";

    $xml->save("pollData/" . $dateNumber . "-Wod.xml") or die("Error");

}
/** The following part generates a full XML file including headers*/


?>