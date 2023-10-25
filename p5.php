<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d5fcfd;
        }

        .container {
            text-align: center;
            margin: 50px auto;
            width: 50%;
            background-color: #fff5ba;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px 0;
            text-align: left;
        }

        input[type='text'], input[type='number'] {
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        input[type='submit'] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin: 50px auto;
            background-color: #fff5ed;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #ff9cee;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #F8E1E7;
        }
    </style>
</head>
<body>

<?php
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];

    if ($nilai >= 80) {
        $grade = "A";
    } elseif ($nilai >= 70) {
        $grade = "B";
    } elseif ($nilai >= 60) {
        $grade = "C";
    } elseif ($nilai >= 50) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    if ($grade === "A" || $grade === "B" || $grade === "C") {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Tidak Lulus";
    }

    echo "<div class='container'>";
    echo "<h2>Hasil Nilai Ujian </h2>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Kelas:</strong> $kelas</p>";
    echo "<p><strong>Nilai:</strong> $nilai</p>";
    echo "<p><strong>Grade:</strong> $grade</p>";
    echo "<p><strong>Keterangan:</strong> $keterangan</p>";
    echo "</div>";
}
?>

<div class="container">
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas">
        <label for="nilai">Masukkan nilai:</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100">
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<table>
    <tr>
        <th>Nilai</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td>80 - 100</td>
        <td>A</td>
    </tr>
    <tr>
        <td>70 - 79</td>
        <td>B</td>
    </tr>
    <tr>
        <td>60 - 69</td>
        <td>C</td>
    </tr>
    <tr>
        <td>50 - 59</td>
        <td>D</td>
    </tr>
    <tr>
        <td>0 - 49</td>
        <td>E</td>
    </tr>
</table>

</body>
</html>
