<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://images.squarespace-cdn.com/content/v1/5db89dca630c75580c7f4932/1575044822385-8TRPS51L6O5J2NWYCJ4H/ke17ZwdGBToddI8pDm48kAy9ij7NhvrgfrXDj12tieFZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7YIE3ZwwVlGd312yABb759EDDsZWIv4M_yy9fsfZKowcH08FZ-5-P-Aipy2pR0buMw/Bactivax+Advocacy+icon.png" type="image/icon type">
        <title>COVID-19 RELIEF</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style>

.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding: 5px;
  margin-bottom: 5px;
  width: 100%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>

<body>
  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="home.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Healthcare</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a onclick="selfassess('123');"  data-toggle="modal" data-target="#selfassess"><i class="menu-icon fa fa-edit"></i>Self Assessment</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a data-toggle="modal" data-target="#alarmdialog" onclick="viewalarm();">  <i class="menu-icon fa ti-alarm-clock"></i>Alarm Manager</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                          <a data-toggle="modal" data-target="#MSME"> <i class="menu-icon fa fa-th-large"></i>MSME Products</a>
                    </li>
                    <div class="modal fade" id="MSME" role="dialog">
                   <div class="modal-dialog">

                     <!-- Modal content-->
                     <div class="modal-content">
                       <div class="modal-header">
                         <p align=left><font color="blue" size=+1>MSME Products:</font></p>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                       </div>
                       <div class="modal-body">
                  <?php
                  $product=array("Ventilators", "Alcohol based hand-rub", "Face shield (eye, nose & mouth protection)", "N95 Masks", "Latex single use gloves (clinical)",
                                "Reusable vinyl / rubber gloves (cleaning)", "Eye protection (visor / goggles)", "Protective Gowns / Aprons", "Disposable thermometers",
                                "UV tube light for sterilization", "Medical masks (surgical / procedure)", "Detergent / Disinfectant", "Single use towels", "Biohazard bags",
                                "Wheel Chair", "Glucometer with strips", "Medicine", "IV Fluid - DNS", "IV Fluid - Dextrose", "20.Hard-frozen Gel Packs", "Sample Collection Kit",
                                "Thermocool box / Ice-box", "Stretcher", "Thermal scanners", "Batteries for thermal scanners", "26.BP apparatus", "IV Sets", "IV Cannula",
                                "IV Stand", "Ambulance", "First aid", "Medical Waste Incinerator", "ICU Beds", "Cardiac monitors", "Syringe pumps", "Portable x ray machines",
                                "Endotracheal tube", "Suction tube", "Oxygen cylinders");


                  $i=0;
                  while($i<count($product)){

                  ?>

                         <div class="card"  onclick="window.open('https://mkp.gem.gov.in/search?q=<?php echo $product[$i];?>');">
                        <img src="assets/images/MSME.png" alt="Avatar" width="60px" height="60px" >
                           <div class="container">
                        <center>     <p style="  margin: 0;  position: absolute;  top: 50%;  left: 50%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);"><?php  echo $product[$i];?></p></center>

                           </div>
                         </div>

                  <?php
                  $i++;
                  }
                  ?>
                       </div>

                     </div>

                   </div>
                  </div>
                   <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="  var win = window.open('https://ors.gov.in/copp/welcome.jsp?NICSecurityORS=KVJF-IIQJ-X44U-BM3H-SPSG-SF4I-YIQL-DIRP', '_blank'); win.focus();"> <i class="menu-icon fa fa-check-square"></i>Appointment/Admission</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="  var win = window.open('https://www.google.com/maps/search/chemists' + '/@' + window.localStorage.getItem('lat') + ',' + window.localStorage.getItem('lon'), '_blank'); win.focus();"> <i class="menu-icon fa fa-plus"></i>Medical Shops</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="  var win = window.open('https://www.google.com/maps/search/hospitals' + '/@' + window.localStorage.getItem('lat') + ',' + window.localStorage.getItem('lon'), '_blank');win.focus();"> <i class="menu-icon fa fa-hospital-o"></i>Hospitals near me</a>
                    </li>
                  <h3 class="menu-title">Disaster Management</h3><!-- /.menu-title -->
                  <li class="menu-item-has-children dropdown">
                    <a href="#" data-toggle="modal" data-target="#first_responder" class="main-button" onclick="if(window.localStorage.getItem('email')==null){document.getElementById('stop_scanning').innerHTML='Sign in to use this feature';return false;}if(confirm('Are you sure you want to alert nearby users?')){first_responder();document.getElementById('stop_scanning').innerHTML='Stop Scanning';document.getElementById('scanning_img').style.display='block';return true;}else{document.getElementById('stop_scanning').innerHTML='Scanning Stopped';document.getElementById('scanning_img').style.display='none';return false;};">
 <i class="menu-icon fa fa-flash"></i>First Responder</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                      <a style="color:white;"class="main-button" data-toggle="modal" data-target="#myModal"> <i class="menu-icon fa fa-phone-square"></i>Helpline</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                      <a data-toggle="modal" data-target="#collectmaterial" onclick="materialsupplied();"> <i class="menu-icon fa fa-truck"></i>Material Collection</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                        <a data-toggle="modal" data-target="#food" onclick="foodsupply();"> <i class="menu-icon fa ti-briefcase"></i>Food Supply</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                      <a data-toggle="modal" data-target="#orphan" onclick="orphansupplied();"> <i class="menu-icon fa  fa-home"></i>Orphans & Vulnerable</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                      <a data-toggle="modal" data-target="#sector" onclick="sectorsupplied();"> <i class="menu-icon fa fa-users"></i>Unorganised workers</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" onclick="epass();" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-id-badge"></i>Epass</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" onclick="donate();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-credit-card"></i>Donate</a>
                  </li>

                    <h3 class="menu-title">Skills</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gears"></i>Work</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-time"></i><a style="color:white;" onclick="to_work();" class="menu-item" data-toggle="modal" data-target="#to_do">TO DO</a></li>
                            <li><i class="menu-icon fa ti-user"></i><a data-toggle="modal" data-target="#assignwork">Assign Work</a></li>
                            <li><i class="menu-icon fa fa-folder"></i><a style="color:white;" onclick="assigned_work();" class="menu-item" data-toggle="modal" data-target="#assigned_work">Assigned Work</a></li>
                        </ul>
                      </li>

                      <div class="modal fade" id="to_do" role="dialog">
                      <div class="modal-dialog">

                       <!-- Modal content-->
                       <div class="modal-content">
                         <div class="modal-header">

                           <p align=left><font color="blue" size=+1>ToDo Work</font></p>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
                         <div class="modal-body">
                           <div class="alert  alert-success alert-dismissible fade show" role="alert" id="Work_submitted_alert" style="display:none;">
                               <span class="badge badge-pill badge-success">Success</span> Work submitted !
                               <button type="button" class="close" onclick="document.getElementById('Work_submitted_alert').style.display='none';" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                      <table class="table">
                      <th>Work</th><th style="float:right;"></th></table>
                      <table id="todo_work_table" class="table">

                      </table>
                        <br>
                      </div>
                      </div>
                      </div>
                      </div>
                      <div class="modal fade" id="assignwork" role="dialog">
                      <div class="modal-dialog">

                       <!-- Modal content-->
                       <div class="modal-content">
                         <div class="modal-header">
                           <p align=left><font color="blue" size=+1>Assign Work</font></p>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
                         <div class="modal-body">
                           <div class="alert  alert-success alert-dismissible fade show" role="alert" id="Work_Assigned_alert" style="display:none;">
                               <span class="badge badge-pill badge-success">Success</span> Work Assigned !
                               <button type="button" class="close" onclick="document.getElementById('Work_Assigned_alert').style.display='none';" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="alert  alert-danger alert-dismissible fade show" role="alert" id="Work_Nousers" style="display:none;">
                               <span class="badge badge-pill badge-danger">Not found</span> No users found !
                               <button type="button" class="close" onclick="document.getElementById('Work_Nousers').style.display='none';" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="alert  alert-danger alert-dismissible fade show" role="alert" id="Work_fill" style="display:none;">
                               <span class="badge badge-pill badge-danger">Fill</span> Please fill all the fields !
                               <button type="button" class="close" onclick="document.getElementById('Work_fill').style.display='none';" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                             <input type="button" id="search" class="btn btn-success" style="padding:5px;width: 100%;float:right;" value="Submit Work" onclick="assign();">
                      <br><br>
                           <form>
                        <div class="input-group">
                          <input id="work_title" type="text" class="form-control" name="email" placeholder="Work title">
                        </div><br>
                        <div class="input-group">
                          <input id="work_desc" type="text" class="form-control" name="email" style="height:200px;" placeholder="Work description">
                        </div><br>
                        <div class="input-group">
                          <input id="emails" type="email" class="form-control" name="password" placeholder="Enter emails of volunteers">
                            <input type="button" id="search" class="btn btn-success" style="padding:5px;width: 25%;float:right;" value="Add" onclick="add_workers(document.getElementById('emails').value)">
                        </div>
                        <br>

                      </form>
                      <br>
                      <br>

                      <table id="assign_work" class="table">
                      <tr>
                      <th>Name</th><th>Role</th><th>Phone</th>
                      </tr>
                      </table>
                        <br>
                      </div>
                      </div>
                      </div>
                      </div>

                      <div class="modal fade" id="assigned_work" role="dialog">
                      <div class="modal-dialog">

                       <!-- Modal content-->
                       <div class="modal-content">
                         <div class="modal-header">
                           <p align=left><font color="blue" size=+1>Assigned Work</font></p>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
                         <div class="modal-body">

                      <table class="table">
                      <th>Work title</th><th style="float:right;">Work description</th></table>
                      <table id="assigned_work_table" class="table">
                      </table>
                        <br>
                      </div>
                      </div>
                      </div>
                      </div>

                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-leaf"></i>Counselling</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-face-sad"></i><a data-toggle="modal" data-target="#counselling" onclick="checkcoun();">Take Counselling</a></li>
                            <li><i class="menu-icon fa fa-comments-o"></i><a data-toggle="modal" data-target="#docounselling" onclick="docoun();"> Do Counselling</a></li>
                        </ul>
                    </li>
                    <div class="modal fade" id="counselling" role="dialog">
                    <div class="modal-dialog">

                     <!-- Modal content-->
                     <div class="modal-content">
                       <div class="modal-header">
                         <p align=left><font color="blue" size=+1>Apply for Counselling</font></p>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                       </div>
                       <div class="modal-body">
                         <div class="alert  alert-success alert-dismissible fade show" role="alert" id="cform_submitted_alert" style="display:none;">
                             <span class="badge badge-pill badge-success">Success</span> Form submitted !
                             <button type="button" class="close" onclick="document.getElementById('cform_submitted_alert').style.display='none';" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                           <input type="button" id="counsellingsubmit" class="btn btn-success" style="padding:5px;width: 100%;float:right;" value="Submit Form" onclick="counsellingform();">
                    <br><br>
                         <form>
                      <div class="input-group">
                        <input id="counssub" type="text" class="form-control" name="email" placeholder="Subject">
                      </div><br>
                      <div class="input-group">
                        <input id="counsdesc" type="text" class="form-control" name="email" style="height:200px;" placeholder="Description">
                      </div><br>
                      <br>

                    </form>

                      <br>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="modal fade" id="docounselling" role="dialog">
                    <div class="modal-dialog">

                     <!-- Modal content-->
                     <div class="modal-content">
                       <div class="modal-header">
                         <p align=left><font color="blue" size=+1>Do Counselling</font></p>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                       </div>
                       <div class="modal-body">
                           <br><br>

                    <table id="docounsellingtable" class="table">
                    <tr>
                    <th>Users</th><th>details</th><th></th>
                    </tr>
                    </table>
                      <br>
                    </div>
                    </div>
                    </div>
                    </div>
                    <h3 class="menu-title">Education</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a data-toggle="modal" data-target="#courses" onclick="loadDoc();"> <i class="menu-icon fa fa-desktop"></i>Online Course </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <div class="modal fade" id="courses" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="card-header">
           <strong class="card-title">Basic Table</strong>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
    <div class="form-group">
      <input type="search" id="key" class="form-control" style="margin: 10px;" placeholder="Search for courses">
      <input type="button" id="search" class="btn btn-success" style="padding:5px;width: 25%;float:right;" value="Search" onclick="loadDoc();">

