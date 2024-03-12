<?php

// Define a mapping of characters to Morse code
$morseCodeMapping = array(
    'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 'F' => '..-.', 'G' => '--.', 'H' => '....',
    'I' => '..', 'J' => '.---', 'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---', 'P' => '.--.',
    'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-', 'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-',
    'Y' => '-.--', 'Z' => '--..',
    '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--', '4' => '....-', '5' => '.....', '6' => '-....',
    '7' => '--...', '8' => '---..', '9' => '----.',
    ' ' => '/'
);
$message = "Hello, World!";
$encodedMessage = '';
$message = strtoupper($message);
for ($i = 0; $i < strlen($message); $i++) {
    $char = $message[$i];
    
    if (isset($morseCodeMapping[$char])) {
        $encodedMessage .= $morseCodeMapping[$char] . ' ';
    }
}
echo "Original Message: $message\n";
echo "Morse Code: $encodedMessage\n";
?>
