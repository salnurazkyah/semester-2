<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqx61gVWgIGEFKRz0rKNHqP86Zzn32wx0R0ykG4D4D+ND9vMtETcfdG1h" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1>Form Nilai Ujian</h1>

    <form action="proses.php" method="post">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
        </div>
        <div class="form-group">
            <label for="matkul">Mata Kuliah</label>
            <select class="form-control" id="matkul" name="matkul">
                <option value="">Pilih Mata Kuliah</option>
                <option value="Data Warehouse">Data Warehouse</option>
                <option value="Pemrograman Web">Pemrograman Web</option>
                <option value="Jaringan Komputer">Jaringan Komputer</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" class="form-control" id="nilai" name="nilai" placeholder="Masukkan Nilai">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2eC9dFWOFnufv5PQgeHULrX745AOup5b1r0X5rKpo0o8F6MHgl3Y6s1RCzT" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuY+cgrqffxjV/N4Gi0eiyRb5uz9j40m7B41s5V/o77Z0qV8kY" crossorigin="anonymous"></script>

</body>
</html>