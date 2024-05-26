<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Protfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
  <!-- Unicons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zeyada&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zeyada&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap');
  * {
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
    color: black;


  }

  html,
  body {
    scroll-behavior: smooth;
    overflow-x: hidden;

  }



  .section-main {
    position: relative;
    width: 100%;
    min-height: 80vh;
    background: url() no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 100px;

  }

  .section-main h1 {
    font-size: 60px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 80px;
    color: rgba(255, 255, 255, 0.5);
  }

  header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 100px;
    z-index: 999;
    transition: 0.6s;
  }

  header.sticky {
    background-color: #252222;
    padding: 0px 100px;

  }

  header.sticky .menu a {
    color: #ffffff;
  }

  header.sticky span {
    color: white;

  }

  header .brand {
    font-size: 30px;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 2px;
  }

  header .menu {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  header .menu a {
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    color: #000000;
    margin: 0 7px;
    padding: 0px 30px;
    border-radius: 15px;
    transition: 0.3s;
    transition-property: color, background;

  }

  /* header .menu a:hover{
  color: #000;
  background: #fff;
} */

  header .btn {
    font-size: 25px;
    cursor: pointer;
    color: #fff;
    display: none;
  }

  .section-two {
    min-height: 100vh;
    background: #222;
    padding: 20px 100px;
  }

  .section-two h2 {
    font-size: 50px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 30px 0;
    color: rgba(255, 255, 255, 0.8);
  }

  .section-two p {
    font-size: 18px;
    margin: 30px 0;
    color: rgba(255, 255, 255, 0.5);
  }

  @media (max-width: 1024px) {
    header .btn {
      display: block;
    }

    header .menu.active {
      right: 0;
    }

    header .menu {
      position: fixed;
      background: #9e9b9b;
      /* background: transparent; */
      flex-direction: column;
      min-width: 320px;
      height: 100vh;
      top: 0;
      right: -100%;
      padding: 80px 50px;
      transition-property: right;
      transition: 0.5s;
    }

    header .menu .close-btn {
      position: absolute;
      top: 0;
      left: 0;
      margin: 25px;
    }

    header .menu a {
      display: block;
      font-size: 15px;
      margin: 30px;
      padding: 0 10px;
    }
  }

  @media (max-width: 580px) {
    .section-main h1 {
      font-size: 50px;
      line-height: 60px;
    }
  }


  /* for me */



  header .menu .ancor :hover {
    color: #ffc221;
    transition: 0.4s;
  }



  header .menu .ancor::after {
    content: '';
    display: block;
    width: 0%;
    height: 3px;
    background-color: #ffc221;
    ;
    transition: 0.4s;

  }

  header .menu .ancor:hover::after {
    width: 100%;

  }

  /* popup css */

  .button {
    padding: 6px 24px;
    border: 2px solid #fff;
    background: transparent;
    border-radius: 6px;
    cursor: pointer;
  }

  .button:active {
    transform: scale(0.98);
  }


  .home::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    /* background-color: rgba(0, 0, 0, 0.6); */
    z-index: 100;
    opacity: 0;
    pointer-events: none;
    transition: all 0.5s ease-out;
  }

  .home.show::before {
    opacity: 1;
    pointer-events: auto;
  }

  /* From */
  .form_container {
    position: fixed;
    max-width: 320px;
    width: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(1.2);
    z-index: 101;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.4s ease-out;
  }

  .home.show .form_container {
    opacity: 1;
    pointer-events: auto;
    transform: translate(-50%, -50%) scale(1);
  }

  .signup_form {
    display: none;
  }

  .form_container.active .signup_form {
    display: block;
  }

  .form_container.active .login_form {
    display: none;
  }

  .form_close {
    position: absolute;
    top: 10px;
    right: 20px;
    color: #ffc221;
    font-size: 22px;
    opacity: 0.7;
    cursor: pointer;
  }

  .form_container h2 {
    font-size: 22px;
    color: #ffc221;
    text-align: center;
  }

  .input_box {
    position: relative;
    margin-top: 30px;
    width: 100%;
    height: 40px;
  }

  .input_box input {
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    padding: 0 30px;
    color: #ffc221;
    transition: all 0.2s ease;
    border-bottom: 1.5px solid #9ac100;
  }

  .input_box input:focus {
    border-color: #ffc221;
  }

  .input_box i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: #ffc221;
  }

  .input_box i.email,
  .input_box i.password {
    left: 0;
  }

  .input_box input:focus~i.email,
  .input_box input:focus~i.password {
    color: #ffc221;
  }

  .input_box i.pw_hide {
    right: 0;
    font-size: 18px;
    cursor: pointer;
  }

  .option_field {
    margin-top: 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .form_container a {
    color: #ffc221;
    font-size: 12px;
  }

  .form_container a:hover {
    text-decoration: underline;
  }

  .checkbox {
    display: flex;
    column-gap: 8px;
    white-space: nowrap;
  }

  .checkbox input {
    accent-color: #ffc221;
  }

  .checkbox label {
    font-size: 12px;
    cursor: pointer;
    user-select: none;
    color: #ffc221;
  }

  .form_container .button {
    background: #ffc221;
    margin-top: 30px;
    width: 100%;
    padding: 10px 0;
    border-radius: 10px;
  }

  .login_signup {
    font-size: 12px;
    text-align: center;
    margin-top: 15px;
  }

  .col-lg-6 .images {
    /* width: 100%;
    height: 100%; */
    position: sticky;
  }

  .images img {
    height: 70%;
    position: absolute;
    left: 52%;
    bottom: 20%;
    transform: translateX(-50%);
    transition: bottom 1s, left 1s;

  }

  .images:hover img {
    left: 47%;
  }

  .tab-link {
    position: relative;
    cursor: pointer;
  }

  .tab-link::after {
    content: '';
    width: 0;
    height: 3px;
    background: #ffc221;
    position: absolute;
    left: 0;
    bottom: -8px;
    transition: 0.5s;

  }

  .tab-link.active-link::after {
    width: 60%;
  }

  .data-content {
    display: none;
  }

  .data-content.active-skills {
    display: block;
  }

  .service-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 40px;
    margin-top: 50px;
  }

  .service-list div {
    background: #ccc8c8;
    padding: 40px;
    transition: background 0.5s, transform 0.5s;
    border-radius: 10px;
  }


  .service-list div:hover {
    background: #ffc221;
    transform: translateY(-10px);
  }




  .work {
    border-radius: 10px;
    position: relative;
    overflow: hidden;

  }



  .work img {
    border-radius: 10px;
    display: block;
    width: 100%;
    transition: transform 0.9s;

  }


  .layer {
    width: 100%;
    height: 0%;
    background: linear-gradient(rgba(0, 0, 0, 0.6), #ffc221);
    border-radius: 10px;
    position: absolute;
    left: 0;
    bottom: 0;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    transition: height 0.5s;
  }

  .work:hover img {
    transform: scale(1.1);
  }

  .work:hover .layer {
    height: 100%;
  }



  @media screen and (max-width: 426px) {


    #title .h1 {
      font-size: 50px;
      text-align: center;
      /* margin-left: 60px; */
    }

    #title .auto_type {
      font-size: 20px;
      text-align: center;

    }

    .about-img img {
      margin-left: 60px;


    }

    .btn {
      margin-left: 35%;
    }

    .logo h1 {
      margin-left: -60%;
    }

    .abc{
      position: relative;
      margin-left: -50px;
    }


    #hirebtn {
      margin-left: 5rem;
    }


  }







  /* just for observation */


  .about-us {
    font-size: 4rem;
    color: #ffc221;
    padding: 15px 0px;
    position: relative;

  }

  .about-us::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    border: 4px solid #ffc221;
    width: 30%;
  }

  .services {
    font-size: 4rem;
    color: #ffc221;
    padding: 15px 0px;
    position: relative;

  }

  .services::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    border: 4px solid #ffc221;
    width: 22%;
  }

  .works {
    font-size: 4rem;
    color: #ffc221;
    padding: 15px 0px;
    position: relative;

  }

  .works::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    border: 4px solid #ffc221;
    width: 15%;
  }

  .contact {
    font-size: 4rem;
    color: #ffc221;
    /* padding: 15px 0px; */
    position: relative;

  }

  .contact::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    border: 4px solid #ffc221;
    width: 30%;
  }




  .about-img img {
    height: 30rem;
  }

  #skills p {
    font-size: 15px;
    font-weight: bold;
    color: #fff;
  }

  #experiances p {
    font-size: 15px;
    font-weight: bold;
    color: #fff;
  }

  .about-us p {
    color: #fff;
  }

  #educations p {
    font-size: 15px;
    font-weight: bold;
    color: #fff;
  }

  #title {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  #hero-section {
    margin-top: 12rem;
    font-family: 'Poppins', sans-serif;
  }

  .png {
    display: none;
  }

  /* for skill css */


  /* .container {
    width: 40%;
    margin: 50px auto;
  } */

  /* .col-lg-6 .skill {
    padding: 10px 10px;
  } */

  .skill-name {
    font-weight: bold;
    margin-bottom: 5px;
  }

  .skill-bar {
    background-color: #ddd;
    height: 20px;
    border-radius: 10px;
    overflow: hidden;
  }

  .skill-bar-inner {
    height: 100%;
    background-color: #ffc221;
    transition: width 1s ease-in-out;
  }

  @keyframes fill {
    from {
      width: 0;
    }
  }

  .skill-bar-inner.animate {
    animation: fill 1s ease-in-out forwards;
  }


