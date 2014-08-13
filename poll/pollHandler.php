<? 
    $name=$_GET[ "name" ];
    $selection=$_GET[ "selection"]; 
   // echo $selection;


/**
    $xml = new SimpleXMLElement('<xml/>');

    $participant = $xml->addChild('participant');
    $participant->addChild('name', "aviad");
    $participant->addChild('wod', $selection );
    Header('Content-type: text/xml');
    print($xml->asXML());
**/

$xml = new DOMDocument("1.0");

$root = $xml->createElement("data");
$xml->appendChild($root);

$name   = $xml->createElement("name");
$nameText = $xml->createTextNode("$name");
$name->appendChild($nameText);

$wod   = $xml->createElement("wod");
$wodText = $xml->createTextNode("$selection");
$wod->appendChild($wodText);


$participant = $xml->createElement("participant");
$participant->appendChild($name);
$participant->appendChild($wod);

$root->appendChild($participant);

$xml->formatOutput = true;
echo "<xmp>". $xml->saveXML() ."</xmp>";

$xml->save("myWod.xml") or die("Error");

?>