<br><br>

<table id="course_table" class="table">

</table>
      <br>
</div>
</div>
</div>
</div>
</div>


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                      <div class="page-title" style="float:left;">
                          <img src="https://images.squarespace-cdn.com/content/v1/5db89dca630c75580c7f4932/1575044822385-8TRPS51L6O5J2NWYCJ4H/ke17ZwdGBToddI8pDm48kAy9ij7NhvrgfrXDj12tieFZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7YIE3ZwwVlGd312yABb759EDDsZWIv4M_yy9fsfZKowcH08FZ-5-P-Aipy2pR0buMw/Bactivax+Advocacy+icon.png" style="margin-top:15px;" width="50px">
                          <h5 style="color:#3378A1;margin-left: 5px;margin-top:13%;float:right;">COVID-19 RELIEF</h5>
                      </div>

                    </div>
              </div>


                <div class="col-sm-5">

                    <div class="user-area dropdown float-right">

<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="https://localvoicesliberia.com/wp-content/uploads/2020/03/user-alt-512.png" alt="User Avatar">
</a>

                        <div class="user-menu dropdown-menu">
                            <a class="dropdown-toggle"  data-toggle="modal" data-target="#profile"  id="profile_menu" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user"></i>Profile</a><br>
                          <a class="nav-link" href="login.html" id="signin"><i class="fa fa-user"></i>Sign In</a>
                          <a class="nav-link" href="register.html" id="signup"><i class="fa fa-user"></i> Sign Up</a>

                            <a class="nav-link" onclick="logout_user();" id="logout"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="modal" data-target="#languages"  id="language" aria-haspopup="true" aria-expanded="true">
                            <img src="https://cdn1.iconfinder.com/data/icons/material-core/20/language-512.png" width="25px">
                        </a>
                        <div class="modal fade" id="languages" role="dialog">
                       <div class="modal-dialog">

                         <!-- Modal content-->
                         <div class="modal-content">
                           <div class="modal-header">
                             <p align=left><font color="blue" size=+1>Select languages</font></p>
                             <button type="button" class="close" data-dismiss="modal">&times;</button>

                           </div>
                           <div class="modal-body">
                         <a href="https://translate.google.com/translate?hl=&sl=&tl=en&u=covid19relief.000webhostapp.com">
                             <div class="card" style="padding:10px;">
                            <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                               <div class="container">
                                 <p>English</p>
                                       </div>
                             </div></a>
                             <a href="https://translate.google.com/translate?hl=&sl=&tl=hi&u=covid19relief.000webhostapp.com">
                                 <div class="card" style="padding:10px;">
                                <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                   <div class="container">
                                     <p>Hindi</p>
                                           </div>
                                 </div></a>
                                 <a href="https://translate.google.com/translate?hl=&sl=&tl=ta&u=covid19relief.000webhostapp.com">
                                     <div class="card" style="padding:10px;">
                                    <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                       <div class="container">
                                         <p>Tamil</p>
                                               </div>
                                     </div></a>
                                     <a href="https://translate.google.com/translate?hl=&sl=&tl=te&u=covid19relief.000webhostapp.com">
                                         <div class="card" style="padding:10px;">
                                        <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                           <div class="container">
                                             <p>Telugu</p>
                                                   </div>
                                         </div></a>
                                         <a href="https://translate.google.com/translate?hl=&sl=&tl=kn&u=covid19relief.000webhostapp.com">
                                             <div class="card" style="padding:10px;">
                                            <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                               <div class="container">
                                                 <p>Kannada</p>
                                                       </div>
                                             </div></a>
                                             <a href="https://translate.google.com/translate?hl=&sl=&tl=ml&u=covid19relief.000webhostapp.com">
                                                 <div class="card" style="padding:10px;">
                                                <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                                   <div class="container">
                                                     <p>Malayalam</p>
                                                           </div>
                                                 </div></a>
                                                 <a href="https://translate.google.com/translate?hl=&sl=&tl=pa&u=covid19relief.000webhostapp.com">
                                                     <div class="card" style="padding:10px;">
                                                    <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                                       <div class="container">
                                                         <p>Punjabi</p>
                                                               </div>
                                                     </div></a>
                                                     <a href="https://translate.google.com/translate?hl=&sl=&tl=bn&u=covid19relief.000webhostapp.com">
                                                         <div class="card" style="padding:10px;">
                                                        <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                                           <div class="container">
                                                             <p>Bengali</p>
                                                                   </div>
                                                         </div></a>
                                                         <a href="https://translate.google.com/translate?hl=&sl=&tl=gu&u=covid19relief.000webhostapp.com">
                                                             <div class="card" style="padding:10px;">
                                                            <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                                               <div class="container">
                                                                 <p>Gujarati</p>
                                                                       </div>
                                                             </div></a>
                                                             <a href="https://translate.google.com/translate?hl=&sl=&tl=mr&u=covid19relief.000webhostapp.com">
                                                                 <div class="card" style="padding:10px;">
                                                                <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                                                   <div class="container">
                                                                     <p>Marati</p>
                                                                           </div>
                                                                 </div></a>
                                                                 <a href="https://translate.google.com/translate?hl=&sl=&tl=or&u=covid19relief.000webhostapp.com">
                                                                     <div class="card" style="padding:10px;">
                                                                    <img src="https://www.chrmbook.com/wp-content/uploads/Google_Translate_Icon.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);">
                                                                       <div class="container">
                                                                         <p>Oriya</p>
                                                                               </div>
                                                                     </div></a>

                          <br>
                      </div>  </div>  </div>  </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->


        <div class="content mt-3">
