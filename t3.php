<form method="post">
    Name: <input type="text" name="name" required>
    <button type="submit" name="save">Save</button>
</form>

<?php
if (isset($_POST['save'])) {

    $filename = "names.xml";

    if (file_exists($filename)) {
        $xml = simplexml_load_file($filename);
    } else {
        $xml = new SimpleXMLElement("<students></students>");
    }

    $xml->addChild("name", htmlspecialchars($_POST['name']));
    $xml->asXML($filename);
}
?>
