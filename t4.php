<?php
$filename = "names.xml";

if (file_exists($filename)) {
    $xml = simplexml_load_file($filename);

    echo "<ul>";

    foreach ($xml->name as $name) {
        echo "<li>" . htmlspecialchars($name) . "</li>";
    }

    echo "</ul>";
} else {
    echo "No records found.";
}
?>
