var steckdose = new Array(3);
// Hier wird ein Array für zwei Steckdosen-Sets a vier Steckdosen erzeugt
for (var i = 1; i < steckdose.length; i++) {
  steckdose[i] = Array(5);
  for (var x = 1; x < steckdose[i].length; x++) {
    steckdose[i][x] = "0";
  }
}
// Hier werden sie system-codes der einzelnen Steckdosen-Sets eingetragen.
steckdose[1][0] = "11001";
steckdose[2][0] = "11010";

function send(sys, item, id) {
  // Der An/Aus zustand wird in dem .alt-Tag der img Elemente gespeichert.
  var zustand = document.getElementById(id).alt
  var stralt = document.getElementById(id).src
  // die letzten 7 Zeichen werden ausgetauscht
  var strneu = stralt.substr(0, stralt.length - 7);
  if (zustand > 0) {
    strneu = strneu + "oon.png"
    document.getElementById(id).src = strneu; // (off.png zu oon.png)
    document.getElementById(id).alt = 0;
  } else {
    strneu = strneu + "off.png"
    document.getElementById(id).src = strneu; // (oon.png zu off.png)
    document.getElementById(id).alt = 1;
  }
  steckdose[sys][item] = zustand;
  // die von wiringPi benötigten Variablen werden an verarbeitung.php übergeben.
  $.ajax({
    url: 'verarbeitung.php',
    type: 'post',
    data: {
      "sys": steckdose[sys][0],
      "item": item,
      "state": steckdose[sys][item]
    }
  }).done(function(feedback) {
    if (feedback == '0') {
      alert("FEHLER: Es wurden nicht alle benötigten Varabelen übergeben");
    } else {
      if (feedback != "") {
        console.log(feedback);
      } else {
        console.log("Der Befehl wurde ohne positive Rückmeldung ausgeführt.");
      }
    }
  });
}
