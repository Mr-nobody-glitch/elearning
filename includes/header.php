<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


  <!-- ******************************************************************3nav******* -->


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style>
    /* *************** the second navbar ******************* ********************************/
    #search {
      background-image: url('assets/search.jpg');
      /* Add a search icon to input */
      background-position: 10px 12px;
      /* Position the search icon */
      background-repeat: no-repeat;
      /* Do not repeat the icon image */
      width: 21%;
      /* Full-width */
      font-size: 16px;
      /* Increase font-size */
      padding: 2px 0px 2px 4px;
      margin-top: 20px;
      /* Add some padding */
      border: 1px solid #ddd;
      /* Add a grey border */
      margin-bottom: 0px;
      /* Add some space below the input */
    }

    .navbar-header {
      width: 20%;

    }

    .navbar-brand {

      height: 60px;
    }

    #ela {
      margin-left: 15px;
    }

    /* ************************************************** */





    /* *************** the first navbar ******************* */

    .topnav {
      overflow: hidden;
      background-color: #015528;
      height: 37px;
    }

    .topnav a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 7px;
    }

    .topnav .login-container {
      float: right;
    }

    .topnav input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
      width: 120px;
      height: 22px;
    }

    .topnav .login-container button {
      float: right;
      padding-left: 16px;
      padding-right: 16px;
      margin-top: 8px;
      margin-right: 16px;
      margin-left: 8px;
      margin-bottom: 10px;
      border-radius: 8px;
      color: white;
      font-size: 15px;
      border: none;
      cursor: pointer;
    }

    .topnav .login-container button {
      background-color: #ef5350;
    }

    @media screen and (max-width: 600px) {
      .topnav .login-container {
        float: none;
      }

      .topnav a,
      .topnav input[type=text],
      .topnav .login-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }

    /* **************************************************************** */




    /* *********************************the third navbar********************* */
    .navbar3 {
      width: 100%;
      height: 44px;
      overflow: auto;
    }

    .navbar3 a {
      padding-top: 8px;
      float: left;
      padding-left: 12px;
      color: #655479;
      text-decoration: none;
      font-size: 17px;
    }

    @media screen and (max-width: 500px) {
      .navbar3 a {
        float: none;
        display: block;
      }
    }

    /* ******************************    DROP DOWN LIST   ********************************** */
    .dropbtn {
      padding-top: 8px;

      background-color: white;
      color: #655479;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: absolute;
      display: inline-block;
    }

    .dropdown-content {
      background-color: white;
      display: none;
      position: absolute;
      min-width: 250px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      font-size: 14px;
      color: #655479;
      padding: 9px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      color: black;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* *********************************************************************************** */
    .blog {
      padding-left: 20px;
      padding-top: 20px;
    }

    .fac {
      color: #639954;
      margin-top: 20px;
      margin-left: 25px;
      font-weight: 700;

    }

    .fac2 {
      color: #639954;
      margin-top: 10px;
      margin-left: 25px;
      font-weight: 700;

    }

    /* *********************************************************** */



    .myButton {
      width: 30%;
      flex: 1;
      margin: 0 5px;
      margin-top: 5px;
      margin-bottom: 10px;
      padding: 20px;
      background: #208642;
      display: flex;
      border-radius: 8px;
      font-weight: 600;
      display: inline-block;
      cursor: pointer;
      color: white;
      font-family: Arial;
      font-size: 15px;
      text-decoration: none;
    }

    .myButton:hover {
      color: white;
    }


    #icon {
      font-size: 22px;
      font-weight: 700;
    }




    .myButton1 {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 3px 5px 0 rgba(0,0,0,0.19);
      width: 180px;
      flex: 1;
      margin: 0 3px;
      margin-top: 5px;
      margin-left: 20px;
      height: 150px;
     padding-left: 20px;
      display: flex;
      border-radius: 8px;
      font-weight: 600;
      display: inline-block;
      cursor: pointer;
      color:  #208642;
      font-family: Arial;
      font-size: 13px;
      text-decoration: none;
    
    }
    .myButton1:hover {
      color:  #208642;
    }


    /* **************************** francais**************************** */
     #unit{
