<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
    Voluptatem reprehenderit nobis veritatis commodi fugiat molestias<br>
    impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum<br>
    quisquam? Quos impedit cum nulla optio.";

echo "<p>$loremIpsum</p>";
echo "<p>Panjang karakter: " . strlen($loremIpsum) . "</p>";
echo "<p>Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>