<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a class="logo me-auto"><img src="{{ asset ('assets/img/logo_optimus_navbar.png') }}" width="250" alt="" class="img-fluid"><!-- <h4>Optimus</h4> --></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link active">Home</a></li>
            <li class="dropdown"><a class="nav-link">NGO</a>
              <ul>
                <li><a class="nav-link" href="/writer/ngo/add">Add NGO</a></li>
                <li><a class="nav-link" href="/writer/ngo/list">List NGO</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="nav-link">Speaker</a>
              <ul>
                <li><a class="nav-link" href="/writer/ngo/add">Add NGO</a></li>
                <li><a class="nav-link" href="/writer/ngo/list">List NGO</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="nav-link">FAQs</a>
              <ul>
                <li><a class="nav-link" href="/writer/faq/add">Add FAQ</a></li>
                <li><a class="nav-link" href="/writer/faq/list">List FAQ</a></li>
              </ul>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/logout" class="appointment-btn scrollto">Sign Out</a>
      <!-- <a href="contact-us" class="appointment-btn scrollto"><i class="bi bi-whatsapp"></i></a> -->
      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

    </div>
  </header><!-- End Header -->