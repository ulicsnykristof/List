<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>ASD</title>
  </head>
    <!--Készítsünk tetszőleges sorú táblázatot Oly módon, hogy vegyünk
    fel egy tömböt, nevekkel.
    A neveket listázzuk ki táblázatszerűen.
    Az oszlopok a következőek legyenek:
    1.oszlop: random szám 0,100 között
    2.oszlop: random név a tömbből
    3.oszlop: adott másodperc megjelenítése (date fv.)
    4.oszlop: random karakter az abc-ből tetszőlegesen
    5.oszlop: 6 hosszúságú jelszavak generálása -->
  <body>

    <table class="table">
      <thead>
        <tr>
          <th>Number</th>
          <th>Name</th>
          <th>Second</th>
          <th>Char</th>
          <th>Password</th>
        </tr>
      </thead>
      <tbody>

        <?php
          function generate_password(){
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $password = array();
            for ($i=0; $i < 6; $i++) {
              $password[] = $alphabet[rand(0, strlen($alphabet)-1)];
            }
            return implode($password);
          }

          $name_list = ['Retkes Beáta', 'Cudar Balázs', 'Álnok Péter', 'Verjem Enikő', 'Csikis Roland', 'Üszkös Bojtorján'];

          shuffle($name_list);
          foreach ($name_list as $key => $value) {
            echo "<tr>";
            echo "<td>" . rand(0,100) . "</td>";
            echo "<td>" . $value . "</td>";
            echo "<td>" . date("s") . "</td>"; // date("H:i:s") -> 20:12:33 // H-óra, i-perc, s-másodperc
            echo "<td>" . chr(rand(65,90)) . "</td>";
            echo "<td>" . generate_password() . "</td>";
            echo "</tr>";
          }
         ?>

      </tbody>
    </table>

  </body>
</html>
