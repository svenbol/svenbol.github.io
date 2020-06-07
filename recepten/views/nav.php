<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <!-- <a class="navbar-brand" href="#">Menu</a> -->
  <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon mx-auto"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link text-warning font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Voeding
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?page=home">Alle Voeding</a>
          <a class="dropdown-item" href="?page=koolhydraten">Koolhydraten</a>
          <a class="dropdown-item" href="?page=groenten">Groenten</a>
          <a class="dropdown-item" href="?page=fruit">Fruit</a>
          <a class="dropdown-item" href="?page=vlees">Vlees</a>
          <a class="dropdown-item" href="?page=drank">Drank</a>
          <a class="dropdown-item" href="?page=drank">Beleg</a>
          	<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="?page=snoep">Snoep</a>
          <a class="dropdown-item" href="?page=alcohol">Alcohol</a>
          <a class="dropdown-item" href="?page=frisdrank">Frisdrank</a>
          	<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="?page=vergif">Vergif</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="?page=uploadform">[VOEG TOE]</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link text-warning font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recepten
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?page=homeRecepten">Alle Recepten</a>
          <a class="dropdown-item" href="#">Gezond</a>
          <a class="dropdown-item" href="#">Ongezond</a>
          	<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Winters</a>
          <a class="dropdown-item" href="#">Exotisch</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Voorgerecht</a>
          <a class="dropdown-item" href="#">Nagerecht</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="?page=uploadformRecepten">[VOEG TOE]</a>
        </div>
      </li>
    </ul>

    <form action='?page=search' enctype='multipart/form-data' method='POST' class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Voeding" aria-label="Search">
      <input type="submit" name='searchbut' value='JA' class="btn btn-outline-warning my-2 my-sm-0 font-weight-bold">
    </form>

    <form action='?page=searchRecepten' enctype='multipart/form-data' method='POST' class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="searchRecept" type="search" placeholder="Recepten" aria-label="Search">
      <input type="submit" name='searchbutRecept' value='JA' class="btn btn-outline-warning my-2 my-sm-0 font-weight-bold">
    </form>

  </div>
</nav>

