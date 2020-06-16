require('./bootstrap');



var navbarTop = document.getElementById("nav");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        navbarTop.style.backgroundColor = "black";
    } else {
        navbarTop.style.backgroundColor = "transparent";
    }
  }


 

function modifyOffset() {
    var el, newPoint, newPlace, offset, siblings, k;
    width    = this.offsetWidth;
    newPoint = (this.value - this.getAttribute("min")) / (this.getAttribute("max") - this.getAttribute("min"));
    offset   = -1;
    if (newPoint < 0) { newPlace = 0;  }
    else if (newPoint > 1) { newPlace = width; }
    else { newPlace = width * newPoint + offset; offset -= newPoint;}
    siblings = this.parentNode.childNodes;
    for (var i = 0; i < siblings.length; i++) {
        sibling = siblings[i];
        if (sibling.id == this.id) { k = true; }
        if ((k == true) && (sibling.nodeName == "OUTPUT")) {
            outputTag = sibling;
        }
    }
    outputTag.style.left       = newPlace + "px";
    outputTag.style.marginLeft = offset + "%";
    outputTag.innerHTML        = this.value;
}

function modifyInputs() {
    
    var inputs = document.getElementsByTagName("input");
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].getAttribute("type") == "range") {
            inputs[i].onchange = modifyOffset;

            // the following taken from http://stackoverflow.com/questions/2856513/trigger-onchange-event-manually
            if ("fireEvent" in inputs[i]) {
                inputs[i].fireEvent("onchange");
            } else {
                var evt = document.createEvent("HTMLEvents");
                evt.initEvent("change", false, true);
                inputs[i].dispatchEvent(evt);
            }
        }
    }
}

modifyInputs();

var app = new Vue({
    el: '#app',
    data: {
        message: 'Hola',
        image: 'images/house1.jpg'
    }
           
  });

  var logo = new Vue({
    el: '#logo',
    data: {
        logo: 'images/Logo-empresa.png'
    }
           
  });

  var stars = new Vue({
      el: '#stars',
      data: {
          stars: 'images/stars.png',
          daft: 'images/daft.png',
          myhome: 'images/myhome.jpg'
      }
  });

  var works = new Vue({
      el: '#works',
      data:{
          calendar: 'images/calendar-icon.jpg',
          people: 'images/people-icon.jpg',
          hands: 'images/hand-shake-icon.jpg',
          key: 'images/key-icon.jpg',
          euro: 'images/euro-icon.jpg',
          faq: 'images/faq-icon.jpg'
      }
  })

  var maxmize = new Vue({
    el: '#maximize',
    data:{
        peopleGreen: 'images/green-person-icon.jpg',
        peopleOrange: 'images/orange-people-icon.jpg',
        peopleBlue: 'images/blue-people-icon.jpg',
        phone: 'images/phone.png'
    }
})

  var traditional = new Vue({
    el: '#traditional',
    data:{
        pig: 'images/pig-icon.jpg',
        presentation: 'images/presentation-icon.jpg',
        speed: 'images/speed-icon.jpg',
        cart: 'images/cart-icon.jpg',
        percentage: 'images/percentage-icon.jpg',
        speaker: 'images/speaker-icon.jpg',
        bigCalendar: 'images/big-calendar-icon.jpg',
        picture: 'images/picture-icon.jpg'
    }
})

var featured = new Vue({
    el: '#featured',
    data:{
        irishtimes: 'images/irishtimes-logo.png',
        sundaytimes: 'images/sundaytimes-logo.png',
        indipendent: 'images/indipendentIE-logo.png'
    }
})

/* SOCIAL ICONS */
var social = new Vue({
    el: '#social',
    data:{
        facebook: 'images/facebook-icon.png',
        twitter: 'images/twitter-icon.png',
        instagram: 'images/instagram-icon.png',
        email: 'images/email-icon.png'
    }
})

/* IMG OFFICE CONTACTS */
var office = new Vue({
    el: '#office',
    data:{
        office: 'images/work-office.jpg'
    }
})

var footer = new Vue({
    el: '#footer',
    data:{
        logoBlue: 'images/logo-blue.png',
        facebookWhite: 'images/facebook-icon_white.png',
        twitterWhite: 'images/twitter-icon_white.png',
        instagramWhite: 'images/instagram-icon_white.png',
        emailWhite: 'images/email-icon_white.png',
    }
})


var contacts = new Vue({
    el: '#contacts',
    data:{
        calendarBook: 'images/book-calendar-icon.png',
        sendMessage: 'images/send-message-icon.png',
        makeOffer: 'images/make-offer-icon.png',
        contactAgent: 'images/contact-agent-icon.png'
    }
})



function currentDiv(n) {
    showDivs(slideIndex = n);
  }
  
  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-opacity-off";
  }


  var slide = new Vue({
    el: '#slide',
    data:{
        image1: 'images/house1.jpg',
        image2: 'images/interior1.jpg',
        image3: 'images/interior2.png',
        image4: 'images/interior3.png'
    }
})


var details = new Vue ({
    el: '#details',
    data: {
        watt: 'images/icono-watt.png'
    }
})


  


  