<a onclick=" var win = window.open('counselling.html', '_blank');win.focus();" >
  <div class="col-sm-12" onclick="removenotify();" style="display:none;" id="chat">
      <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <p id="coun_chat"> </p>
      </div>
  </div></a>


    <div class="col-sm-12" onclick="removenotify();" style="display:none;" id="notificatio_alert">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <a data-toggle="modal" data-target="#notification" onclick="notices();">
          <span class="badge badge-pill badge-success">Notification</span> You have some notifications.
        </a>    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <div class="col-sm-12" id="help_needed" style="display:none;">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
    <a style="color:white;" data-toggle="modal" data-target="#modal_reply">
                <p id="help_needed_text"> </p></a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <div class="col-sm-12" id="alarm_goesof" style="display:none;">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <p id="alarm_text"> </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
            <div class="col-sm-12" id="registeration_success" style="display:none;">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> Your account is created.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-12" id="login_failed" style="display:none;">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Login</span> Please login to use all features.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-12" id="location_permission" style="display:none;">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Permission</span> Location permission is needed to use all features.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>




<a href="#" data-toggle="modal" data-target="#first_responder" class="main-button" onclick="if(window.localStorage.getItem('email')==null){document.getElementById('stop_scanning').innerHTML='Sign in to use this feature';return false;}if(confirm('Are you sure you want to alert nearby users?')){first_responder();document.getElementById('stop_scanning').innerHTML='Stop Scanning';document.getElementById('scanning_img').style.display='block';return true;}else{document.getElementById('stop_scanning').innerHTML='Scanning Stopped';document.getElementById('scanning_img').style.display='none';return false;};">
            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin"><div style="background-color:#80A2FF;padding:10px;">
                    <img src="https://vectorified.com/images/first-responder-icon-24.png" style="margin-top:7px;width:160px;"></div>
                    <ul>
                        <li>
                          <span class="count">100</span> +
                            <span>First</span>
                        </li>
                        <li>
                            <span>Responder</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div></a>
            <!--/.col-->
            <div class="modal fade" id="first_responder" role="dialog">
           <div class="modal-dialog">

             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <p align=left><font color="blue" size=+1>First responder:</font></p>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                 <div class="card" id="first_response">
                   <button type="button" id="stop_scanning" class="form-control" style="font-size: 14px;
                   width: 100%;
                  margin-bottom: 20px;
                  background-color: #F8F8F8;
                  color: #000;">
                  Stop Scanning</button>

                 <img id="scanning_img" src="https://thumbs.gfycat.com/MatureShamefulFoxterrier-size_restricted.gif" alt="Avatar" width=100%>
                   <div class="container">
                     <p id="radius"></p>
                     <font size=+2 color="black"></font>

                   </div>
                 </div>
                   <button class="form-control" id="calldisconnect" style="display:none;">Disconnect</button>
          <button class="form-control" id="call" style="display:none;">click to call</button>
                  <div id="response_map" style="width:100%;height:400px;display:block;">

                  </div>
               </div>

             </div>

           </div>
         </div>


