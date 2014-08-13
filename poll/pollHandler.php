<? 
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

$id   = $xml->createElement("id");
$idText = $xml->createTextNode('1');
$id->appendChild($idText);

$title   = $xml->createElement("title");
$titleText = $xml->createTextNode('"PHP Undercover"');
$title->appendChild($titleText);


$book = $xml->createElement("book");
$book->appendChild($id);
$book->appendChild($title);

$root->appendChild($book);

$xml->formatOutput = true;
echo "<xmp>". $xml->saveXML() ."</xmp>";

$xml->save("mybooks.xml") or die("Error");

?>