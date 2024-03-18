<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Output Page</title>
    <link rel="stylesheet" href="miros.css">
</head>
<body>
  <div class="container">
      <img src="https://img02.mockplus.com/rp/image/2024-03-07/537e3a50-dbe1-11ee-9ed8-7f6f33dbdfc3.png" alt="Logo" class="logo">
      <div class="user-info">
        <button class="language-button bm" style="font-weight:bold; font-size:20px;" onclick="window.location.href='WorkOutputPageM.html'" >bm</button>
         <button class="language-button en" style="font-weight:bold; font-size:20px;" onclick="window.location.href='WorkOutputPage.html'">en</button>
          <button style="background-color: blue; font-weight:bold; font-size:20px;">log keluar</button>
          <img src="https://www.svgrepo.com/show/497407/profile-circle.svg" alt="User Profile" width="55">
      </div>
      
      <br>
      <br>
      <br>
      <br>
      <form id="myForm" method="post" action="process_form.php">
        <div class="form-group">
            <label for="sectionid">Sila Pilih Bahagian</label>
            <input type="text" class="sectionclass" id="sectionid" list="sections" name="section" placeholder="Pilih Bahagian">
            <datalist id="sections">
              <option value="Bahagian A">
              <option value="Bahagian B">
              <option value="Bahagian C">
              <option value="Bahagian D">
              <option value="Bahagian E">
            </datalist>
        </div>
        <div class="form-group">
            <label for="itemid">Sila Pilih Barang</label>
            <input type="text" class="itemclass" id="itemid" list="items" name="item" placeholder="Pilih Barang">
            <datalist id="items">
              <option value="A6 - Gabungan/Keahlian Profesional (terpakai kepada bidang berkaitan dan institusi yang diluluskan)">
              <option value="B3 - Tanggungjawab Operasi dan Pembangunan dalam MIROS + Jawatankuasa (pelantikan sewajarnya oleh pengurusan)">
              <option value="B4 - Pengalaman Profesional di Peringkat Antarabangsa">
              <option value="B5 - Pengalaman Profesional di Peringkat Kebangsaan">
              <option value="C1 - Pimpin Cadangan Penyelidikan Baharu">
              <option value="C2 - Projek Penyelidikan atau Pembangunan">
              <option value="C3 - Operasi Penyelidikan dan Pembangunan">
              <option value="D1 - Komersial/Monetari (memulakan dan melakukan kerja profesional/perundingan) + Komersial/Bukan kewangan (termasuk mesyuarat, bengkel, e-mel)">
              <option value="G1 - Institut/Komuniti - cth. kawasan perumahan (Daerah, Negeri, Kebangsaan)">
            </datalist>
        </div>

        <div class="form-group">
            <label for="DQ">Butiran/Kuantiti</label>
            <input type="text" class="DQclass" id="DQid" name="details_quantity" placeholder="Butiran/Kuantiti" required>
        </div>

        <div class="form-group">
            <label for="scoreid">Skor</label>
            <input type="number" class="scoreclass" id="scoreid" name="score" placeholder="Skor" required>
            
        </div>
        <button type="submit" id="submit-btn">Hantar</button>
      </form>
    </div>
</body>
</html>