<a style="color:white;"class="main-button" data-toggle="modal" data-target="#myModal">
            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus"><div style="background-color:#A3A3A3;padding:10px;">
                    <img src="https://img.icons8.com/bubbles/2x/headset.png" style="margin-top:7px;width:100px;"></div>
                    <ul>
                        <li>
                            <span class="count">24</span> / 7

                        </li>
                        <li>
                          <span>Helpline</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div></a>

            <div class="col-lg-3 col-md-6" onclick="epass();">
                <div class="social-box twitter"><div style="background-color:#E8BDFF;padding:10px;">
                    <img style="margin-top:7px;" src="https://img.icons8.com/bubbles/2x/bus.png" width="100px"></div>
                    <ul>
                        <li>
                    <span>Epass</span>
                        </li>
                        <li>
                            <span id="epass_state" style="white-space: nowrap ;"></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-6" style="white-space: nowrap;" onclick="donate();">
                <div class="social-box twitter"><div style="background-color:#98EABB;padding:10px;">
                    <img style="margin-top:7px;" src="https://images.squarespace-cdn.com/content/v1/576740f45016e10f9510a056/1470444621013-TT1D00FYRD8BM5U66HJ4/ke17ZwdGBToddI8pDm48kGfiFqkITS6axXxhYYUCnlRZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpxQ1ibo-zdhORxWnJtmNCajDe36aQmu-4Z4SFOss0oowgxUaachD66r8Ra2gwuBSqM/image-asset.png" width="100px"></div>
                    <ul>
                        <li>
                            <span>Donate</span>
                        </li>
                        <li>
                            <span id="donate_state"></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->
            <div class="modal fade" id="myModal" role="dialog">
           <div class="modal-dialog">

             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <p align=left><font color="blue" size=+1>States helpline number:</font></p>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
        <?php
         $state=array("andhrapradesh",                "arunachalpradesh",                "assam",                "Bihar",                "Chhattisgarh",                "Goa",                "Gujarat",                "Haryana",                "Himachalpradesh",                "Jharkhand",                "Karnataka",                "Kerala",                "Madhyapradesh",                "Maharashtra",                "Manipur",                "Meghalaya",                "Mizoram",               "Nagaland",                "Odisha",                "Punjab",                "Rajasthan",                "Sikkim",                "Tamilnadu",                "Telangana",                "Tripura",                "Uttarpradesh",                "Uttarakhand",                "Westbengal",                "AndamanandNicobarIsland",                "Chandigarh",                "DadraNagarHaveliDamanandDiu",                "Delhi",                "JammuandKashmir",                "Ladakh",                "Lakshadweep",                "Puducherry");
         $number=array("0866-2410978",                "104",                "0612-2217681",                "104",                "0771-282113",                "104",                "079-23251900",                "0172-2545938",                "104",                "104",                "080-46848600 ",                "0471-2552056",                "0755-2411180",                "022-22024535",                "1800-345-3818",                "108",                "102",                "0370-2291122",                "0674-2534177",                "104",                "0141-2225000",                "104",                "044-29510500",                "104",                "0381-2315879",                "0522-2237515",                "104",                "1800-313-444222",                "03192-232102",                "0172-2752038",                "104",                "011-22307145",                "0191-2549676",                "01982-256462",                "104",                "104");

         $i=0;
         while($i<count($state)){
         ?>
                 <div class="card">
                <a href="tel:<?php  echo $number[$i];?>">   <img src="assets/images/phone.png" alt="Avatar" width="30px" height="30px" style="  margin: 0;  position: absolute;  top: 60%;  left: 90%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);"></a>
                   <div class="container">
                     <p><?php  echo $state[$i];?></p>
                     <font size=+2 color="black"><?php  echo $number[$i];?></font>

                   </div>
                 </div>
        <?php
        $i++;
        }
          ?>
               </div>

             </div>

           </div>
         </div>
            <!--/.col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body" id="cases_chart_1">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0">Cases Report</h4>
                                <div class="small text-muted" id="casesreport"></div>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-8 hidden-sm-down">
                              <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">

                                                                      <label class="btn btn-outline-secondary" id="cactive">
                                                                          <input type="radio" name="options"  onclick="cases('active');document.getElementById('cactive').classList.add('active');document.getElementById('cconfirmed').classList.remove('active');document.getElementById('cdeath').classList.remove('active');"> Active
                                                                      </label>
                                                                      <label class="btn btn-outline-secondary active" id="cconfirmed">
                                                                          <input type="radio" name="options"  onclick="cases('confirmed');document.getElementById('cconfirmed').classList.add('active');document.getElementById('cactive').classList.remove('active');document.getElementById('cdeath').classList.remove('active');"  checked=""> Confirm
                                                                      </label>
                                                                      <label class="btn btn-outline-secondary" id="cdeath">
                                                                          <input type="radio" name="options"  onclick="cases('deaths');document.getElementById('cdeath').classList.add('active');document.getElementById('cactive').classList.remove('active');document.getElementById('cconfirmed').classList.remove('active');"> Death
                                                                      </label>


                              </div>
                                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">

                                </div>
                            <button onclick="document.getElementById('cases_chart_1').style.display='none';document.getElementById('cases_chart_2').style.display='block';" title="View More" style="border:none;background:none;background-color: #00000000;float:right;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSWfg6DcH6WdSdKdGJFerDQEwg_O2-Ee3qlJQ&usqp=CAU" width="20px"></button>
                            </div>
                            <!--/.col-->


                        </div>
                        <!--/.row-->
                        <div class="chart-wrapper mt-4">
                            <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                        </div>

                    </div>
                    <div class="card-body" id="cases_chart_2" style="display:none;">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0">
                                  <div class="form-group">
                                    <select class="form-control" id="st" onchange="cases1(document.getElementById('st').value,'Confirmed');document.getElementById('cconfirmed11').checked=true;document.getElementById('cconfirmed1').classList.add('active');document.getElementById('cactive1').classList.remove('active');document.getElementById('cdeath1').classList.remove('active');">
                                      <option value="ap" selected>Andhra Pradesh</option>
                                      <option value="ar">Arunachal Pradesh</option>
                                      <option value="as">Assam</option>
                                      <option value="br">Bihar</option>
                                      <option value="ch">Chhattisgarh</option>
                                      <option value="gj">Gujarat</option>
                                      <option value="ga">Goa</option>
                                      <option value="hr">Haryana</option>
                                      <option value="hp">Himachal Pradesh</option>
                                      <option value="ka">Karnataka</option>
                                      <option value="jh">Jharkhand</option>
                                      <option value="kl">Kerala</option>
                                      <option value="mp">Madhya Pradesh</option>
                                      <option value="mh">Maharashtra</option>
                                      <option value="mn">Manipur</option>
                                      <option value="ml">Meghalaya</option>
                                      <option value="mz">Mizoram</option>
                                      <option value="nl">Nagaland</option>
                                      <option value="or">Odisha</option>
                                      <option value="pb">Punjab</option>
                                      <option value="rj">Rajasthan</option>
                                      <option value="sk">Sikkim</option>
                                      <option value="tn">Tamil Nadu</option>
                                      <option value="tg">Telangana</option>
                                      <option value="tr">Tripura</option>
                                      <option value="uk">Uttarakhand</option>
                                      <option value="up">Uttar Pradesh</option>
                                      <option value="wb">West Bengal</option>
                                      <option value="an">Andaman and Nicobar Islands</option>
                                      <option value="ch">Chandigarh</option>
                                      <option value="dh">Dadra and Nagar Haveli </option>
                                      <option value="dl">Delhi</option>
                                      <option value="jk">Jammu & Kashmir</option>
                                      <option value="la">Ladakh</option>
                                      <option value="ld">Lakshadweep</option>
                                      <option value="py">Puducherry</option>

                                    </select>
                                  </div>
                                </h4>
                                <div class="small text-muted" id="casesreport1"></div>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-8 hidden-sm-down">
                              <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                <label class="btn btn-outline-secondary" id="cactive1">
                                    <input type="radio" name="options"  onclick="cases1(document.getElementById('st').value,'Recovered');document.getElementById('cactive1').classList.add('active');document.getElementById('cconfirmed1').classList.remove('active');document.getElementById('cdeath1').classList.remove('active');"> Recovered
                                </label>
                                <label class="btn btn-outline-secondary active" id="cconfirmed1">
                                    <input type="radio" name="options" id="cconfirmed11"  onclick="cases1(document.getElementById('st').value,'Confirmed');document.getElementById('cconfirmed1').classList.add('active');document.getElementById('cactive1').classList.remove('active');document.getElementById('cdeath1').classList.remove('active');"  checked=""> Confirm
                                </label>
                                <label class="btn btn-outline-secondary" id="cdeath1">
                                    <input type="radio" name="options"  onclick="cases1(document.getElementById('st').value,'Deceased');document.getElementById('cdeath1').classList.add('active');document.getElementById('cactive1').classList.remove('active');document.getElementById('cconfirmed1').classList.remove('active');"> Death
                                </label>

                              </div>
                                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">

                                </div>
                            <button onclick="document.getElementById('cases_chart_2').style.display='none';document.getElementById('cases_chart_1').style.display='block';" title="View More" style="border:none;background:none;background-color: #00000000;float:right;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSWfg6DcH6WdSdKdGJFerDQEwg_O2-Ee3qlJQ&usqp=CAU" width="20px"></button>
                            </div>
                            <!--/.col-->


                        </div>
                        <!--/.row-->
                        <div class="chart-wrapper mt-4">
                            <canvas id="trafficChart1" style="height:200px;" height="200"></canvas>
                        </div>

                    </div>
                    <div class="card-footer">
                        <ul>
                            <li>
                                <div class="text-muted">Total</div>
                                <strong id="total_cases"></strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Active</div>
                                <strong id="active_cases"></strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" id="active_cases_percent" style="width: 200%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="text-muted">Death</div>
                                <strong id="death_cases"></strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-danger" id="death_cases_percent" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Today confirmed</div>
                                <strong id="today_confirmed"></strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 10%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Today Death</div>
                                <strong id="today_death"></strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

