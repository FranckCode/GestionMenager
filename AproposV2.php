<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="AproposV2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>A-Propos</title>
</head>
<body id="maPage">
    <?php include("entete.html"); ?>
    <br>
    <div  class="nav col-xs-12 col-sm-12 col-md-12">
        <ul class="breadcrumbs">
            <li>Accueil</li>
            <li>A Propos</li>
        </ul>
    </div>   

<div class="container">

    <div id="apropos">
        <h2 align="center" >A Propos</h2>
        <hr id="uses">
    </div>  

    <h2>Comment Utiliser le Site?</h2>
    <div id="video" class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <br>
            <video id="myVideo" controls><source src="Git.mp4" type="video/mp4"></video>
        </div>
    </div><br>


    <div id="apropos">
        <h2>Nos Objectifs</h2>
    </div>  


    <div id="band">
        <p style="text-align: justify;"><em>Faciliter la recherche d'un ménager en ligne</em></p>
        <p style="text-align: justify;"><b>Le site de recherche en ligne d'un ménager</b>  consiste à faciliter
            la recherche et l’emploi d’un ménager disponible en ligne.
            Il permettra de recruter un ménager et de lui créer un espace
            personnel sur la platte forme.
            Le site permet: <br>
            - à un internaute de réserver une femme de ménage en ligne
            et disponible; <br>
            - à un ménager déjà inscrit de se rendre disponible ou
            indisponible pendant une periode définie au préalable; <br>
            - à un ménager de consulter son emploi de temps journalier en ligne dans son espace personnel; <br>
            - à un internaute(employeur) de rechercher un
            ménager en fonction de ses propres critères; <br>
            - de notifier les internautes inscrits a la 
            newsletter par mail ou par SMS de la disponibilité d’un nouveau ménager en ligne. <br>
            Ce site donne aussi la possibilité a un internaute de noter un
            ménager enfin d’augmenter ses cotes de popularité et d’aptitude au travail.
        </p>
    </div><br>

    <div id="apropos">
        <h2>Notre Vision</h2>
    </div>  
    <div id="band" class="text-center">
        <p style="text-align: justify;"><em>Donner l'opportunité d'avoir un emploi</em></p>
        <p style="text-align: justify;">Nous visons un public de toute nature:
            Le profil type de nos ménagers peut être homme ou une femme agé entre 21 et
            45 ans sans aucune expérience professionnelle au préalable. Nous
            donnons ainsi la possibilité à ces personnes avec ou sans emploi et ou passionnées par 
            le ménage de se populariser et de faire savoir leurs talents aux potentiels 
            employeurs d'une part et d'autre part, Faciliter le recrutement des ménagers à temps réel.
            La qualité des services offerts, la sécurité des informations personnelles et 
            notre disponibilité est la priorité.  
        </p>
    </div><br>

    <div id="apropos">
        <h2>Services Offerts</h2>
        <p id="band" style="text-align: justify;"><em>Vous avez la possibilité de:</em></p>
    </div>  
    <br>

    <div class="row" id="tabn">
        <div class="col-xs-4 col-sm-4 col-md-4"><button id="button"  onclick="openCity(event, 'recru')"><b>Recruter un Ménager</b></button></div>
        <div class="col-xs-4 col-sm-4 col-md-4"><button id="button"  onclick="openCity(event, 'reser')"><b>Réserver un Ménager</b></button></div>
        <div class="col-xs-4 col-sm-4 col-md-4"><button id="button"  onclick="openCity(event, 'contr')"><b>Demander un Contrat</b></button></div>
    </div>
      
    <div id="recru" class="tabcontent">
        <h3><em>Recruter un Ménager</em></h3>
        <p style="text-align: justify;">Cliquer sur Recruter On aime la musique!
            Nous avons créé un site Web de groupe fictif. Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo conséquat. Duis aute irure dolor in 
            eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
            deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conséquat.
            Vous pouvez recruter en cliquant <a href="inscrire.html">ICI</a>
        </p>
    </div>
      
    <div id="reser" class="tabcontent">
        <h3><em>Réserver un Ménager</em></h3>
        <p style="text-align: justify;">Cliquer sur Réserver On aime la musique!
            Nous avons créé un site Web de groupe fictif. Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo conséquat. Duis aute irure dolor in 
            eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
            deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conséquat. 
            Vous pouvez réserver en cliquant <a href="inscrire.html">ICI</a>   
        </p> 
    </div>
      
    <div id="contr" class="tabcontent">
        <h3><em>Demander un Contrat</em></h3>
        <p style="text-align: justify;">
            Cliquer Demander Contrat On aime la musique!
            Nous avons créé un site Web de groupe fictif. Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo conséquat. Duis aute irure dolor in 
            eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
            deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conséquat.
            Vous pouvez demander un contrat en cliquant <a href="inscrire.html">ICI</a>
        </p>
    </div>
</div>
      
    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>

    <br>
    <div id="ancre" class="text-center">
        <a class="up-arrow" href="#maPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
    </div>
    <script>
        $(document).ready(function(){
          // Initialize Tooltip
          $('[data-toggle="tooltip"]').tooltip(); 
          
          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a, div#ancre a[href='#myPage']").on('click', function(event) {
        
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
        
              // Prevent default anchor click behavior
              event.preventDefault();
        
              // Store hash
              var hash = this.hash;
        
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 900, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        })
    </script>
    
    <?php include("footer.html"); ?>
    
</body>
</html>