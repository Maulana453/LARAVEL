<!DOCTYPE html>
<html>
<head>
    <title>Form Pemeriksaan Kesehatan</title>
</head>
<body>
    <h2>Form Pemeriksaan Kesehatan</h2>
    <form method="POST" action="proses.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="tgl_pemeriksaan">Tanggal Pemeriksaan:</label>
        <input type="date" name="tgl_pemeriksaan" id="tgl_pemeriksaan" required><br><br>

        <label for="tgl_lahir">Tanggal Lahir/Usia:</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Pria" required> Pria<br>
        <input type="radio" name="jenis_kelamin" value="Wanita" required> Wanita<br><br>

        <table border="1">
            <tr>
                <th>Jenis Tes</th>
                <th>Hasil Pemeriksaan</th>
                <th>Normal</th>
            </tr>
            <tr>
                <td>Tekanan darah</td>
                <td><input type="text" name="tekanan_darah" required></td>
                <td>120/80 mmHg</td>
            </tr>
            <tr>
                <td>Asam urat</td>
                <td><input type="text" name="asam_urat" required></td>
                <td>Pria: < 7 mg/dl<br>Wanita: < 6 mg/dl</td>
            </tr>
            <tr>
                <td>Kolesterol total</td>
                <td><input type="text" name="kolesterol" required></td>
                <td>< 200 mg/dl</td>
            </tr>
            <tr>
                <td>Gula darah</td>
                <td><input type="text" name="gula_darah" required></td>
                <td>Puasa: 70-110 mg/dl<br>2 jam setelah makan: 100-150 mg/dl<br>Sewaktu/acak: 70-125 mg/dl</td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
