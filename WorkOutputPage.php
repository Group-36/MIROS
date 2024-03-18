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
          <button style="background-color: blue; font-weight:bold; font-size:20px;">Log Out</button>
          <img src="https://www.svgrepo.com/show/497407/profile-circle.svg" alt="User Profile" width="55">
      </div>
      
      <br>
      <br>
      <br>
      <br>
      <form id="myForm" method="post" action="process_form.php">
        <div class="form-group">
            <label for="sectionid">Please Select Section</label>
            <input type="text" class="sectionclass" id="sectionid" list="sections" name="section" placeholder="Select Section">
            <datalist id="sections">
              <option value="Section A">
              <option value="Section B">
              <option value="Section C">
              <option value="Section D">
              <option value="Section G">
            </datalist>
        </div>
        <div class="form-group">
            <label for="itemid">Please Select Item</label>
            <input type="text" class="itemclass" id="itemid" list="items" name="item" placeholder="Select Item">
            <datalist id="items">
              <option value="A6 - Professional Affilliations/Membership (applicable to relevant fields and approved institutions)">
              <option value="B3 - Operational and Development Responsibilities in MIROS + Committee (proper appointment by management)">
              <option value="B4 - Professional Experiences at International Level">
              <option value="B5 - Professional Experiences at National Level">
              <option value="C1 - Lead New Research Proposal">
              <option value="C2 - Research or Development Projects">
              <option value="C3 - Research and Development Operations">
              <option value="D1 - Commercial/Monetary (initiate and do professional/consultation work) + Commercial/Non-monetary (include meetings, workshop, emails)">
              <option value="G1 - Institute/Community - e.g. residential areas (District,State,National) ">
            </datalist>
        </div>

        <div class="form-group">
            <label for="DQ">Details/Quantity</label>
            <input type="text" class="DQclass" id="DQid" name="details_quantity" placeholder="Details/Quantity" required>
        </div>

        <div class="form-group">
            <label for="scoreid">Score</label>
            <input type="number" class="scoreclass" id="scoreid" name="score" placeholder="Score" required>
            
        </div>
        <button type="submit" id="submit-btn">Submit</button>
      </form>
    </div>
</body>
</html>
