<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <meta name="title" content="website-design" />
    <link
      rel="km icon"
      href="./imgbin_chili-con-carne-frying-pan-stock-pots-cookware-png.png"
      type="image/svg+xml"
    />
    <link rel="stylesheet" type="text/css" href="b.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    
    height: 100vh;
    background-color: #bdbdbb;
  }
  .header {
    position: absolute;
    top: 10px;
    left: 20px;
    position: fixed;
    align-items: center;
    width: 100%;
    box-sizing: border-box;
  }
  .logo {
    max-width: 150px;
    max-height: 150px; 
  
    }
    h1{
        margin-top: 150px;
       font-style: oblique;
        font-family: 'Courier New', monospace;
        font-size: 45px;
        
    }
    .option{
        background-color: rgb(161, 166, 175);
    }
.select_box{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.date{
font-weight: 600;
 border: 4px solid #70706f;
margin-top: 40px;
 width: 150px;
    height: 40px;
margin-bottom: 80px;
font-size: 16px;
margin-left: 880px;
 padding: 10px 5px;
   text-align:center;
  border-radius: 3px;
  text-decoration: none;
background-color: #749e5f; 
  

}
.sub{
font-weight: 600;
 border: 4px solid #70706f;
width: 150px;
  height: 45px;
margin-top: 280px;
font-size: 16px;
margin-left: 880px;
 padding: 10px 10px;

 border-radius: 20px;
background-color: #749e5f; 

}
    .box{
 border: 4px solid #70706f;
 padding: 10px 5px;
    
  border-radius: 3px;
  text-decoration: none;
  font-weight: 500;
  margin: 0 13px;
  font-size: 16px;
    
    color: rgb(0, 0, 0);
 }   
 .box_0{
    width: 200px;
    height: 55px;
    background-color: rgb(113, 114, 115);
}
.box_1{
    width: 170px;
    height: 55px;
    background-color: rgb(113, 114, 115);
}
.box_2{
    width: 230px;
    height: 55px;
    background-color: rgb(113, 114, 115);
}
.box_3{
    width: 200px;
    height: 55px;
    background-color: rgb(113, 114, 115);
}
.box_3{

    width: 220px;
    height: 55px;
    background-color: rgb(113, 114, 115);
}
     </style>
</head>

<body >
<div class="header">
      <img
        src="./Screenshot_2023-10-03_at_15.16.27-removebg-preview.png"
        alt="Logo"
        class="logo"
      />
    </div>
    <h1>TIMETABLE</h1>

<form action="insert.php" method="post">
   
  <input class="date" type="date" id="date" name="date"><br><br>
  <div class="select_box">
 
  <select class="box box0" ="stamperName" name="stamperName" placeholder="skns">
    <!-- Options for stamper names -->
    <option value="STAMPER NAME">STAMPER NAME</option>
    <option value="Mattie_Float">Mattie Float</option>
    <option value="Alton_Wright">Alton Wright</option>
    <option value="Michael_Cook">Michael Cook</option>
    <option value="Sevval_Isikirik">Sevval Isikirik</option>
    <option value="Beth_Knight">Beth Knight</option>
    <option value="Lizzy_Squire">Lizzy Squire</option>
    <option value="Smith_Turner">Smith Turner</option>
    <option value="Adam_Taylor">Adam Taylor</option>
  </select><br><br>

  
  <select class="box box1"id="stamperShift" name="stamperShift">
    <option value="SHIFT TIME">SHIFT TIME</option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select><br><br>

  
  <select class="box box2"id="machineType" name="machineType" onchange="populateMachineIDs()">
    <!-- Options for machine types -->
    <option value="MACHINE TYPE">MACHINE TYPE</option>
    <option value="A1">A1</option>
    <option value="A2">A2</option>
    <option value="A3">A3</option>
    <option value="A4">A4</option>
    <option value="A5">A5</option>
    <option value="A6">A6</option>
    <option value="A7">A7</option>
  </select><br><br>

  <select class="box box3"id="Product" name="Product">
    <!-- Options for products -->
    <option value="PRODUCT">PRODUCT</option>
    <option value="Cardamon">Cardamon</option>
    <option value="Chive TX5">Chive TX5</option>
    <option value="Saffron XP">Saffron XP</option>
    <option value="Clove TM47">Clove TM47</option>
  </select><br><br>

  <label for="machineID">Machine ID:</label>
  <select class="box box4" id="machineID" name="machineID">
    <!-- Options will be populated based on selection -->
    
  </select><br><br>
  </div>

 

  <input class="sub" type="submit" value="Submit">
  
</form>

<script>
  function populateMachineIDs() {
    var machineType = document.getElementById("machineType").value;
    var machineIDSelect = document.getElementById("machineID");
    machineIDSelect.innerHTML = "";

    var start = 0;
    var end = 0;

    switch (machineType) {
      case "A1":
        start = 1;
        end = 15;
        break;
      case "A2":
        start = 16;
        end = 30;
        break;
      case "A3":
        start = 31;
        end = 45;
        break;
      case "A4":
        start = 46;
        end = 60;
        break;
      case "A5":
        start = 61;
        end = 75;
        break;
      case "A6":
        start = 76;
        end = 90;
        break;
      case "A7":
        start = 91;
        end = 105;
        break;
    }

    for (var i = start; i <= end; i++) {
      var option = document.createElement("option");
      option.value = "M" + ("000" + i).slice(-3);
      option.text = "M" + ("000" + i).slice(-3);
      machineIDSelect.appendChild(option);
    }
  }

  // Populate machine IDs initially
  populateMachineIDs();
</script>
</body>

</html>
