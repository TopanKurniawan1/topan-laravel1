<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2 form</title>
</head>
<body>
    <h1>Isi data diri kamu</h1>
    <form action="{{ url('/page4') }}" method="get">
        @csrf

        <label for="first_name"><strong>Nama Depan:</strong></label><br>
        <input type="text" name="first_name" id="first_name" placeholder="Nama Depan" required><br>

        <label for="last_name"><strong>Nama Belakang:</strong></label><br>
        <input type="text" name="last_name" id="last_name" placeholder="Nama Belakang" required><br>

        <label for="marga"><strong>Marga:</strong></label><br>
        <input type="text" name="marga" id="marga" placeholder="Opsional"><br><br>

        <label for="gender"><strong>Gender:</strong></label><br>
        <input type="radio" name="gender" id="laki-laki" value="laki-laki">
        <label for="laki-laki">Laki-laki</label><br>
        <input type="radio" name="gender" id="perempuan" value="perempuan">
        <label for="perempuan">Perempuan</label><br>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label><br><br>

        <label for="ras"><strong>Ras:</strong></label><br>
        <select name="ras" id="ras">
            <option value="" disabled selected>--Pilih Ras--</option>
            <option value="manusia">Manusia</option>
        </select><br><br>

        <label for="planet"><strong>Planet:</strong></label><br>
        <select name="planet" id="planet">
            <option value="" disabled selected>--Pilih Planet--</option>
            <option value="bumi">Bumi</option>
        </select><br><br>

        <label for="nationality"><strong>Negara:</strong></label><br>
        <select id="nationality" name="nationality" required>
            <option value="" disabled selected>--Pilih Negara--</option>
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="thailand">Thailand</option>
        </select><br><br>

        <label for="language"><strong>Bahasa:</strong></label><br>
        <select name="language" id="language">
            <option value="" disabled selected>--Pilih Bahasa--</option>
            <option value="indonesia">Bahasa Indonesia</option>
            <option value="english">English</option>
        </select><br><br>

        <label for="hobby"><strong>Hobi:</strong></label><br>
        <input type="checkbox" name="hobby[]" id="football" value="football">
        <label for="football">Football</label><br>
        <input type="checkbox" name="hobby[]" id="basket" value="basketball">
        <label for="basket">Basketball</label><br>
        <input type="checkbox" name="hobby[]" id="other_hobby" value="other">
        <label for="other_hobby">Other</label><br><br>

        <label for="tanggal"><strong>Tanggal Lahir:</strong></label><br>
        <input type="date" name="tanggal" id="tanggal" required><br><br>

        <label for="biografi"><strong>Biografi:</strong></label><br>
        <textarea name="biografi" id="biografi" rows="5" cols="50" placeholder="Tuliskan biografi anda di sini..." required></textarea><br><br>

        <label for="email"><strong>Email Aktif:</strong></label><br>
        <input type="email" name="email" id="email" placeholder="Masukkan email anda" required><br><br>

        <label for="no"><strong>Nomor Telepon:</strong></label><br>
        <input type="tel" name="no" id="no" placeholder="Opsional"><br><br>

        <input type="reset" value="Reset">
        <input type="submit" value="Kirim">
    </form>

<!-- quick example -->
</body>
</html>
