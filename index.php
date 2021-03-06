<?php
session_start();
$title = "Saper";
$page = "index";
require_once "parts/header.php";
?>

  <section class="index">

    <a href="api_debug.php">api_debug</a><br/>

    <div class="row">

      <div class="col-xs-12">
        <img src="res/Asaper.jpg"/>
      </div>

    </div>

    <div class="row">

      <div class="col-xs-12">
        <p>
          Saper (tytuł oryginalny Minesweeper) – klasyczna jednoosobowa gra komputerowa napisana w 1981 roku przez
          Roberta Donnera, dostępna jako akcesorium w każdym systemie Microsoft Windows do wersji 7. Od wersji 8 i RT
          dostępne do ściągnięcia w sklepie Windows (istnieją też wersje dla innych systemów operacyjnych). Gra
          polega na odkrywaniu na planszy poszczególnych pól w taki sposób, aby nie natrafić na minę. Na każdym z
          odkrytych pól napisana jest liczba min, które bezpośrednio stykają się z danym polem (od zera do ośmiu). Jeśli
          oznaczymy dane pole flagą, jest ono zabezpieczone przed odsłonięciem, dzięki czemu przez przypadek nie
          odsłonimy miny.
        </p>
      </div>

    </div>

  </section>

<?php
require_once "parts/footer.php";
?>