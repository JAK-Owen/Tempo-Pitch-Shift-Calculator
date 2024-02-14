<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo and Pitch Shift Calculator</title>
    <link rel="stylesheet" href="styleSheet.css">
</head>
<body>
    <div class="app-container">
    <h2>Tempo and Pitch Shift Calculator</h2>
    <form action="calculate.php" method="post">
        <label for="pitch_shift">Enter Pitch Shift (Semitones + Centitones):</label>
        <input type="number" name="pitch_shift" required step="any"><br>

        <label for="tempo">Enter Current Tempo:</label>
        <input type="number" name="tempo" required step="any"><br>

        <input type="submit" value="Calculate">
    </form>
    
</div>
</body>
</html>
