<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planner</title>

  <link rel="stylesheet" href="styles/style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">My stuff</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          People's stuff
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </nav>

  <section class="timetable">
    <div class="row">
      <div class="col border">Time</div>
      <div class="col border">
        <h2>Hétfő</h2>
      </div>
      <div class="col border">
        <h2>Kedd</h2>
      </div>
      <div class="col border">
        <h2>Szerda</h2>
      </div>
      <div class="col border">
        <h2>Csütörtök</h2>
      </div>
      <div class="col border">
        <h2>Péntek</h2>
      </div>
      <div class="col border">
        <h2>Szombat</h2>
      </div>
      <div class="col border">
        <h2>Vasárnap</h2>
      </div>
    </div>

    <!-- TABLE CREATION -->
    <?php
    for ($i = 8; $i <= 20; $i++) {
      ?>
      <div class="row">
        <?php
        for ($j = 0; $j < 8; $j++) {
          if ($j == 0) {

            ?>
            <div class="col border">
              <?= $i ?>:00
            </div>
            <?php
          } else {
            ?>
            <div class="col border" id="inside"></div>
            <?php
          }
        }
        ?>
      </div>
      <?php
    }
    ?>
  </section>
  <button id="newbtn">New lesson</button>
  <form action="get" id="inplength">
    <label for="name">Óra hossza: </label>
    <input type="number" name="length" id="">
    <select name="" id="">
      <option value="#FF0000">Red</option>
      <option value="#0000FF">Blue</option>
    </select>
    <button id="placeLesson">Ok</button>
  </form>

</body>
<script src="js\index.js"></script>

</html>