<?php

$json = `{Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}`;


//decode json -> string

$decode = json_decode($json, true);

echo("Title: " . $decode['Title'])




?>