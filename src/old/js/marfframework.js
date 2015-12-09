/* MADE BY MARVIN FERWERDA 
wat is marfframework?
Marfframework is een eigen bibiotheek van codes. ik maak deze functies om sommige codes die ik moeilijk kan onthouden in een functie om programeren voormij makkelijker te maken.
er zitten ook namelijk wat tech snufjes in zoals een useragent detecter, fullscreen api, en een stickybalk. marfframework is meer voormij zelf, indien jij dit ook wil gebruiken,
ga je gang je mag het zelfs veranderen hoe je het wild. :)

natuurlijk is deze biotohteek enorm klein ik hoop met de toekomst dat het groter en groter word.
*/
// useragent Dectector
var marframeworkloaded = 1;
var mjversie = "1.0";

var useragent = null;
if(navigator.userAgent.indexOf("Chrome") != -1 ) 
{
    useragent = 'Chrome';
}
else if(navigator.userAgent.indexOf("Opera") != -1 )
{
    useragent = 'Opera';
}
else if(navigator.userAgent.indexOf("Firefox") != -1 ) 
{
    useragent = 'Firefox';
}
else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
{
    useragent = 'IE'; 
}  
else 
{
    useragent =  '?';
}
// end

function log( tekst )
{
    console.log(tekst);
}

function GaNaarSite(URL)
{
    window.location.href = URL;
}

function overmij()
{
    return("Deze pagina maakt gebruik van MarfFrameWork! Versie: " + mjversie);
}

function gahomepagina() {
    if (typeof window.home == 'function') { 
        window.home();
    } else if (document.all) { 
        window.location.href = "about:home";
    } else {
        window.location.replace('about:blank');
    }
}

function vollescherm(element) { // vollescherm(document.documentElement); LETOP: alleen werkend met knopjes en links vanwege veiligheids redenen. 
  log("Volledigsherm geopend.");
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
}
function menubalk() // jquery verplicht!
{
      $(document).ready(function() {
        var stickyNavTop = $('.nav').offset().top;
        var stickyNav = function(){
          var scrollTop = $(window).scrollTop();
          if (scrollTop > stickyNavTop) { 
              $('.nav').addClass('sticky');
          } else {
              $('.nav').removeClass('sticky'); 
          }
      };
      stickyNav();
      $(window).scroll(function() {
        stickyNav();
      });
    });
}