<div style="width:100%;">
  <div class="container" style="width:100%;" onclick="if(document.getElementById('labsmap').style.display=='none'){document.getElementById('labsmap').style.display='block';}else{document.getElementById('labsmap').style.display='none';}labsmap();">
<div class="card" style="width:100%;border-radius: 5px;background-color: #F2F8FF;">

<div class="card-body">
<img src="https://www.theheritageschoolddn.com/images/photos/services-details5.png" width="100px"><div style="float:right;"><h5 style="text-align: right;">Labs for test</h5><p>100+ Government | Private</p>
</div>
</div>
</div>
</div>
</div>
<div id="labsmap" style="margin:5px;width:100%;height:400px;display:none;background-color:black;"></div>

<div class="container" onclick="if(document.getElementById('healthcare').style.display=='none'){document.getElementById('healthcare').style.display='block';}else{document.getElementById('healthcare').style.display='none';}healthcaremap();">
<div class="card" style="width:100%;border-radius: 5px;background-color: #FCFFDC;">

<div class="card-body">
  <img src="https://carrolloccupationalhealth.com/wp-content/uploads/2016/10/ICON-Corp-Wellness-01.png" width="100px"><div style="float:right;"><h5 style="text-align: right;">Public Healthcares</h5><p>100+ Government | Private</p>

