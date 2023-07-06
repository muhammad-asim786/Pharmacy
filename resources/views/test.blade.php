<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>MY Pharma</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="./Branding/My Pharma Logo.png">

  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
  
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>E-Pharmacy</title>
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
      </path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
      <path
        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path
        d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd"
        d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path
        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd"
        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path
        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
  </svg>


  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
      </path>
    </symbol>
    <symbol id="facebook" viewBox="0 0 16 16">
      <path
        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
    </symbol>
    <symbol id="twitter" viewBox="0 0 16 16">
      <path
        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
    </symbol>
  </svg>

  <!-- ///////////////////////navbar/////////////// -->









  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">

      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="./Branding/My Pharma Logo.png" class="bi me-2 navbar-brand d-inline-block" width="60">
        <img src="./Branding/My Pharma Type.png" class="bi me-2 navbar-brand d-inline-block" height="50">
      </a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-xl-0">
          <li class="nav-item"><a href="./ " class="nav-link active">Home</a></li>
          <li class="nav-item"><a href="#feature" class="nav-link ">Features</a></li>
          <li class="nav-item"><a href="#footerID" class="nav-link ">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-inline-flex p-2" role="search">
          <input class="form-control me-2 d-inline-flex p-2" type="search" placeholder="Search Medicine"
            aria-label="Search">
          <button class="btn btn-outline-danger me-1 text-light" style="background-color: #D60B51;"
            type="Submit">Search</button>
        </form>
        <div class="btn-group">
          <img src="./images/Account.png" width="35px" style="margin-left:15px; cursor:pointer;" class="dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
          <ul class="dropdown-menu mydropdown" style="margin-top: 24px; background-color: #D60B51;">
            <li><a class="dropdown-item" href="./login/" style="color: white; font-weight:500;">Login</a></li>
            <li><a class="dropdown-item" href="./login/signUp.html" style="color: white; font-weight:500">Register</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="./" style="color: white; font-weight: 500;">Home</a></li>
          </ul>
        </div>

        <a href="./cart.html">
          <img src="./images/Cart.png" width="35px" style="margin-left:15px; cursor:pointer;">
        </a>
      </div>
    </div>

    </div>
  </nav>


  <!-- carousel part /////////////////////////// -->


  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="./images/BG0.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="./images/BG1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="./images/BG2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="./images/BG3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <!-- product list///////////////////////////////// -->

  <h1 class="prductTitle" id="feature">Featured Medicines.</h1>
  <div class="ProductList1">
    <div class="ProductList2">
      <div class="card">
        <img src="./images/Pro0.png" class="card-img-top w-75" alt="...">
        <div class="card-body d-flex flex-column align-item-center justify-content-center">
          <h4 class="card-title">Risek Insta - 20mg</h4>
          <p class="card-text">For adults for the treatment of Gastro-Esophageal Reflux Disease (GERD) treatment of...
          </p>
          <div class="qtyPriceDiv">
            <h5> Rs-150</h5>
          <input class="numberInput" type="number" style="width: 30%;" placeholder="Qty.">
        </div>
          <a href="#" class="btn btn-outline-danger me-1 text-light" style="background-color: #D60B51;">Add to Cart</a>
        </div>
      </div>
      <div class="card">
        <img src="./images/Pro1.jpg" class="card-img-top w-75" alt="...">
        <div class="card-body d-flex flex-column align-item-center justify-content-center">
          <h4 class="card-title">Panadol - 500mg</h4>
          <p class="card-text">You can take paracetamol for: mild to moderate pain, for example backache, headache,
            migraine...</p>
            <div class="qtyPriceDiv">
              <h5> Rs-20</h5>
            <input class="numberInput" type="number" style="width: 30%;" placeholder="Qty.">
          </div>
          <a href="#" class="btn btn-outline-danger me-1 text-light" style="background-color: #D60B51;">Add to Cart</a>
        </div>
      </div>
      <div class="card">
        <img src="./images/Pro2.jpg" class="card-img-top w-75" alt="...">
        <div class="card-body d-flex flex-column align-item-center justify-content-center">
          <h4 class="card-title">Combinol-D</h4>
          <p class="card-text">Dextromethorphan is used to relieve coughs due to colds or influenza (flu). It should not
            be...</p>
            <div class="qtyPriceDiv">
              <h5> Rs-300</h5>
            <input class="numberInput" type="number" style="width: 30%;" placeholder="Qty.">
          </div>
          <a href="#" class="btn btn-outline-danger me-1 text-light" style="background-color: #D60B51;">Add to Cart</a>
        </div>
      </div>
      <div class="card">
        <img src="./images/Pro3.jpg" class="card-img-top w-75" alt="...">
        <div class="card-body d-flex flex-column align-item-center justify-content-center">
          <h4 class="card-title">Arinac Forte 400mg/60mg</h4>
          <p class="card-text">For the relief of the symptoms of cold and cold with associated congestion, including
            aches...</p>
            <div class="qtyPriceDiv">
              <h5> Rs-150</h5>
            <input class="numberInput" type="number" style="width: 30%;" placeholder="Qty.">
          </div>
          <a href="#" class="btn btn-outline-danger me-1 text-light" style="background-color: #D60B51;">Add to Cart</a>
        </div>
      </div>
      <div class="card">
        <img src="./images/Pro4.jpg" class="card-img-top w-75" alt="...">
        <div class="card-body d-flex flex-column align-item-center justify-content-center">
          <h4 class="card-title">Panadol Migraine 250mg</h4>
          <p class="card-text">Used for the treatment of painful conditions, such as headache including migraine, and
            tension headaches...</p>
            <div class="qtyPriceDiv">
              <h5> Rs-100</h5>
            <input class="numberInput" type="number" style="width: 30%;" placeholder="Qty.">
          </div>

          <a href="#" class="btn btn-outline-danger me-1 text-light" style="background-color: #D60B51;">Add to Cart</a>
        </div>
      </div>
      <div class="card">
        <img src="./images/Pro5.png" class="card-img-top w-75" alt="...">
        <div class="card-body d-flex flex-column align-item-center justify-content-center">
          <h4 class="card-title">Brufen 100mg/5ml</h4>
          <p class="card-text">Brufen is indicated for its analgesic and anti-inflammatory effects in the treatment of
            rheumatoid arthritis...</p>
            <div class="qtyPriceDiv">
            <h5> Rs-200</h5>
          <input class="numberInput" type="number" style="width: 30%;" placeholder="Qty.">
        </div>
          <a href="#" class="btn btn-outline-danger me-1 text-light" style="background-color: #D60B51;">Add to Cart</a>
        </div>
      </div>
    </div>

  </div>


  <!-- ///////////////////Footer//////////////// -->
  <div style="margin-top:40px;" id="footerID">
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <img src="./Branding/My Pharma Logo.png" alt="" height="80px"
                style="margin-bottom:20px; cursor: pointer;">
              <img src="./Branding/My Pharma Type.png" alt="" height="50px"
                style="margin-bottom:20px; cursor: pointer;">
              <h5 style="font-family:'Zen Kaku Gothic New', sans-serif; margin-bottom: 20px;">We offer more than just
                medicine.</h5>
              <p>
                MY Pharma is a online medicines providing conpany aimed towards a smarter and a healther world.
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold">Services:</h5>
              <p>Online Doctor Appointment.</p>
              <p>Everyday Pills/Serups.</p>
              <p>Medicines Remainder.</p>
              <p>Real-Time Body Diagnostics.</p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3" style="cursor: pointer;">
              <h5 class="text-uppercase mb-4 font-weight-bold">Social Handles:</h5>
              <div class="footerSocial myFooterSocials">
                <span style="margin-right: 20px;">
                  <img src="./images/sm0.png" style="width: 30px;" alt=""></span>
                <span>
                  <p>Facebook.</p>
                </span>
              </div>
              <div class="footerSocial myFooterSocials">
                <span style="margin-right: 20px;">
                  <img src="./images/sm1.png" style="width: 30px;" alt=""></span>
                <span>
                  <p>Instagram.</p>
                </span>
              </div>
              <div class="footerSocial myFooterSocials" >
                <span style="margin-right: 20px;">
                  <img src="./images/sm2.png" style="width: 30px;" alt=""></span>
                <span>
                  <p>Linkedin.</p>
                </span>
              </div>
              <div class="footerSocial myFooterSocials">
                <span style="margin-right: 20px;">
                  <img src="./images/sm3.png" style="width: 30px;" alt=""></span>
                <span>
                  <p>Twitter.</p>
                </span>
              </div>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold">Contact:</h5>
              <p><i class="fas fa-home mr-3"></i> DCSE, UET Peshawar, Pakistan</p>
              <p><i class="fas fa-envelope mr-3"></i> yaseenirshad589.com</p>
              <p><i class="fas fa-envelope mr-3"></i> abdulmajid1m2@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> +92-340-4708887</p>
              <p><i class="fas fa-print mr-3"></i> +92-311-0588609</p>
            </div>
            <!-- Grid column -->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center text-center">
            <!-- Grid column -->
            <div class="p-3  ">
              <h5 class="d-column-flex align-item-center">© 2022 Copyright: MY Pharma Pvt Ltd.</h5>
            </div>

            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    
</body>

</html>