<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Bukti Pendaftaran</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #0066cc;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .header .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .header .nama-sekolah {
            font-size: 28px;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .data {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s;
        }

        .data:hover {
            background-color: #f1f1f1;
        }

        .data label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #444;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <span class="nama-sekolah">SMA Swasta Katolik Marina</span>
    </div>
    <div class="container">
        @foreach(['nomor_pendaftaran', 'pin', 'jurusan', 'nama', 'nisn', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat', 'nomor_hp', 'nama_ayah', 'umur_ayah', 'pendidikan_ayah', 'pekerjaan_ayah', 'nama_ibu', 'umur_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 'nomor_hp_ortu', 'alamat_orang_tua', 'asal_sekolah', 'nilai_skhu', 'rata_rata_skhu', 'nomor_ijazah', 'nilai_ijazah', 'rata_rata_ijazah'] as $field)
        <div class="data">
            <label for="">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>{{ $data->$field }}
        </div>
        @endforeach
        <div class="footer">
            <p>
                Catatan: <br>
                Bukti pendaftaran ini diterima dan di sahkan oleh pihak sekolah. <br>
                Mohon untuk simpan dan jaga dengan baik, karena bukti pendaftaran ini akan digunakan sebagai referensi
                jika terjadi perbedaan data. <br>
                Terima Kasih.
            </p>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>

