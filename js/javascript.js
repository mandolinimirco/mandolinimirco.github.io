// const gra = function(min, max) {
//   return Math.random() * (max - min) + min;
// }
// const init = function(){
// let items = document.querySelectorAll('section');
// for (let i = 0; i < items.length; i++){
//   items[i].style.background = randomColor({luminosity: 'light'});
// }
// cssScrollSnapPolyfill()
// }
// init();

function traduci(lingua1, lingua2)
{

    if(lingua1="italiano")
    {
        document.getElementById("ita").style.display= "flex";

        document.getElementById("eng").style.display= "none";

    }
    if(lingua1="italiano")
    {
        document.getElementById("ita").style.display= "none";

        document.getElementById("eng").style.display= "flex";

    }
}

function traduzione(scelta){

    if(scelta=="ita")
    {

      var objects = document.getElementsByClassName("ita");
      for (var obj of objects) {
        
          obj.style.display="block";
      }
       objects = document.getElementsByClassName("eng");
      for (var obj of objects) {
        
          obj.style.display="none";
      }
    }
    else
    {
      var objects = document.getElementsByClassName("eng");
      for (var obj of objects) {
        
          obj.style.display="block";
      }
       objects = document.getElementsByClassName("ita");
      for (var obj of objects) {
        
          obj.style.display="none";
      }
    }

    if(scelta!=="")
    {
          const xhttp = new XMLHttpRequest();
        
         xhttp.open("GET", "ajax_lingua.php?scelta="+scelta);
         xhttp.send();

    }else{
     alert("errore ajax");
    }
   
  }