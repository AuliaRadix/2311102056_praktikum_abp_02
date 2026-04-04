<?php
// Data mahasiswa
$mahasiswa = [
    [
        "nama" => "Ela",
        "nim" => "12345",
        "tugas" => 80,
        "uts" => 75,
        "uas" => 85
    ],
    [
        "nama" => "Budi",
        "nim" => "12346",
        "tugas" => 70,
        "uts" => 65,
        "uas" => 60
    ],
    [
        "nama" => "Siti",
        "nim" => "12347",
        "tugas" => 90,
        "uts" => 88,
        "uas" => 92
    ]
];

// Fungsi menghitung nilai akhir
function hitungNilaiAkhir($tugas, $uts, $uas) {
    return ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);
}

// Fungsi menentukan grade
function tentukanGrade($nilai) {
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75) {
        return "B";
    } elseif ($nilai >= 65) {
        return "C";
    } elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}

// Variabel untuk rata-rata & nilai tertinggi
$totalNilai = 0;
$nilaiTertinggi = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Data Nilai Mahasiswa</h2>

<table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai Akhir</th>
        <th>Grade</th>
        <th>Status</th>
    </tr>

    <?php
    foreach ($mahasiswa as $mhs) {
        $nilaiAkhir = hitungNilaiAkhir($mhs['tugas'], $mhs['uts'], $mhs['uas']);
        $grade = tentukanGrade($nilaiAkhir);

        // Status kelulusan (>= 65 lulus)
        $status = ($nilaiAkhir >= 65) ? "Lulus" : "Tidak Lulus";

        // Hitung total & nilai tertinggi
        $totalNilai += $nilaiAkhir;
        if ($nilaiAkhir > $nilaiTertinggi) {
            $nilaiTertinggi = $nilaiAkhir;
        }

        echo "<tr>
                <td>{$mhs['nama']}</td>
                <td>{$mhs['nim']}</td>
                <td>" . number_format($nilaiAkhir, 2) . "</td>
                <td>$grade</td>
                <td>$status</td>
            </tr>";
    }

    // Rata-rata kelas
    $rataRata = $totalNilai / count($mahasiswa);
    ?>
</table>

<div style="text-align:center;">
    <p><strong>Rata-rata Kelas:</strong> <?= number_format($rataRata, 2); ?></p>
    <p><strong>Nilai Tertinggi:</strong> <?= number_format($nilaiTertinggi, 2); ?></p>
</div>

</body>
</html>