</div>
</div>
</div>
</div>
<!--/.col-->
<div id="healthcare" style="margin:5px;width:100%;height:400px;display:none;background-color:black;"></div>

<div style="width:100%;">
  <div class="container" style="width:100%;" onclick="window.open('https://www.pmcares.gov.in/en/web/contribution/donate_india', '_blank').focus();">
<div class="card" style="width:100%;border-radius: 5px;background-color: #FFFFFF;">

<div class="card-body">
<img src="https://www.businessupturn.com/wp-content/uploads/2020/06/kalaignarseithigal_2020-04_f64ce622-c4f3-4f31-b737-d3686d5988d9_vikatan_2020_03_9d3441d4_b8ad_42fa_b6ac_bf69a7ced2bc_pm_cares.jpg" width="200px"><div style="float:right;"><h5>DONATE VIA PM CARE</h5><p>Formation: 28 March 2020</p>
</div>
</div>
</div>
</div>
</div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <section class="card">
                  <center>
                    <img src="https://png.pngtree.com/png-vector/20200227/ourlarge/pngtree-people-symptoms-corona-virus-infographic-png-image_2153997.jpg" alt="John" style="width:100%">
                    <h3 id="assess_result"></h3>

                    <div style="margin: 24px 0;">
                      <i class="fa fa-dribbble"></i>
                      <i class="fa fa-twitter"></i>
                      <i class="fa fa-linkedin"></i>
                      <i class="fa fa-facebook"></i>
                    </div>
                    <p><input id="assess_radius" type="number" value="1000" onchange="assess_radius_change();" class="form-control t-text-area" style="width:80%">m radius</p>

                  </center>
                </section><br>
                <a onclick="selfassess('123');"  data-toggle="modal" data-target="#sendemail">
                <div style="padding: 10px;border-radius:5px;background-color:white;width: 100%" >
                        <center>
                          <h5 style="color:#8F8C8C;width: 100%">Send Email to ncov2019@gov.in</h5>
                </center>

            </div></a>

            <div class="modal fade" id="sendemail" role="dialog">
            <div class="modal-dialog">

             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <p align=left><font color="#C3BEBE">Send Email to ncov2019@gov.in</font></p>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
            <div class="container">

              <form>
                  <div class="form-group">
                    <input name="name" type="text" id="subject" placeholder="Subject" required=""
                        style="background-color: rgba(250,250,250,0.3);" class="form-control">
                      </div>
                      <div class="form-group">
                          <textarea name="message" class="form-control" rows="6" id="message" placeholder="Your Message"
                              required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                  </div>
                          </div>  <br>
                          <button type="button" onclick="enquiry();" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>

              </form>
            </div></div></div></div>
</div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><img src="https://img.icons8.com/cotton/2x/inspection.png" width="70px"></div>
                            <div class="stat-content dib">

                                <div class="stat-text">Total Assessed</div>
                                <div class="stat-digit"  id="total_assessed"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRP6EuBqNj2RRA1ZFX_P1uNTtvPiXX2-JsQvw&usqp=CAU" width="70px"></div>
                            <div class="stat-content dib">
                                <div class="stat-text" >Found Victim </div>
                                <div class="stat-digit"  id="total_victim"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
<a onclick="selfassess('123');"  data-toggle="modal" data-target="#selfassess">
          <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><img src="https://cdn.pixabay.com/photo/2017/05/15/23/48/survey-2316468_1280.png" width="50px"></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Take</div>
                                <h4>Assessment</h4>
                            </div>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter"><div style="background-color:#FFFBC3;padding:10px;">
                    <img style="margin-top:7px;" src="https://www.pngmart.com/files/10/FAQ-Transparent-Background.png" width="250px"></div>
                    <ul>
                        <li>
                    <span onclick=" var win = window.open('https://drive.google.com/file/d/1GPoaMCIwbUdd3XDCzHnY_HiP7p2dVJ4x/view?usp=sharing', '_blank'); win.focus();">English</span>
                        </li>
                        <li>
                            <span onclick=" var win = window.open('https://drive.google.com/file/d/1A0mY4oMMoSMY5IeuhtKTWVvTkkdOy7lf/view?usp=sharing', '_blank'); win.focus();">Hindi</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="modal fade" id="selfassess" role="dialog">
            <div class="modal-dialog">

             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <p align=left><font color="#C3BEBE">COVID-19 self-assessment</font></p>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
            <div class="container">
              <form action="/action_page.php">
                <br>
                <div class="form-group">
                  <textarea id="question" oninput="auto_grow(this)" class="form-control" name="w3review" rows="15" cols="50" style="height: 100%;align-content:center; overflow:auto;"></textarea>
                </div>
                <div class="form-group">
                  <input type="button" id="yes" class="btn btn-danger" width=50% onclick="selfassess('yes');" value="Yes" style="width: 48%;float:left;margin-right:5px;"></button>
                  <input type="button" id="no" class="btn btn-success" onclick="selfassess('no');" style="width: 48%;" value="No"></button>
                </div>
              </form>
            </div></div></div></div></div>

            <div class="col-xl-6">
