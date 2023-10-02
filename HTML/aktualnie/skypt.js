const punkty = document.querySelector("#punkty");
const przycisk = document.querySelector("#przycisk");
const wynik = document.querySelector("#wynik");
przycisk.addEventListener("click", function() {

   let pkt = punkty.value;
   let ocena = "";
   
   if (pkt < 51) ocena = "dwójka";
   else if (pkt < 71) ocena = "trójka";
   else if (pkt < 90) ocena = "czwórka";
   else ocena = "piątka";
   console.log(punkty, pkt);
   wynik.innerHTML = "Zdobyłeś " + pkt + " punktów<br>Ocena: " + ocena;
});


