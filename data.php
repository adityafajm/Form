    <style>
        .red { 
            color: red; 
        } 
        .yellow { 
            color: yellow; 
        }
        .green { 
            color: green; 
        } 
        .result-container {
            display: flex;
            align-items: center;
        }
        .result-label {
            margin-right: 10px;
            font-weight: bold;
        }
    </style>
    
    <h2 style="color:darkgray;">Data yang Diterima</h2>
    <?php
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $AsalKota = $_POST['AsalKota'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $nilai = $_POST['nilai'] ?? '';

    echo "Nama: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
    echo "Asal Kota: " . htmlspecialchars($AsalKota) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";

    echo '<div class="result-container">';
    echo '<span class="result-label">Nilai:</span>';

    if ($nilai >= 65) {
        echo '<p class="green">Lulus</p>';
    } else if ($nilai >= 50 && $nilai < 65) {
        echo '<p class="yellow">Harus Mengulang</p>';
    } else {
        echo '<p class="red">Tidak Lulus</p>';
    }

    echo '</div>';
    ?>

