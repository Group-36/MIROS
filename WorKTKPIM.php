<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Sasaran Kerja & KPI</title>
    <link rel="stylesheet" href="miros.css">
</head>
<body>
  <div class="container">
      <img src="https://img02.mockplus.com/rp/image/2024-03-07/537e3a50-dbe1-11ee-9ed8-7f6f33dbdfc3.png" alt="Logo" class="logo">
      <div class="user-info">
      <header style="margin-right: 16vw;">
          <h1 style="color: rgb(27, 131, 129); font-weight: bold;">Sasaran Kerja dan Halaman KPI</h1>
          </header>
        <button class="language-button bm" style="font-weight:bold; font-size:20px;" onclick="window.location.href='WorkTKPIM.php'" >bm</button>
         <button class="language-button en" style="font-weight:bold; font-size:20px;" onclick="window.location.href='WorkTKPI.php'">en</button>
          <button style="background-color: blue; font-weight:bold; font-size:20px;">Log keluar</button>
          <img src="https://www.svgrepo.com/show/497407/profile-circle.svg" alt="User Profile" width="55">
      </div>
      <br>
      <br>
      <br>
      <br>
      <form id="myForm">
        <div class="form-group">
        
<div class="charts">
      <div class="charts" style="margin-left: 22vw;">
<table>
  <tr>
    <th>
      <div class="charts-card">
        <h1 class="chart-title">Sasaran Kerja</h1>
        <form id="myForm">
        <div class="form-group">
          <label for="DQ" style="color: black;">Nama</label>
          <input type="text" class="DQclass" id="DQid" placeholder="Nama" required>
      </div>

        <div class="form-group">
          <label for="DQ" style="color: black;">Sasaran Kerja</label>
          <input type="text" class="DQclass" id="DQid" placeholder="Sasaran Kerja" required>
      </div>

      <div class="form-group">
          <label for="DQ" style="color: black;">Butiran</label>
          <input type="text" class="DQclass" id="DQid" placeholder="Butiran" required>
      </div>
      
      <button type="submit" id="submit-btn">Hantar</button>
    </form>
  </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">KPI's</p>
        <form id="myForm">
        <div class="form-group">
          <label for="DQ" style="color: black;">Nama</label>
          <input style="margin-bottom: -2vh;" type="text" class="DQclass" id="DQid" placeholder="Nama" required>
      </div>

        <div class="form-group">
          <label for="DQ" style="color: black;">Sasaran Kerja</label>
          <input type="text" class="DQclass" id="DQid" placeholder="Sasaran Kerja" required>
      </div>

      <div class="form-group">
          <label for="DQ" style="color: black;">Butiran</label>
          <input type="text" class="DQclass" id="DQid" placeholder="Butiran" required>
      </div>
      
      <button type="submit" id="submit-btn">Hantar</button>
    </form>
  </div>
    </th>
  </tr>

  <tr>
  <th>
      <div class="charts-card">
        <p class="chart-title">Edit Sasaran Kerja</p>
        <label for="sectionid" style="color: black;">Pilih Sasaran Kerja</label>
                        <select class="sectionclass" id="sectionid" onchange="updateItems()">
                          <option value="A">WT1</option>
                          <option value="B">WT2</option>
                          <option value="C">WT3</option>
                        </select>

        <div class="form-group">
          <br><br>
          <label for="DQ" style="color: black;">Sasaran Kerja Baharu</label>
          <input type="text" class="DQclass" id="DQid" placeholder="Sasaran Kerja Baharu" required>
      </div>
      
      <button type="submit" id="submit-btn">Hantar</button>
    </form>
  </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Edit KPI's</p>
        <label for="sectionid" style="color: black;">Pilih KPI</label>
                        <select class="sectionclass" id="sectionid" onchange="updateItems()">
                          <option value="A">KPI1</option>
                          <option value="B">KPI2</option>
                          <option value="C">KPI3</option>
                          <br>
                        </select>

        <div class="form-group">
        <br><br>
          <label for="DQ" style="color: black;">New KPI</label>
          <input type="text" class="DQclass" id="DQid" placeholder="KPI baharu" required>
      </div>
      
      <button type="submit" id="submit-btn">Hantar</button>
    </form>
  </div>
    </th>
</tr>
</table>
</div>