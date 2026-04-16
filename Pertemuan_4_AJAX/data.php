<?php
header('Content-Type: application/json');

$data = [
    [
        'id' => 1,
        'nama' => 'Budi Santoso',
        'pekerjaan' => 'Web Developer',
        'lokasi' => 'Jakarta'
    ],
    [
        'id' => 2,
        'nama' => 'Siti Aminah',
        'pekerjaan' => 'UI/UX Designer',
        'lokasi' => 'Bandung'
    ],
    [
        'id' => 3,
        'nama' => 'Agus Pratama',
        'pekerjaan' => 'Data Analyst',
        'lokasi' => 'Surabaya'
    ],
    [
        'id' => 4,
        'nama' => 'Dewi Lestari',
        'pekerjaan' => 'Product Manager',
        'lokasi' => 'Yogyakarta'
    ],
    [
        'id' => 5,
        'nama' => 'Reza Rahadian',
        'pekerjaan' => 'DevOps Engineer',
        'lokasi' => 'Bali'
    ]
];

echo json_encode($data);
?>
