<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARTAku | Home</title>
    <link rel="stylesheet" href="{{'assets/styles/budget.css'}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="d-flex">
    <ul class="nav flex-column" id="navbar">
        <div class="container-fluid" id="navbar_icon">
            <img src="{{'assets/images/ARTAku_ic3.png'}}" alt="">
        </div>
        <li class="nav-item">
            <p class="nav-link" id="menu_title">Menu</p>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="home_link" href="/home">
            <img src="{{'assets/images/Home.png'}}" alt="" id="home_img">
            Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pengeluaran_link" href="/pengeluaran">
            <img src="{{'assets/images/Pengeluaran.png'}}" alt="" id="pengeluaran_img">
            Pengeluaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pemasukan_link" href="/pemasukan">
            <img src="{{'assets/images/Pemasukan.png'}}" alt="" id="pemasukan_img">
            Pemasukan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="budget_link" href="/budget">
            <img src="{{'assets/images/Budget_WhiteFill.png'}}" alt="" id="budget_img">
            Budget</a>
        </li>
      </ul>
    <div class="d-flex flex-column align-items-center" id="home">
      <div class="row" id="main_navbar">
          <div class="col d-flex align-items-center ms-3" id="page_title">
              Budgeting Plan
          </div>
          <div class="col d-flex align-items-center justify-content-end" id="dropdown_container">
              <div class="dropdown pe-5" id="dropdown_pill">
                  <a class="btn dropdown-toggle rounded-3 d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdown">
                    <div class="d-flex justify-content-center align-items-center">
                      <p id="dropdown_text" class="mt-3">
                          <img src="{{'assets/images/Profile.png'}}" alt="" id="profile_img" class="pe-2">
                          {{"John Doe"}}</p>
                    </div>
                    <div class="col"></div>
                  </a>
                
                  <ul class="dropdown-menu" id="dropdown_menu">
                    <li><a class="dropdown-item d-flex align-items-center" href="/home" id="logout_button">
                      <img src="{{'assets/images/Logout.png'}}" alt="" id="logout_img" class="pe-2">
                      Log Out</a></li>
                    
                  </ul>
                </div>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>