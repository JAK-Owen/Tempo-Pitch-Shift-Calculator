<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get inputs from the form
    $pitch_shift = $_POST["pitch_shift"];
    $tempo = $_POST["tempo"];

    // Calculate the new tempo
    $pitch_factor = pow(2, $pitch_shift / 12);
    $new_tempo = $tempo * $pitch_factor;

    // Limit the number of digits to 6
    $new_tempo = number_format($new_tempo, 6);

    // Display the result
    echo "<h2>Result</h2>";
    echo "<p>Original Tempo: $tempo BPM</p>";
    echo "<p>Pitch Shift: +$pitch_shift (Semitones + Centitones)</p>";
    echo "<p>New Tempo: $new_tempo BPM</p>";
} else {
    // Redirect to the form if accessed directly
    header("Location: index.php");
    exit();
}
?>
