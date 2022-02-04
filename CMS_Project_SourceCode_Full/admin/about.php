<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a{
    text-decoration: none;
    color: white;
}
.abc{
    font-family:"Papyrus";
    font-size:20px;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p class="abc">"Online Complaint Management System provides an online way of solving the problems faced by the public by saving  time  and  eradicate  corruption.  The  objective  of  the  complaint management  system  is  to  make complaints  easier  to  coordinate,  monitor,  track  and  resolve,  and  to  provide  government  with  an  effective  tool  to identify and target problem areas, monitor complaints and handling performance of each department . The complaints can be from different areas where public have direct exposure like Water ,Electricity ,Road, and Garbage Disposal." 
</p>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../img/water.jpg" alt="water" style="width:100%">
      <div class="container">
        <h2>Water Department</h2>
        <p>A website that allows you to complaint about the problems related to water</p>
        <p class="title">Kerala Water Authority Head Office, ‘Jalabhavan’, Vellayambalam,
             Thiruvananthapuram,Kerala</p>
        <p><button class="button"><a href="http://kwa.kerala.gov.in/ml/">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../img/electricity1.jpg" alt="electricity" style="width:100%">
      <div class="container">
        <h2>Electricity Department</h2>
        <p>A website that allows you to complaint about the problems related to Electricity</p>
        <p class="title">Kerala State Electricity Board Ltd.,Vydyuthi Bhavanam,Pattom, Thiruvananthapuram,Kerala</p>
        <p><button class="button"><a href="http://kwa.kerala.gov.in/ml/">Contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="../img/road.jpg" alt="Road" style="width:100%">
      <div class="container">
        <h2>Road Department</h2>
        <p>A website that allows you to complaint about the problems related to Road</p>
        <p class="title">Second Floor,South Block, Secretariat, Statue,Thiruvananthapuram,Kerala,PIN Code: 695001</p>
        <p><button class="button"><a href="https://trivandrum.nic.in/en/public-works-dept/">Contact</a></button></p>
      </div>
    </div>
  </div>
<div class="column">
    <div class="card">
      <img src="../img/waste.jpg" alt="waste" style="width:100%">
      <div class="container">
        <h2>Garbage Department</h2>
        
        <p>A website that allows you to complaint about the problems related to Garbage</p>
        <p class="title">Corporation Offices, Palayam, Thiruvananthapuram, Kerala,PIN Code : 695033 </p>
        <p>0471-2320821</p>
        <p><button class="button"><a href="https://tmc.lsgkerala.gov.in/en/home">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>