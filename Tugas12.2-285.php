<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 12.2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: palevioletred;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 400px;
            padding: 50px; 
            background: mistyrose;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .hasil {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background: lavenderblush;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Form Penilaian</h1>
    <form method="post" action="">
        <label for="nilai1">Masukkan Nilai 1:</label><br>
        <input type="number" id="nilai1" name="nilai[]" required><br><br>
        <label for="nilai2">Masukkan Nilai 2:</label><br>
        <input type="number" id="nilai2" name="nilai[]" required><br><br>
        <label for="nilai3">Masukkan Nilai 3:</label><br>
        <input type="number" id="nilai3" name="nilai[]" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    function cekNilai($nilai) {
        return $nilai >= 60 ? "Lulus" : "Tidak Lulus";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai_array = $_POST['nilai'];
        echo "<div class='hasil'>";
        foreach ($nilai_array as $nilai) {
            $status = cekNilai($nilai);
            echo "Nilai anda $nilai, anda $status<br>";
        }
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