margin-left:10px;
      height:70%;
    } 
    #fr{
      padding-left: 30px;
    }

    #frr{
     
      height:70%;

    }
    /* ////////////////////////////////////////////////ENGLISH//////////// */
    #unite{

      height:70%;
    } 
#eng{
  padding-left: 30px;

}
/* ********************************************************************************* */



/* //////////////////////////////////////////////arab//////////////////////////// */
    
    #unitt{
      margin-left: 10px;
      margin-right: 20px;
      height:70%;
    } 
    #arab{
      padding-left: 20px;
    }
    /********************************************** */

    .youtube{
      margin-left: 40px;
      margin-top: 10px;
    
    }
    #you{
    color: #015528; 
    font-size: 14px;
    font-weight: 600;
    }




    .myButton3 {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 3px 5px 0 rgba(0,0,0,0.19);
      width: 180px;
      flex: 1;
      margin: 0 3px;
      margin-top: 5px;
      margin-left: 20px;
      height: 160px;
     padding-left: 20px;
      display: flex;
      border-radius: 8px;
      font-weight: 600;
      display: inline-block;
      cursor: pointer;
      color:  #208642;
      font-family: Arial;
      font-size: 12px;
      text-decoration: none;

    
    }
    .myButton3:hover {
      color:  #208642;
    }
    #unit3{
      margin-left: 10px;
      margin-right: 20px;
      height:60%;
    } 
    #unit33{
      margin-right: 20px;
      height:70%;
    } 




  </style>
</head>

<body>
  <!-- *********************************first navbar********************************** -->
  <div class="topnav">
    <div class="login-container">
      <form action="index.php">
        <input type="text" placeholder="Username" name="username" style=" border-radius: 4px;">
        <input type="text" placeholder="Password" name="psw" style="  border-radius: 4px;">
        <button type="submit">Log in</button>
      </form>
    </div>
  </div>
  <!-- *************************************************************************************************** -->
  <div style="background-color: white ; padding: 0.5px; "> </div>


  <!-- ******************* this is the second nav bar****************************** -->
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #208642">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index.php">
        <img src="assets/logo2.png" alt="" width="70" height="70"> </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <h4 class="nav-link active" id="ela" style="color: white;"> <strong> e-learning-Universite Constantine 2</strong></a>

      </ul>
      <!-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search.." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
      <input class="search" type="text" id="search" placeholder="Search For Cources..">
    </div>

  </nav>
  <!-- ***************************************************************************************** -->





  <!-- *********************************************third navbar************************************ -->
  <div class="navbar3">
    <a class="active" href="index.php" style="margin-right: 30px;"><i class="fa fa-fw fa-home"></i> Home</a>
    <!-- 
