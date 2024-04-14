<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Dashboard</title>
    <link rel="stylesheet" href="miros.css">
</head>
<body>
  <div class="container">
      <img src="https://img02.mockplus.com/rp/image/2024-03-07/537e3a50-dbe1-11ee-9ed8-7f6f33dbdfc3.png" alt="Logo" class="logo">
      <div class="user-info">
      <header style="margin-right: 16vw;">
          <h1 style="color: rgb(27, 131, 129); font-weight: bold;">Administrator Dashboard</h1>
          </header>
        <button class="language-button bm" style="font-weight:bold; font-size:20px;" onclick="window.location.href='AdminDashboardM.php'" >bm</button>
         <button class="language-button en" style="font-weight:bold; font-size:20px;" onclick="window.location.href='AdminDashboard.php'">en</button>
          <button style="background-color: blue; font-weight:bold; font-size:20px;">Log Out</button>
          <img src="https://www.svgrepo.com/show/497407/profile-circle.svg" alt="User Profile" width="55">
      </div>
      <br>
      <br>
      <br>
      <br>
      <form id="myForm">
        <div class="form-group">
        
<div class="charts">
      <div class="charts" style="margin-left: 12vw;">
<table>
  <tr>
  <th>
      <div class="charts-card">
        <p class="chart-title">View User's of the system</p>
        <dl>
        <button type="submit" id="submit-btn" onclick="window.location.href='ViewUsers.php'">View User's</button>
        </dl>
        <br>
        <p class="chart-title">View User's</p>
        <dl>
        </dl>
      </div>
    </th>

    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Add a new User to the system</p>
        <dl>
        <button type="submit" id="submit-btn" onclick="window.location.href='CreateUsers.php'">Create User</button>
        </dl>
        <br>
        <p class="chart-title">Add User</p>
        <dl>
        </dl>
      </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Notifications</p>
        <dl>
          <dd style="text-align: left;">- Notification 1</dd>
          <dd style="text-align: left;">- Notification 2</dd>
          <dd style="text-align: left;">- Notification 3</dd>
          </dl>
      </div>
    </th>
  </tr>

  <tr>
  <th>
      <div class="charts-card">
        <p class="chart-title">Tasks</p>
        <dl>
          <dd style="text-align: left;">- Task 1</dd>
          <dd style="text-align: left;">- Task 2</dd>
          <dd style="text-align: left;">- Task 3</dd>
          </dl>
  </div>
    </th>

    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Progress</p>
        <div id="donut-chart"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Activity', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          ['Workoutput & KPI',  165,      938,         522,             998,           450,      614.6],
          ['Reserach Publication',  135,      1120,        599,             1268,          288,      682],
          ['Consultation Project',  157,      1167,        587,             807,           397,      623],
          ['Operational Involvement',  139,      1110,        615,             968,           215,      609.4],
        ]);

        var options = {
          title : 'Progress',
          vAxis: {title: 'Completed'},
          hAxis: {title: 'Activties'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
        <div id="chart_div" style="width: auto; height: 25vh;"></div>
      </div>
      </div>
    </th>
    
    <th>
      <div class="charts-card" style="margin-left: 30px;">
        <p class="chart-title">Deadlines</p>
        <dl>
          <dd style="text-align: left;">- Deadline 1</dd>
          <dd style="text-align: left;">- Deadline 2</dd>
          <dd style="text-align: left;">- Deadline 3</dd>
          </dl>
        <div id="reminders-warnings-chart"></div>
      </div>
    </th>
</tr>
</table>
</div>
