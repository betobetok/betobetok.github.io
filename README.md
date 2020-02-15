<!DOCTYPE html>
<html>
<title>Alberto Solorzano Kraemer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/Style.css" media="screen" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="js/softskills.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
function mostrar(ID){
  document.getElementById(ID).style.display="block"
}
function esconder(ID){
  document.getElementById(ID).style.display="none"
}
function traslateSp() {
  var a = document.createElement("a");
  a.target = "_self";
  a.href = "index_sp.html";
  a.click();
}
function traslateGe() {
  var a = document.createElement("a");
  a.target = "_self";
  a.href = "index_ge.html";
  a.click();
}
function ver(ID) {
  document.getElementById(ID).style.display="none"
  document.getElementById(ID+1).style.display="block"
}
function ocultar(ID) {
  document.getElementById(ID).style.display="block"
  document.getElementById(ID+1).style.display="none"
}
/*function drawComunications(){
  var canvas = document.getElementById("SoftSkills");
  var ctx = canvas.getContext("2d");
  ctx.fillStyle = "#FF0000";
  ctx.fillRect(0, 0, 150, 75);
}*/
</script>


<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding"¡>
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="d.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-fw w3-margin-right w3-large w3-text-teal"></i><a class="tooltip">Alberto Solorzano Kraemer <span class="tooltiptext">As Engeenier, Fater and Prfesor I want to share my knowlage with other in order to make people more happy</span></a></p>

          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Aerospace Engineer (Master in Science)</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><a onclick="myMap()">Frankfurt am Main, Germany</a></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="mailto:betobetok@gmail.com">betobetok@gmail.com</a></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="tel:+491775834192">0177 58 34 192</a></p>
          <hr>
        <!--Skills -->
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p><i class="fas fa-keyboard fa-fw w3-margin-right w3-text-teal"></i>Office Software</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div id="OfficeSoftware" onmouseover="ver(this.id)" class="w3-container w3-center w3-round-xlarge w3-teal" style="width:95%; display: block;">Very Good</div>
            <div id="OfficeSoftware1" onmouseleave="ocultar('OfficeSoftware')" style="display: none;">
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Microsoft Office</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">Very Good</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Open Office</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">Very Good</div> 
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Latex</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">Very Good</div>
            </div>
          </div>
          <p><i class="fa fa-code fa-fw w3-margin-right w3-text-teal"></i>Program Languages</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div id="ProgramLenguages" onmouseover="ver(this.id)" class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%; display: block;">Very Good</div>
             <div id="ProgramLenguages1" onmouseleave="ocultar('ProgramLenguages')"  style="display: none;">
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>HTMLe</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">Very Good</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Javascript</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:70%">Very Good</div> 
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Matlab</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:85%">Very Good</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Wolfram Mathematica</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">Very Good</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>C</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">Good</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Fortran</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:45%">Basic Knowledge</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Pyton</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:35%">Basic Knowledge</div>
            </div>
          </div>
          <p><i class="fas fa-drafting-compass fa-fw w3-margin-right w3-text-teal"></i>CAD-CAE Software</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div id="CAD-CAE" onmouseover="ver(this.id)" class="w3-container w3-center w3-round-xlarge w3-teal" style="width:60%; display: block;">Good</div>
             <div id="CAD-CAE1" onmouseleave="ocultar('CAD-CAE')"  style="display: none;">
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Siemens NX</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">Good</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>SolidWorks</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:60%">Good</div> 
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>FreeCAD</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:65%">Good</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>OpenSCAD</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:85%">Very Good</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>ANSYS</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">Basic Knowledge</div>
            </div>
          </div>
          
          <p><i class="fas fa-microchip fa-fw w3-margin-right w3-text-teal"></i>Microcontroller</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div id="Microcontroller" onmouseover="ver(this.id)" class="w3-container w3-center w3-round-xlarge w3-teal" style="width:60%; display: block;">Basic Knowledge</div>
             <div id="Microcontroller1" onmouseleave="ocultar('Microcontroller')"  style="display: none;">
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>Arduino</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">Basic Knowledge</div>
              <p><i class="fa-fw w3-margin-right w3-text-teal"></i>ESP32</p>
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:60%">Basic Knowledge</div> 
            </div>
          </div>
          <br>
        <!--Languages -->
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p><i onclick="traslateSp()" class="material-icons fa-fw w3-margin-right w3-text-teal">translate</i>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div onclick="traslateSp()" class="w3-round-xlarge w3-center w3-teal" style="height:24px;width:100%">Native</div>
          </div>

          <p><i class="material-icons fa-fw w3-margin-right w3-text-teal">translate</i>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-center w3-teal" style="height:24px;width:70%">C1</div>
          </div>
          
          <p><i onclick="traslateGe()" class="material-icons fa-fw w3-margin-right w3-text-teal">translate</i>German</a></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div onclick="traslateGe()" class="w3-round-xlarge w3-center w3-teal" style="height:24px;width:60%">B2</div>
          </div>
          <br>     

      <!--Soft Skills -->
      <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Soft Skills</b></p>
        <canvas id="SoftSkills" width="400" height="200"
        style="border:1px solid #c3c3c3;">
        Your browser does not support the canvas element.
        </canvas>
          <p onclick="drawComunications()"><i class="far fa-comments fa-fw w3-margin-right w3-text-teal"></i>Comunications</p>
          <p onclick="drawCrit()"><i class="fas fa-brain fa-fw w3-margin-right w3-text-teal"></i>Critical Thinking</p>
          <p onclick="drawLead()"><i class="fas fa-flag fa-fw w3-margin-right w3-text-teal"></i>Leadership</a></p>
          <p onclick="drawPositive()"><i class="far fa-thumbs-up fa-fw w3-margin-right w3-text-teal"></i>Positive Attitude</a></p>
          <p><i class="fas fa-users fa-fw w3-margin-right w3-text-teal"></i>Teamwork</a></p>
          <p><i class="fas fa-balance-scale fa-fw w3-margin-right w3-text-teal"></i>Work Ethic</a></p>
          <br>
        </div>
      </div>
    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

    <!-- Work Experience -->
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fas fa-business-time fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Requirements Management Engineer / <a href="https://www.dfs.de" target="_blank">Deutsche Flugsicherung GmbH</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>May 2019 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <ul>
            <li>Description and analysis of the requirements for the future <a class="tooltip">ATM<span class="tooltiptext w3-round-small">(Air Trafic Management)</span></a>-System.</li>
            <li>Analysis of specifications and user requirements.</li>
            <li>Build the business process model and maintain the database in the system.</li>
          </ul>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Maintenance of technical aircraft documentation / <a href="https://www.lufthansa-technik.com/" target="_blank" >Lufthansa Technik </a> - <a href="https://www.aviationpower.de/" target="_blank" >Aviation Power</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Aug 2018 - May 2019</h6>
          <ul>
            <li>Digitalization and control of Aircraft documentation.</li>
          </ul>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Quality Control Manager / <a href="https://redwings.aero/" target="_blank">MC Jets</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - Mar 2016</h6>
          <ul>
            <li>Supervise the quality control of the maintenance process.</li>
            <li>Setup of training programs for technical staff.</li>
            <li>Elaborate and control the maintenance schedule of the airplanes in the workshop.</li>
            <li>Audit the maintenance process to obtain the permission of the <a class="tooltip">FAA<span class="tooltiptext w3-round-small">(Federal Aviation Administration in USA)</span></a>.</li>
          </ul>
        </div>
      <div class="w3-container">
          <h5 class="w3-opacity"><b>Research Professor / <a href="https://www.unaq.edu.mx/" target="_blank">Universidad Aeronautica en Queretaro</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Sep 2011 - Dec 2014</h6>
          <ul>
            <li>Teach in bachelor grade.</li>
            <li>Give technical trainings to technical aviation personnel.</li>
            <li>Project management and collaborating in innovation and development projects between <a class="tooltip">private sector <span class="tooltiptext w3-round-small">(aerospace industry)</span></a> and <a class="tooltip">state agency <span class="tooltiptext w3-round-small">(Nacional Center of Science and Technology, CONACYT)</span></a>.</li>
            <li>Leader of the Thermodynamics Department and the Model and Prototyping Workshop.</li>
          </ul>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Vertical Market Manager / <a href="https://new.siemens.com/mx/es.html" target="_blank">Siemens Global Services (Mexico)</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Feb 2010 - Aug 2011</h6>
          <ul>
            <li>Customer care for aerospace clients in Mexico.</li> 
            <li>Market and strategies analysis.</li>
          </ul>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>CEO / <a href="https://www.computrabajo.com.mx/empresas/acerca-de-mitra-energia-sa-de-cv-A22FE8C32B54FC52" target="_blank">Mitra Energia</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Feb 2008 - Jul 2010</h6>
          <ul>
            <li>Set up and spin off of the company.</li>
            <li>Management of Relationships with clients and providers.</li>
            <li>Employer and supervisor of three technical employees.</li>
          </ul>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Aircraft Maintenance Instructor / <a href="https://aeromexicoformacion.com/" target="_blank">Centro de Capacitacion Alas de America (Aeromexico)</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2004 - Sep 2006</h6>
          <ul>
            <li>Teach to maintenance personnel and pilots of Aeromexico</li>
            <li>Develop training manuals on maintenance and didactic materials</li>
          </ul>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Certification Engineer for Avionics Workshop / <a href="https://www.aeromexico.com/es-mx/vuela-con-nosotros/alianza-delta-air-lines" target="_blank">Aeromexico Maintenance</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2004 - Sep 2006</h6>
          <ul>
            <li>Certification of the workbenches and tooling for <a class="tooltip">FAA<span class="tooltiptext w3-round-small">(Federal Aviation Administration in USA)</span></a>.</li>
            <li>Design and manufacture workbenches and tools to maintain the capabilities of the workshop.</li>
          </ul>
        </div>
      </div>
      <!-- Education -->
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fas fa-landmark fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Master of Aerospace Engineering / <a href="https://www.unaq.edu.mx/oferta-educativa/posgrado/mia/" target="_blank">Universidad Aeronautica en Queretaro</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>09/2013 – 08/2017</h6>
          <ul>
            <li>Major fields of study: Thermo and Aerodynamics.</li>
            <li>Thesis: Experimental methodology to identify the dynamic model of a glider with CG position control.</li>
          </ul>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Master of Sciences in Energetic Systems / <a href="https://www.ipn.mx/oferta-educativa/posgrado/ver-carrera.html?lg=es&id=132" target="_blank">Instituto Politecnico Nacional</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>09/2006 – 02/2008</h6>
          <ul>
            <li>Major fields of study: Thermodynamics.</li>
            <li>Thesis: Correlations for calculating heat transfer in smooth tube-banks.</li>
          </ul>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Aeronautical Engineering (Germany validation) / <a href="https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=en&id=1" target="_blank">Instituto Politecnico Nacional</a></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>09/2006 – 02/2008</h6>
          <ul>
            <li>Major fields of study: Aircraft Maintenance and Mechanical Design</li>
            <li>Thesis: Design and construction of a Stirling engine.</li>
          </ul>
        </div>
      </div>
      <!-- Capacitation -->
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Further education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Technical Training </b></h5>
          <div class="w3-text-teal" onclick="ver('Avionics')" style="display: block;"><i class="fas fa-folder-open fa-fw w3-margin-right"></i>Avionics</div>
            <div id="Avionics" style="display: block;"></div>
            <div id="Avionics1" onmouseleave="ocultar('Avionics')"  style="display: none;">
              <ul class="w3-ul w3-hoverable">
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Boeing 777-200/-300 Avionics/Airframe/Power Plant/Electrical Systems</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Line Maintenance of Electrical Systems of B-757 and B-767</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Line Maintenance of Electrical Systems of B-737-700</li>
              </ul>
            </div>
          <div class="w3-text-teal" onclick="ver('Maintenance')" style="display: block;"><i class="fas fa-folder-open fa-fw w3-margin-right"></i>Aircraft Maintenance</div>
            <div id="Maintenance" style="display: block;"></div>
            <div id="Maintenance1" onmouseleave="ocultar('Maintenance')"  style="display: none;">
              <ul class="w3-ul w3-hoverable">
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Initial Training Cessna 414</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Initial Training Embraer 145/135</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Initial Training ATA II Hawker 800</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Initial Training ATA II CRJ-200</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Initial Training Airbus A-320</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Initial Training ATA II Learjet</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Maintenance and repair of Sell Gales inserts</li>
              </ul>
            </div>
          <div class="w3-text-teal" onclick="ver('TechnicalOthers')" style="display: block;"><i class="fas fa-folder-open fa-fw w3-margin-right"></i>Other Trainings</div>
            <div id="TechnicalOthers" style="display: block;"></div>
            <div id="TechnicalOthers1" onmouseleave="ocultar('TechnicalOthers')"  style="display: none;">
              <ul class="w3-ul w3-hoverable">
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>ESCAM – EASA Legislations</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Aeronautics Legislations</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Humans Factor</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Initial Training for NDT Inspections</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i><a class="w3-tooltip"><b><i>ETOPS</b></i><span class="w3-text w3-round-small">(Extended-range Twin-engine Operation Performance Standards)</span></a> for B-757 and B-767</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Landing Minimum CAT - II / III for B-757 and 767</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Instructor Initial Training</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Instructor Initial Training</li>
              </ul>
            </div>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Other Courses</b></h5>
          <div class="w3-text-teal" onclick="ver('CADCAECourse')" style="display: block;"><i class="fas fa-folder-open fa-fw w3-margin-right"></i>CAD-CAE</div>
            <div id="CADCAECourse" style="display: block;"></div>
            <div id="CADCAECourse1" onmouseleave="ocultar('CADCAECourse')"  style="display: none;">
              <ul class="w3-ul w3-hoverable">
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Siemens NX 7.5</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>SolidWorks</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Mechanical Desktop</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>AutoCAD R12 Advanced</li>
              </ul>
            </div>
          <div class="w3-text-teal" onclick="ver('Others')" style="display: block;"><i class="fas fa-folder-open fa-fw w3-margin-right"></i>Others</div>
            <div id="Others" style="display: block;"></div>
            <div id="Others1" onmouseleave="ocultar('Others')"  style="display: none;">
              <ul class="w3-ul w3-hoverable">
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Project Management by Siemens</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>New Collaborations Model by Siemens</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Project Manager Siemens LoA Tool</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Instructor Actualization</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Humans Resource Management in Aircraft Maintenance</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Diploma of Tutoring and Educational Guidance</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Diploma of PHP and mySQL - Development of dynamic applications</li>
                <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i>Diploma in Design and Object Oriented Programming</li>
              </ul>
            </div>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>“Once someone has become a master in one thing, he should become a student in a new thing. “</p>
  <p>Gerhart Hauptmann</p>
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
