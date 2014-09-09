<?

$selection = $_GET["selection"];
$clientName = $_GET["name"];
$rawSelect = $_GET["rawSelect"];
if ($selection == "" || $clientName == "" || $rawSelect ==""){
    //If incoming GET is empty with all 3 attributes then shut it down
    echo("You shouldn't address this page directly. GTFO.");
    exit();
}
date_default_timezone_set("Israel");
$dateNumber = date("dmy");

if (file_exists("pollData/" . $dateNumber . "-Wod.xml")) {
    echo("XML exists, adding new records...");
    //Load the XML
    $file = "pollData/" . $dateNumber . "-Wod.xml";
    $xml = simplexml_load_file($file);
    //Let's check if already signed, if so --> DELETE IT !
    $XMLParticipants = $xml->xpath('/data/participant');
    foreach ($XMLParticipants as $XMLParticipant) {
        if ($XMLParticipant->name == $clientName) {
            echo "Found him $clientName !<br />";
            $node = dom_import_simplexml($XMLParticipant);
            $node->parentNode->removeChild($node);
        }
    }
    $newParticipant = $xml->addChild('participant');
    $newParticipant->addChild('name', $clientName);
    $newParticipant->addChild('wod', $selection);
    $newParticipant->addChild('rawData', $rawSelect);

    $xml->asXML($file);
} else {
    /** The following part generates a full XML file including headers*/
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



?>