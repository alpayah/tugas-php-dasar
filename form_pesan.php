<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <!-- Link Bootstrap 5 agar tampilan form menjadi rapi dan ada di tengah -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-white d-flex align-items-center min-vh-100">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0 rounded-4 p-4 p-md-5" style="background-color: lavender">
                <h3 class="fw-bold mb-4">Form Pesan Mahasiswa</h3>
                
                <form action="hasil_pesan.php" method="POST">
                    

                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="kelas" class="form-label fw-bold">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="pesan" class="form-label fw-bold">Pesan / Kesan</label>
                        <textarea class="form-control" name="pesan" id="pesan" rows="4" required></textarea>
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" name="tombol_kirim" class="btn btn-info px-4 fw-semibold" style="background-color: #cb94f7; border-color: #cb94f7;">Kirim</button>
                        <a href="index.php" class="btn btn-secondary px-4 fw-semibold">Kembali</a>
                    </div> 
                </form>
            </div>   
        </div>
    </div>
</div>

</body>
</html>