</style>

<body>
  <p id="index"></p>
  <!-- start header -->

  <header>
    <div class="logo" data-aos="zoom-in">
      <h1 style="color: white; font-family: 'Zeyada', cursive;margin-top: 19px;"><span
          style="font-size: 50px;color: #ffc221;">Mr</span><span style="font-size: 50px;">Coder</span></h1>
    </div>
    <div class="menu">
      <div class="btn">
        <i class="fas fa-times close-btn"></i>
      </div>
      <a class="ancor" href="#index">Home</a>
      <a class="ancor" href="#about">About Us</a>
      <a class="ancor" href="#services">Services</a>
      <a class="ancor" href="#work">My Work</a>
      <a class="ancor" href="#skill2">My Skills</a>
      <a class="ancor" href="#hire">Hire Me</a>
    </div>

    <div class="btn">
      <i class="fas fa-bars menu-btn" style="color: #ffc221"></i>
    </div>
  </header>

  <!-- end header -->

  <!-- Content -->

  <div id="hero-section" class="container">
    <div class="row">
      <div id="title" class="col-lg-6" data-aos="fade-right">
        <h1 class="h1"><span style="font-family: 'Zeyada', cursive; font-size: 7rem; font-weight: bold"> Hello !</span><br> <span style="font-size: 5rem;"> Imran Here </span> <span style="font-size: 15px; color: orange;"><br>(Full Stack Web Developer)</span>
        </h1>
        <h1 class="h1" style="font-size: 45px;">I'm <span class="auto_type" style="color: orange;"> </span></h1>
      </div>

      <div class="col-lg-6" id="coverimg" s>
        <div class="images img-fluid" data-aos="fade-down">
          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="shape" data-aos="fade-left">
            <path fill="#FFC221"
              d="M56.2,-63C70.2,-55.2,77.2,-35,80.3,-14.6C83.4,5.8,82.6,26.5,71.9,38.2C61.2,49.9,40.7,52.6,22.3,57.8C3.9,63.1,-12.4,70.9,-27.1,68.2C-41.9,65.6,-55.1,52.5,-60.3,37.7C-65.4,22.8,-62.5,6.1,-57.4,-7.9C-52.3,-21.9,-44.9,-33.3,-34.9,-41.9C-25,-50.5,-12.5,-56.3,4.3,-61.4C21.1,-66.5,42.1,-70.9,56.2,-63Z"
              transform="translate(100 100)" />
          </svg>
          <img src=".\img\cover-Photoroom.png-Photoroom.png">
        </div>
      </div>
    </div>
  </div>




  <!-- Content -->
  <p id="about"></p>
  <!-- About us -->

  <div class="container-fluid"
    style="background: linear-gradient(rgba(0, 0, 0, 0.3), black); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-position: center; background-repeat: no-repeat; background-size: cover;  border-radius: 30rem 5rem;">
    <div class="container" style="font-family: 'Poppins', sans-serif;padding: 50px 0;">
      <div class="row">
        <div class="col-lg-6 " data-aos="zoom-in-right">
          <div class="about-img" style="margin-top: 8rem;">
            <img src=".\img\about-Photoroom.png-Photoroom.png" alt="" class="">
          </div>
        </div>
        <div class="col-lg-6 " data-aos="zoom-out-left">
          <div style="margin-left: 30px;" id="about_us">
            <h1 class="about-us">About Us</h1>
            <p style="font-size: 15px; margin-top: 40px; font-weight: bold;color: #fff;" class="p">
              Hello I am a web developer as a Fresher. I recently completed a web development course
              from APTECH which has given me the latest skills and knowledge in the web development industry. I have to
              have get more experiences and knowledge about programming.
              My focus is on designing and developing website that look great and work well. I am skilled in a range of
              programming languages and platforms, including HTML, CSS, JavaScript, PHP.
              My goal is to create websites that are both visually appealing and easy to use.
              I am seeking a job recently if you are looking for a web developer so I am available as a
              Internship.<br />
              THANKS!
            </p>
            <label class="tab-link active-link" onclick="opentab('skills')"
              style="font-size: 15px; font-weight: bold; color: #fff;">Skills</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label class="tab-link" onclick="opentab('experiances')"
              style="font-size: 15px; font-weight: bold; color: #fff;">Experiance</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label class="tab-link" onclick="opentab('educations')"
              style="font-size: 15px; font-weight: bold; color: #fff;">Education</label><br /><br />

              <div style = "height: 43vh;">

            <div class="data-content active-skills" id="skills">
              <h6 style="color: #ffc221;font-size: 17px;">UI/UX</h6>
              <p>Designing Web Interface</p>
              <h6 style="color: #ffc221; font-size: 17px;">Web Development</h6>
              <p>Mobile Friendly Web Development</p>
              <h6 style="color: #ffc221; font-size: 17px;">Microsoft Office</h6>
              <p>Ms Word - Ms Excel - Power Point</p>
              <h6 style="color: #ffc221; font-size: 17px;">Languages</h6>
              <p>Urdu - English</p>
            </div>

            <div class="data-content" id="experiances">
              <h6 style="color: #ffc221; font-size: 17px;">01 Year Experiance</h6>
              <p>Mars BPO International Call Center</p>
              <h6 style="color: #ffc221; font-size: 17px;">03 Year Experiance As a Team Lead</h6>
              <p>Millienium Enginnering (PVT) LTD.</p>
              <h6 style="color: #ffc221; font-size: 17px;">06 Month Experiance</h6>
              <p>Freelancing</p>
            </div>

            <div class="data-content" id="educations">
              <h6 style="color: #ffc221; font-size: 17px;">Nasra Public School</h6>
              <p>Matriculation From Computer Science</p>
              <h6 style="color: #ffc221; font-size: 17px;">GOVT Degree Boys Collage Buffer Zone</h6>
              <p>Intermediate From Pre-Enginnering</p>
              <h6 style="color: #ffc221; font-size: 17px;">Karachi University</h6>
              <p>BSCS Undergradution</p>
              <h6 style="color: #ffc221; font-size: 17px;">Aptech Learning</h6>
              <p>diploma of Software Enginnering From Nazimabad Branch <span
                  style="color: #ffc221; font-size: 17px;">Process</span></p>
            </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <p id="services"></p>
  <!-- About us -->

  <!-- MY Services -->


  <div class="container mt-5">
    <h1 style="font-size: 4rem;color: #ffc221;padding: 50px 0;" class="services" data-aos="fade-right">My Services</h1>
    <div class="row">

      <div class="col-lg-4 col-md-12" data-aos="zoom-out-right">
        <div class="service-list">
          <div>
            <svg style="height: 50px;" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z" />
            </svg>
            <h2 style="margin-top: 30px;">Web Design</h2>
            <p>Innovative web designer crafting visually stunning digital experiences that captivate and inspire. </p>
            <a href="#hire"><button id="hirebtn" type="button" class="btn btn-outline-dark"
                style="padding: 10px 20px;">Hire
                Me</button></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
        <div class="service-list">
          <div>
            <svg style="height: 50px;" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                d="M448 109.3l54.6-54.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L402.7 64 160 64v64l178.7 0L128 338.7V32c0-17.7-14.3-32-32-32S64 14.3 64 32V64H32C14.3 64 0 78.3 0 96s14.3 32 32 32H64V384c0 35.3 28.7 64 64 64H352V384H173.3L384 173.3 384 480c0 17.7 14.3 32 32 32s32-14.3 32-32V448h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H448l0-274.7z" />
            </svg>
            <h2 style="margin-top: 30px;">Freelancing</h2>
            <p>Passionate freelancer dedicated to delivering high-quality, tailored solutions that exceed expectations
            </p>
            <a href="#hire"><button id="hirebtn" type="button" class="btn btn-outline-dark"
                style="padding: 10px 20px;">Hire
                Me</button></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12" data-aos="zoom-out-left">
        <div class="service-list">
          <div>
            <svg style="height: 50px;" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                d="M255.9 120.9l9.1-15.7c5.6-9.8 18.1-13.1 27.9-7.5 9.8 5.6 13.1 18.1 7.5 27.9l-87.5 151.5h63.3c20.5 0 32 24.1 23.1 40.8H113.8c-11.3 0-20.4-9.1-20.4-20.4 0-11.3 9.1-20.4 20.4-20.4h52l66.6-115.4-20.8-36.1c-5.6-9.8-2.3-22.2 7.5-27.9 9.8-5.6 22.2-2.3 27.9 7.5l8.9 15.7zm-78.7 218l-19.6 34c-5.6 9.8-18.1 13.1-27.9 7.5-9.8-5.6-13.1-18.1-7.5-27.9l14.6-25.2c16.4-5.1 29.8-1.2 40.4 11.6zm168.9-61.7h53.1c11.3 0 20.4 9.1 20.4 20.4 0 11.3-9.1 20.4-20.4 20.4h-29.5l19.9 34.5c5.6 9.8 2.3 22.2-7.5 27.9-9.8 5.6-22.2 2.3-27.9-7.5-33.5-58.1-58.7-101.6-75.4-130.6-17.1-29.5-4.9-59.1 7.2-69.1 13.4 23 33.4 57.7 60.1 104zM256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216z" />
            </svg>
            <h2 style="margin-top: 30px;">DBS Design</h2>
            <p>Database designer committed to optimizing data structures for seamless efficiency and performance
            </p>
            <a href="#hire"><button id="hirebtn" type="button" class="btn btn-outline-dark"
                style="padding: 10px 20px;">Hire
                Me</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- My services -->
  <P id="work"></P>
  <!-- My work -->

  <div class="container mt-5">
    <h1 class="works" style="font-size: 4rem;color: #ffc221;padding: 50px 0;"
      data-aos-anchor-placement="center-center">My Work</h1>
    <div class="row" style="margin-top: 70px;">


      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="300">
        <div class="work" style="height: 70%;">
          <img width="100%"
            src="https://images.unsplash.com/photo-1586880244406-556ebe35f282?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="">
          <div class="layer">
            <h2 style="color: #fff;">E-Commerce Website </h2>
            <h3 style="color: #fff;">Garments</h3>
            <p>This was my first static website I learned a lot of things from this website and I really appriciate this
              project because its
              makes me expert to UI/UX design
            </p>
            <a href=""><svg style="height: 30px;" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
              </svg></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
        <div class="work" style="height: 70%;">
          <img width="100%" 
            src="https://images.unsplash.com/photo-1579165466949-3180a3d056d5?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="">
          <div class="layer">
            <h2 style="color: #fff;">Lab Automation</h2>
            <h5 style="color: #fff;">Equipments Testing Website</h5>
            <p>This was my second dynamic website I learned a lot of things from this website and I really appriciate this
              project because its makes me expert to backend development as well as frontend</p>
            <a href=""><svg style="height: 30px;" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
              </svg></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" id="last-work" data-aos="zoom-in" data-aos-duration="1200">
        <div class="work" style="height: 70%;">
          <img width="100%"
            src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=1955&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="">
          <div class="layer">
            <h2 style="color: #fff;">Personal Portfolio</h2>
            <p>I made this website for user's who inspire my skills and developments and user's can hire me and feelfree to contact me</p>
            <a href=""><svg style="height: 30px;" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
              </svg></a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- My work -->
  <p id="skill2"></p>
  <!-- skills -->

  <div class="container">
    <h1 class="works" style="font-size: 4rem;color: #ffc221;padding: 50px 0;" 
      data-aos-anchor-placement="center-center">My Skills</h1>
    <div class="row">
      <div class="col-lg-6 mt-5" data-aos="fade-right">
        <div class="skill">
          <div class="skill-name">HTML</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 90%;" data-width="80"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5" data-aos="fade-left">
        <div class="skill">
          <div class="skill-name">CSS</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 80%;" data-width="70"></div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-lg-6 mt-5" data-aos="fade-right">
        <div class="skill">
          <div class="skill-name">JavaScript</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 60%;" data-width="80"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5" data-aos="fade-left">
        <div class="skill">
          <div class="skill-name">PHP</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 70%;" data-width="70"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mt-5" data-aos="fade-right">
        <div class="skill">
          <div class="skill-name">GIT & GITHUB</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 50%;" data-width="80"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5" data-aos="fade-left">
        <div class="skill">
          <div class="skill-name">MY SQL DATABASE</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 70%;" data-width="70"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mt-5" data-aos="fade-right">
        <div class="skill">
          <div class="skill-name">BOOTSTRAP FRAMEWORK</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 80%;" data-width="80"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5" data-aos="fade-left">
        <div class="skill">
          <div class="skill-name">LARAVEL FREAMWORK</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 30%;" data-width="70"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row ">
      <div class="col-lg-6 mt-5" data-aos="fade-right">
        <div class="skill">
          <div class="skill-name">RESPONSIVE WEB DESIGNING</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 75%;" data-width="80"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5" data-aos="fade-left">
        <div class="skill">
          <div class="skill-name">POWERPOINT</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 55%;" data-width="70"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mt-5" data-aos="fade-right">
        <div class="skill">
          <div class="skill-name">MS WORD</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 65%;" data-width="80"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5" data-aos="fade-left">
        <div class="skill">
          <div class="skill-name">MS EXCEL</div>
          <div class="skill-bar">
            <div class="skill-bar-inner" style="width: 58%;" data-width="70"></div>
          </div>
        </div>
      </div>
    </div>


  </div>


  <!-- skills end -->
  
  <p id="hire"></p>

  <!-- Contact Us -->


  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="left">
          <h1 class="contact" style="font-size: 4rem;color: #ffc221;padding: 50px 0;">Contact Me</h1>
          <div class="detail-us" style="margin-top: 50px;">
            <div class="mail" style="display: flex;">
              <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48" data-aos="zoom-in">
                <path fill="#4caf50" d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z"></path>
                <path fill="#1e88e5" d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z"></path>
                <polygon fill="#e53935" points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17">
                </polygon>
                <path fill="#c62828"
                  d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z">
                </path>
                <path fill="#fbc02d"
                  d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z">
                </path>
              </svg>
              <p style="margin-left: 15px;">ghoriimran342@gmail.com</p>
            </div>
            <div class="contact-number" style="display: flex;">
              <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48" data-aos="zoom-in" >
                <path fill="#0f0"
                  d="M13,42h22c3.866,0,7-3.134,7-7V13c0-3.866-3.134-7-7-7H13c-3.866,0-7,3.134-7,7v22	C6,38.866,9.134,42,13,42z">
                </path>
                <path fill="#fff"
                  d="M35.45,31.041l-4.612-3.051c-0.563-0.341-1.267-0.347-1.836-0.017c0,0,0,0-1.978,1.153	c-0.265,0.154-0.52,0.183-0.726,0.145c-0.262-0.048-0.442-0.191-0.454-0.201c-1.087-0.797-2.357-1.852-3.711-3.205	c-1.353-1.353-2.408-2.623-3.205-3.711c-0.009-0.013-0.153-0.193-0.201-0.454c-0.037-0.206-0.009-0.46,0.145-0.726	c1.153-1.978,1.153-1.978,1.153-1.978c0.331-0.569,0.324-1.274-0.017-1.836l-3.051-4.612c-0.378-0.571-1.151-0.722-1.714-0.332	c0,0-1.445,0.989-1.922,1.325c-0.764,0.538-1.01,1.356-1.011,2.496c-0.002,1.604,1.38,6.629,7.201,12.45l0,0l0,0l0,0l0,0	c5.822,5.822,10.846,7.203,12.45,7.201c1.14-0.001,1.958-0.248,2.496-1.011c0.336-0.477,1.325-1.922,1.325-1.922	C36.172,32.192,36.022,31.419,35.45,31.041z">
                </path>
              </svg>
              <p style="margin-left: 15px;">+92 3150012044</p>
            </div>
          </div>
          <div class="icons mt-4" style="display: flex;gap: 30px; cursor: pointer;" data-aos="zoom-out" data-aos-duration="1000">
            <svg style="height: 30px;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48">
              <path fill="#3f51b5" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path>
              <path fill="#fff"
                d="M29.368,24H26v12h-5V24h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H30v4h-2.287 C26.104,16,26,16.6,26,17.723V20h4L29.368,24z">
              </path>
            </svg>
            <svg style="height: 30px;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48">
              <path fill="#FF3D00"
                d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z">
              </path>
              <path fill="#FFF" d="M20 31L20 17 32 24z"></path>
            </svg>
            <a href="https://www.linkedin.com/in/muhammad-imran-khan-01a44b227/"><svg style="height: 25px;"
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48">
                <path fill="#0288D1"
                  d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
                </path>
                <path fill="#FFF"
                  d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z">
                </path>
              </svg>
            </a>
          </div>
          <div class="abc mt-5">
            <a href=".\img\Imran resume.pdf" download><button type="button" class="btn btn-outline-warning"
                style="padding: 10px 30px;">Download CV</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 mt-5">
        <form action="" method="POST">
        <div class="right mt-3" style="display: flex; flex-direction: column;gap: 20px;">
          <div class="input-group mb-3">

            <input type="text" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default" placeholder="Your Name" name="name" required>
          </div>

          <div class="input-group mb-3">

            <input type="email" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default" placeholder="Your E-mail" name="email" required>
          </div>
          <div class="input-group">

            <textarea class="form-control" aria-label="With textarea" placeholder="Message" name="message" required></textarea>
          </div>
        </div>
        <div class="abc2 mt-5">
          <button type="submit" name="submit" class="btn btn-outline-warning" style="padding: 10px 30px;">Submit</button>
        </div>
        </form>
      </div>


    </div>
  </div>

  </div>


  <div class="container-fluid mt-5" style="background-color: rgb(120, 115, 115);" id="footer">
    <div class="row">
      <div class="col-lg-12">
        <p style="color: rgb(0, 0, 0);display: flex; align-items: center; justify-content: center; color: #fff; font-size: 10px;">
          Copyright &nbsp; <span><svg style="height: 15px;" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM199.4 312.6c31.2 31.2 81.9 31.2 113.1 0c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-50 50-131 50-181 0s-50-131 0-181s131-50 181 0c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0c-31.2-31.2-81.9-31.2-113.1 0s-31.2 81.9 0 113.1z" />
            </svg></span>&nbsp; Personal Protfolio Made By Mr Imran</p>
      </div>
    </div>




    <script>
      //Javascript for Navigation effect on scroll
      window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle('sticky', window.scrollY > 0);
      });

      //Javascript for responsive navigation sidebar Nav
      var menu = document.querySelector('.menu');
      var menuBtn = document.querySelector('.menu-btn');
      var closeBtn = document.querySelector('.close-btn');

      menuBtn.addEventListener("click", () => {
        menu.classList.add('active');
      });

      closeBtn.addEventListener("click", () => {
        menu.classList.remove('active');
      });
    </script>

    <!-- for popup coding -->





    <script>
      const formOpenBtn = document.querySelector("#form-open"),
        home = document.querySelector(".home"),
        formContainer = document.querySelector(".form_container"),
        formCloseBtn = document.querySelector(".form_close"),
        signupBtn = document.querySelector("#signup"),
        loginBtn = document.querySelector("#login"),
        pwShowHide = document.querySelectorAll(".pw_hide");

      formOpenBtn.addEventListener("click", () => home.classList.add("show"));
      formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

      pwShowHide.forEach((icon) => {
        icon.addEventListener("click", () => {
          let getPwInput = icon.parentElement.querySelector("input");
          if (getPwInput.type === "password") {
            getPwInput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
          } else {
            getPwInput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash");
          }
        });
      });

      signupBtn.addEventListener("click", (e) => {
        e.preventDefault();
        formContainer.classList.add("active");
      });
      loginBtn.addEventListener("click", (e) => {
        e.preventDefault();
        formContainer.classList.remove("active");
      });
    </script>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
      var typed = new Typed(".auto_type", {
        strings: ["UI/UX Designer...", "Web Developer...", "Freelancer...", "Programer..."],
        typeSpeed: 30,
        backSpeed: 50,
        loop: true


      }) 
    </script>


    <script>

      let tablinks = document.getElementsByClassName("tab-link");
      let tabcontents = document.getElementsByClassName("data-content");

      function opentab(tabname) {
        for (tablink of tablinks) {
          tablink.classList.remove("active-link");
        }

        for (tabcontent of tabcontents) {
          tabcontent.classList.remove("active-skills");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-skills");
      }

    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        // offset: 300,
        duration: 1000,
      });
    </script>


<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  

  if (isset($_POST['submit'])) {
    
      $user_name = $_POST['name'];
      $user_email = $_POST['email'];
      $message = $_POST['message'];
      
      $_SESSION['username'] = $_POST['name'];

      $sql = "INSERT INTO userinfo (UserName , UserEmail , Message) value ('$user_name' , '$user_email' , '$message')";

  
      $result = mysqli_query($conn, $sql);
      
    
  }

}

?>


</body>

</html>