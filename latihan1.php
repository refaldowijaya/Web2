<?php
$A = 123; // variabel global [cite: 108]
function Test() {
    $A = "Test"; // variabel lokal [cite: 110]
    echo "Nilai A dalam fungsi = $A \n"; [cite: 111]
}
Test(); [cite: 113]
echo "Nilai A luar fungsi = $A \n"; [cite: 114]
?>