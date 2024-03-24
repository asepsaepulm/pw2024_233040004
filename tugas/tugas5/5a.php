<?php

$mahasiswa = [
["nama" => "Asep saepul milah", 
"npm" => "233040004",
"Email" => "asepsaepulmgmail.com",
"Jurusan" => "Teknik Informatika"
],
["nama" => "Mihaw Maulana", 
"npm" => "233040001",
"Email" => "mihaw@gmail.com",
"Jurusan" => "Teknik Industri"
],
["nama" => "Aria Sihotang", 
"npm" => "233040002",
"Email" => "aria@gmail.com",
"Jurusan" => "Kedokteran"
],
["nama" => "Fauzi Balaeaja", 
"npm" => "233040003",
"Email" => "Fauzi@gmail.com",
"Jurusan" => "Teknik Lingkungan"
],
["nama" => "Madun Kun", 
"npm" => "233040005",
"Email" => "madun@gmail.com",
"Jurusan" => "Manajemen"
],
["nama" => "Ishowspeed", 
"npm" => "233040006",
"Email" => "speed@gmail.com",
"Jurusan" => "Kedokteran"
],
["nama" => "Bang Dodo", 
"npm" => "233040007",
"Email" => "penaldo@gmail.com",
"Jurusan" => "Pertambangan"
],
["nama" => "Mahmudin", 
"npm" => "233040008",
"Email" => "mahmudin@gmail.com",
"Jurusan" => "Manajemen"
],
["nama" => "Maimunah", 
"npm" => "233040009",
"Email" => "maimunah@gmail.com",
"Jurusan" => "Teknik Lingkungan"
],
["nama" => "Haha Hihi", 
"npm" => "233040010",
"Email" => "haha@gmail.com",
"Jurusan" => "Teknik Industri"
]
    

];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
            <li>Email : <?= $mhs["Email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</head>
<body>
    
</body>
</html>