<br><br>
                <div class="card">
                    <div class="card-header">
                        <h4>Mapping Or Tracking</h4>
                    </div>
                    <select id="role_map"  onchange="map_filter()" name="cars" class="form-control" style="margin-right:10px;display:none;">
                      <option value="select">Select Role to filter</option>
                      <option value="monitors">monitors</option>
                      <option value="volunteers">volunteers</option>
                      <option value="labour">labour</option>
                      <option value="healthworker">healthworker</option>
                      <option value="counsellor">counsellor</option>
                      <option value="stranded_migrant">stranded_migrant</option>
                      <option value="workers">workers</option>
                      <option value="orphan">orphan</option>
                      <option value="general">general</option>
                    </select>
                    <div id="googleMap" style="width:100%;height:400px;display:block;"></div>

                </div>

            </div><br>
            <br>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count" id="monline"></span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count" id="tdvisits"></span>
                        </h4>
                        <p class="text-light">Today visits</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count" id="tvisits"></span>
                        </h4>
                        <p class="text-light">Total visits</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count" id="rtotal"></span>
                        </h4>
                        <p class="text-light">Total Registered</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

              </div>

        </div> <!-- .content -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <audio id="myAudio">
      <source src="assets/images/alarm.mp3" type="audio/ogg">
      <source src="horse.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>

    <div class="modal fade" id="modal_reply" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <p align=left><font color="blue" size=+1>First responder:</font></p>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">

           <button class="form-control" id="calldisconnectreply" style="display:none;">Disconnect</button>
  <button class="form-control" id="callreply" style="display:none;">click to call</button>
          <div id="response_map_reply" style="width:100%;height:400px;display:block;">

          </div>
       </div>

     </div>

   </div>
 </div>


    <div class="modal fade" id="first_responder" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <p align=left><font color="blue" size=+1>First responder:</font></p>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
         <div class="card" id="first_response">
           <button type="button" id="stop_scanning" class="form-control" style="font-size: 14px;
           width: 100%;
          margin-bottom: 20px;
          background-color: #F8F8F8;
          color: #000;">
          Stop Scanning</button>

         <img src="https://thumbs.gfycat.com/MatureShamefulFoxterrier-size_restricted.gif" alt="Avatar" width=100%>
           <div class="container">
             <p id="radius"></p>
             <font size=+2 color="black"></font>

           </div>
         </div>
           <button class="form-control" id="calldisconnect" style="display:none;">Disconnect</button>
  <button class="form-control" id="call" style="display:none;">click to call</button>
          <div id="response_map" style="width:100%;height:400px;display:block;">

          </div>
       </div>

     </div>

   </div>
 </div>

 <div class="modal fade" id="sector" role="dialog">
 <div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <p align=left><font color="blue" size=+1>Unorganised Sector workers</font></p>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="seectorar_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Item added Successfully !
          <button type="button" class="close" onclick="document.getElementById('seectorar_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="sectorrr_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Request removed !
          <button type="button" class="close" onclick="document.getElementById('sectorrr_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <font color="#555555">Relief for migrants! Indian Railways’ Shramik Special trains to run with full capacity; have up to 3 stoppages</font>
 <br>
   <a href="https://enquiry.indianrail.gov.in/mntes/q?opt=TrainRunning&subOpt=splTrnDtl" class="main-button-slider" style="position: absolute; right: 0;margin:5px;"> Special Trains</a><br>
     <br><br><b>  <font color="#555555">Request/Supply Relief materias for migrants</font></b>
      <form>
        <div id="sectormap" style="width:100%;height:400px;display:block;"></div>
        <br>

   <div class="input-group" id="addsectormaterial">
     <input id="sectoritem" type="text" class="form-control" name="password" placeholder="Enter item name">
       <input type="button" id="search" class="btn btn-success" style="padding:5px;width: 25%;float:right;" value="Add" onclick="add_sectormaterial(document.getElementById('sectoritem').value);">
   </div><br><br>
   <div class="input-group" id="inrequest" >
      <p><font size=+1>Requests</font></p><br>
   </div>
 </form>
 <table id="sectortable" class="table">
 <tr>
 </tr>
 </table>
   <br>
 </div>
 </div>
 </div>
 </div>

 <div class="modal fade" id="orphan" role="dialog">
 <div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <p align=left><font color="blue" size=+1>Orphan and Vulnerable</font></p>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">

      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="orphanar_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Item added Successfully !
          <button type="button" class="close" onclick="document.getElementById('orphanar_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="orphanrr_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Request removed !
          <button type="button" class="close" onclick="document.getElementById('orphanrr_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>

   <b>   <font color="#333333" size=+1>COVID-19: vulnerable and high risk groups</font><br></b>
      <font color="#555555">COVID-19 is often more severe in people who are older than 60 years or who have health conditions like lung or heart disease, diabetes or conditions that affect their immune system. If you’re at high risk, know what to do, and take the right actions now to protect yourself.​ If you’re not at high risk, do your part to prevent the spread of coronavirus to those who are.</font>
 <br>
 <a href="https://drive.google.com/file/d/1OyzDh6IXDVn4DIpcVwL3SnhAy2y6fHYx/view?usp=sharing"><p style="float:right;">View more</p></a>
      <form>
        <br><b>  <font color="#555555">Request/Supply Relief materias for Orphans</font></b>
        <div id="orphanmap" style="width:100%;height:400px;display:block;"></div>
        <br>

   <div class="input-group" id="addorphanmaterial">
     <input id="materialname2" type="text" class="form-control" name="password" placeholder="Enter item name">
       <input type="button" id="search" class="btn btn-success" style="padding:5px;width: 25%;float:right;" value="Add" onclick="add_orphanmaterial(document.getElementById('materialname2').value)">
   </div><br><br>
   <div class="input-group" id="inrequest" >
      <p><font size=+1>Requests</font></p><br>
   </div>
 </form>
 <table id="orphantable" class="table">
 <tr>
 </tr>
 </table>
   <br>
 </div>
 </div>
 </div>
 </div>

 <div class="modal fade" id="collectmaterial" role="dialog">
 <div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <p align=left><font color="blue" size=+1>Material Collection</font></p>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="materialar_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Material added Successfully !
          <button type="button" class="close" onclick="document.getElementById('materialar_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="supplyrr_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Supply stopped !
          <button type="button" class="close" onclick="document.getElementById('supplyrr_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form>
     <b>  <font color="#555555">Collect/Supply Relief materials</font></b>
        <div id="materialmap" style="width:100%;height:400px;display:block;"></div>
        <br>

   <div class="input-group" id="addmaterial">
     <input id="materialname" type="text" class="form-control" name="password" placeholder="Enter material name">
       <input type="button" id="search" class="btn btn-success" style="padding:5px;width: 25%;float:right;" value="Add" onclick="add_material(document.getElementById('materialname').value)">
   </div><br><br>
   <div class="input-group" id="insupply">
      <p><font size=+1>In Supply</font></p><br>
   </div>
 </form>
 <table id="materialtable" class="table">
 <tr>
 <th>Materials</th><th></th>
 </tr>
 </table>
   <br>
 </div>
 </div>
 </div>
 </div>

 <div class="modal fade" id="food" role="dialog">
 <div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <p align=left><font color="blue" size=+1>Isolation food supply</font></p>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="foodar_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Item added Successfully !
          <button type="button" class="close" onclick="document.getElementById('foodar_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="foodrr_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Request removed !
          <button type="button" class="close" onclick="document.getElementById('foodrr_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
     <b> <font color="#555555">Revised guidelines for Home Isolation of very mild/pre-symptomatic COVID-19 cases</font></b>
    <br>
    <a href="https://www.mohfw.gov.in/pdf/RevisedguidelinesforHomeIsolationofverymildpresymptomaticCOVID19cases10May2020.pdf"><p style="float:right;">View more</p></a>
 <br><br>      <b> <font color="#333333">Home Isolation of very mild/pre-symptomatic COVID-19 cases</font></b>
 <font color="#555555"> You must self-isolate if you or anyone else in your household have coronavirus symptoms:
  a temperature of more than 37.8C (100F) 
  OR, a new and persistent cough - this means coughing a lot for more than an hour, or 3 or more coughing episodes in 24 hours (if you usually have a cough, it may be worse than usual)
  OR, anosmia – this is the loss of or a change in your normal sense of smell. It can also affect your sense of taste as the two are closely linked</font>
      <form>
        <br><b>  <font color="#555555">Request/Supply Food materials</font></b>
        <div id="foodmap" style="width:100%;height:400px;display:block;"></div>
        <br>

   <div class="input-group" id="addfoodmaterial">
     <input id="materialname1" type="text" class="form-control" name="password" placeholder="Enter item name">
       <input type="button" id="search" class="btn btn-success" style="padding:5px;width: 25%;float:right;" value="Add" onclick="add_foodmaterial(document.getElementById('materialname1').value)">
   </div><br><br>
   <div class="input-group" id="inrequest">
      <p><font size=+1>Requests</font></p><br>
   </div>
 </form>
 <table id="foodtable" class="table">
 <tr>
 </tr>
 </table>
   <br>
 </div>
 </div>
 </div>
 </div>

 <!-- ***** Testimonials Ends ***** -->
 <div class="modal fade" id="alarmdialog" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <p align=left><font color="blue" size=+1>Alarm Manager</font></p>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="alarmrr_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Alarm removed !
          <button type="button" class="close" onclick="document.getElementById('alarmrr_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="alert  alert-success alert-dismissible fade show" role="alert" id="alarmar_alert" style="display:none;">
          <span class="badge badge-pill badge-success">Success</span> Alarm created !
          <button type="button" class="close" onclick="document.getElementById('alarmar_alert').style.display='none';" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
 <div class="form-group">
   <input type="text" id="alarmname" class="form-control"  placeholder="Alarm Name"  style="margin: 10px;">

   <input type="time" id="time" class="form-control"  style="margin-left: 10px;width: 65%;float:left;margin-right:5px;"></button>
   <input type="button"  class="btn btn-success" onclick="setalarm();" style="padding:5px;width: 25%;" value="Set Alarm"></button>