<a href="index.php "><i class="fa fa-wrench"></i>  Facultés et instituts</a>  -->
    <!-- dropdown-toggle -->
    <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-wrench" style="margin-right: 8px;"></i>Facultés et instituts</button>
      <div class="dropdown-content">
        <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=7"> <i class="fa fa-laptop" style="margin-right: 8px;"></i> Nouvelles technologies</a>
        <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=6"><i class="fa fa-book" style="margin-right: 8px;"></i>Bibliothéconomie</a>
        <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=11"><i class="fa fa-bar-chart" style="margin-right: 8px;"></i>Sciences économiques</a>
        <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=10"><i class="fa fa-group" style="margin-right: 8px;"></i>Sciences humaines et sociales</a>
        <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=13"><i class="fa fa-briefcase" style="margin-right: 8px;"></i>Psychologie</a>
        <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=12"><i class="fa fa-child" style="margin-right: 8px;"></i>Sciences des activités sportives</a>
      </div>
    </div>
  </div>
  <div style="background-color: #55a05a ; padding: 2px; "> </div>

  <div class="blog">
    <a href="index.php"> <img class="iconlarge activityicon" src="https://elearning.univ-constantine2.dz/elearning/theme/image.php/adaptable/forum/1614337844/icon"> </a>
    <a href="index.php" style="color: #639954;">Blog de l'Université Abdelhamid Mehri </span></a>
  </div>
  <h4 class="fac">Facultés et instituts</h4>


  <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=7" class="myButton" style="margin-left: 30px;"><i id="icon" class="fa fa-laptop" style="margin-right: 15px; "></i> Faculté des Nouvelles technologies</a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=6" class="myButton"><i id="icon" class="fa fa-book" style="margin-right: 15px;"></i> Institut de Bibliothéconomie</a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=11" class="myButton"><i id="icon" class="fa fa-bar-chart" style="margin-right: 15px;"></i>Faculté des Sciences économiques</a>


  <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=10" class="myButton" style="margin-left: 30px;"><i id="icon" class="fa fa-group" style="margin-right: 15px;"></i> Faculté des Sciences humaines et sociales</a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=13" class="myButton"><i id="icon" class="fa fa-briefcase" style="margin-right: 15px;"></i> Faculté de Psychologie </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=12" class="myButton"><i id="icon" class="fa fa-child" style="margin-right: 15px;"></i>Institut des Sciences des activités sportives</a>


  <h4 class="fac2">Unités transversales</h4>
  <!-- *************************************************************** -->

  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=3" class="myButton1" style="margin-left: 25px;"><img src="assets/info1.png" alt="" id="unit">Informatique-Niveau 1 </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=4" class="myButton1" ><img src="assets/info2.png" alt="" id="unit">Informatique-Niveau 2 </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=7" class="myButton1" ><img src="assets/info3.png" alt="" id="unit">Informatique-Niveau 3 </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=2" class="myButton1" id="fr" ><img src="assets/fr1.png" alt="" id="frr">Français-Niveau 1 </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=5" class="myButton1" id="fr"><img src="assets/fr2.png" alt="" id="frr">Français-Niveau 2 </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=6" class="myButton1" id="fr"><img src="assets/fr3.png" alt="" id="frr">Français-Niveau 3 </a>






  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=11" class="myButton1" id="eng" style="margin-left: 25px;"><img src="assets/eng1.png" alt="" id="unite">Anglais-Niveau 1 </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=23" class="myButton1" id="eng" ><img src="assets/eng2.png" alt="" id="unite">Anglais-Niveau 2 </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=64" class="myButton1" id="eng" ><img src="assets/eng3.png" alt="" id="frr">Anglais-Niveau 3 </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=12" class="myButton1" id="arab"><img src="assets/arab1.png" alt="" id="unitt">منهجية البحث العلمي-المستوى 1  </a>
  <a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=25" class="myButton1" id="arab"><img src="assets/arab2.png" alt="" id="unitt">منهجية البحث العلمي-المستوى 2</a>


<br>
  <!-- ********************************************************************************************** -->
<div class="youtube">
<img src="assets/youtube.png" style="height: 2%;" width="2%"> 
  <a href="https://www.youtube.com/watch?v=DJdkTDNgbGs" id="you" >Comment accéder au contenu pédagogique ? (<img src="assets/youtube.png" style="height: 2%;" width="2%"> كيفية الولوج إلى المحتوى البيداغوجي  )   </a><br>
  <img src="assets/youtube.png" style="height: 2%;" width="2%"> 

  <a href="https://www.youtube.com/watch?v=wE1qxOVPVKY" id="you">Comment passer l'examen final ?  (<img src="assets/youtube.png" style="height: 2%;" width="2%">   كيفية الإجابة على أسئلة الإمتحان النهائي )   </a>

</div>
<h4 class="fac2">Accompagnement</h4>

<a href="https://elearning.univ-constantine2.dz/elearning/course/view.php?id=8" class="myButton3"   ><img src="assets/1.png" alt="" id="unit3">Accompagnement des enseignants</a>
  
<a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=204" class="myButton3" style="padding-left: 25px;" ><img src="assets/2.png" alt="" id="unit3">Formation des enseignants nouvellement recrutés </a>
<a href="https://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=216" class="myButton3"  style="padding-left: 20px;" ><img src="assets/3.png" alt="" id="unit33">Formation continue </a>
<br><br>
<br>

</body>

</html>