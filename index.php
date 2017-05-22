<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/master.css">
  <script type="text/javascript" src="js/schalter.js"></script>
  <script src="js/jquery.js" type="text/javascript"></script>
  <title>Smarthome</title>
</head>
<body>
  <div id="wrap">
    <section>
      <table>
        <tr>
          <td class="btn" onclick="send(2,3,999)">
            <img id="999" class="icon" src="img/lamp_off.png" alt="1"><br> Schreibtisch Lampe L
          </td>
          <td class="btn" onclick="send(1,1,998)">
            <img id="998" class="icon" src="img/lamp_off.png" alt="1"><br> Schreibtisch Lampe R
          </td>
          <td class="btn" onclick="send(2,2,996)">
            <img id="996" class="icon" src="img/screens_off.png" alt="1"><br> Schreibtisch Bildschirme
          </td>
          <td class="btn" onclick="send(1,3,997)">
            <img id="997" class="icon" src="img/lamp_off.png" alt="1"><br> Bett <br> Lampe
          </td>
        </tr>
        <tr>
          <td class="btn" onclick="send(1,2,995)">
            <img id="995" class="icon" src="img/tv_off.png" alt="1"><br> Fernseher <br> Konsole
          </td>
          <td class="btn" onclick="send(2,4,994)">
            <img id="994" class="icon" src="img/lamp_off.png" alt="1"><br> FREI <br> 1
          </td>
          <td class="btn" onclick="send(1,4,993)">
            <img id="993" class="icon" src="img/lamp_off.png" alt="1"><br> FREI <br> 2
          </td>
          <td class="btn" onclick="send(2,1,992)">
            <img id="992" class="icon" src="img/lamp_off.png" alt="1"><br> FREI <br> 3
          </td>
        </tr>
    </table>
    </section>
  </div>
</body>

</html>