<br><br>

   <table id="myTable" class="table">
   </table>
   <br>
</div>
</div>
</div>
</div>


 </div>

<div class="modal fade" id="notification" role="dialog">
<div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
   <div class="modal-header">
     <p align=left><font color="blue" size=+1>Notifications</font></p>
     <button type="button" class="close" data-dismiss="modal">&times;</button>

   </div>
   <div class="modal-body">
  <table id="myTable1" class="table">
    <tr>
      <button type="button" data-dismiss="modal" onclick="clear_notification(document.getElementById('notification'));" class="form-control" style="font-size: 14px;
      width: 100%;
     margin-bottom: 20px;
     background-color: #F8F8F8;
     color: #000;">
     Clear notifications</button>
    </tr>
  </table>
  <br>
</div>  </div>  </div>  </div>

<div class="modal fade" id="profile" role="dialog">
<div class="modal-dialog">

 <!-- Modal content-->
     <div class="col-xl-3 col-lg-6"  style="width:500px;">
         <section class="card" style="width:500px;">
             <div class="twt-feed blue-bg" style="width:100%;">
                 <div class="corner-ribon black-ribon">
                     <i class="fa fa-twitter"></i>
                 </div>
                 <div class="fa fa-twitter wtt-mark"></div>

                 <div class="media">
                     <a href="#">
                         <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="https://localvoicesliberia.com/wp-content/uploads/2020/03/user-alt-512.png">
                     </a>
                     <div class="media-body">
                         <h2 class="text-white display-6" id="pro_name"></h2>
                         <p class="text-light" id="pro_role"></p>
                     </div>
                 </div>
             </div>
             <div class="login-form">
               <form>
                 <h6 align="left" id="otp" ><font color="red"></h6><br>
                   <div class="form-group">
                       <label>Full Name</label>
                       <input type="text" disabled class="form-control" id="name" placeholder="Full Name">
                   </div>
                       <div class="form-group">
                           <label>Email address</label>
                           <input type="email" disabled id="email" class="form-control" placeholder="Email">
                   </div>

                   <div class="form-group">
                       <label>Mobile</label>
                       <input type="number" disabled class="form-control" id="mobile" placeholder="Mobile">
           </div>
           <div class="form-group">
               <label>Role</label>
               <input type="text" disabled class="form-control" id="role" placeholder="Role">
   </div>
   <div class="form-group">
       <label>State</label>
       <input type="text" disabled class="form-control" id="state" placeholder="State">
</div>

               </form>
             </div>
         </section>
  </div>  </div>  </div>

       <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
     <script src="assets/js/functions.js"></script>

     <script src="vendors/jquery/dist/jquery.min.js"></script>
     <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
     <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="assets/js/main.js"></script>


     <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
     <script src="assets/js/dashboard.js"></script>
     <script src="assets/js/widgets.js"></script>
     <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
     <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
     <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyzwQZpKtxTMj8bwa7K2rKmj3uISYC61Q&callback=myMap"></script>

</body>

</html>
