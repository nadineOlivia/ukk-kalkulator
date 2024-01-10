<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="calculator">
        <input type="text" id="operand1" placeholder="Masukkan Angka">
        <br>
        <input type="text" id="operand2" placeholder="Masukkan Angka">
        <br>
        <div id="operator">
            <label><input type="radio" name="operator" value="+">+</label>
            <label><input type="radio" name="operator" value="-">-</label>
            <label><input type="radio" name="operator" value="*">x</label>
            <label><input type="radio" name="operator" value="/">/</label>
        </div>
        <br>
        <input type="button" value="Hasil" onclick="calculate()">
        <input type="button" value="Hapus" onclick="clearInputs()">
        <br>
        <input type="text" id="result" placeholder="....." disabled>
    </div>

    <script src="script.js"></script>
</body>
</html>