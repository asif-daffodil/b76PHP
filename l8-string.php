<?php
    $x = "Ami valo achi";
    echo strlen($x)."<br>";
    echo str_word_count($x)."<br>";
    echo strrev($x)."<br>";
    echo strpos($x, "valo")."<br>";
    echo str_replace("achi", "nai", $x)."<br>";
    echo substr($x, 0, 8)."..."."<br>";