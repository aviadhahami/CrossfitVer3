<?

$selection = $_GET["selection"];
$clientName = $_GET["name"];


date_default_timezone_set("Israel");
$dateNumber = date("dmy");

if (file_exists("pollData/" . $dateNumber . "-Wod.xml")) {
    echo("FILE IS THERE");
    $file = "pollData/" . $dateNumber . "-Wod.xml";
    $xml = simplexml_load_file($file);

    //$data = $xml->data;

    $newParticipant = $xml->addChild('participant');
    $newParticipant->addChild('name', $clientName);
    $newParticipant->addChild('wod', $selection);

    $xml->asXML($file);
} else {
    echo("FILE NOT THERE");
    $xml = new DOMDocument("1.0");

    $root = $xml->createElement("data");
    $xml->appendChild($root);

    $name = $xml->createElement("name");
    $nameText = $xml->createTextNode("$clientName");
    $name->appendChild($nameText);

    $wod = $xml->createElement("wod");
    $wodText = $xml->createTextNode("$selection");
    $wod->appendChild($wodText);


    $participant = $xml->createElement("participant");
    $participant->appendChild($name);
    $participant->appendChild($wod);

    $root->appendChild($participant);

    $xml->formatOutput = true;
    echo "<xmp>" . $xml->saveXML() . "</xmp>";

    $xml->save("pollData/" . $dateNumber . "-Wod.xml") or die("Error");

}
/** The following part generates a full XML file including headers*/


?>