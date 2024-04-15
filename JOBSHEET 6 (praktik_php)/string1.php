<?php

    $loremIpsum = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
    enatibus et magnis dis parturient montes, nascetur ridiculus mus.
    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang Karakter : ". strlen($loremIpsum). "<br>";
    echo "Panjang Kata : ". str_word_count($loremIpsum). "<br>";
    echo "<p>".strtoupper($loremIpsum). "</p>";
    echo "<p>". strtolower($loremIpsum). "</p>";

?>