<html>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-16">
 <title>Pizza Mia</title>
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
</head>
   <body>
 
     <!-- Barre de navig -->
     <nav>
       <h1>Pizza Mia</h1>
       <div class="onglets">
         <a href=''>Accueil</a>
         <a href=''>Cartes des Pizzas</a>
         <a href="#" onclick="function open_mod(){var modal = document.getElementById('modal'); modal.getElementsByClassName('message')[0].innerHTML = 'Panier'; modal.className += 'open';} open_mod(); return false;">Panier</a>
 
       </div>
     </nav>
 
     <!-- Fin Barre de navig -->
 
     <header>
       <h1> Pizza Mia </h1>
       <h3> Panier </h3>
       
     </header>
        
      <!-- Cartes pizzas tomates -->
 
     <section class="main">

      </section>
 
     <footer>
       <h2>En savoir plus sur nous !</h2>
         <div class="infos">
          
           <div class="info">
             <h4>Un peu plus sur Pizza Mia</h4>
             <p>Pizza Mia est une pizzeria de longue date ! Créée depuis 1985, votre pizzeria favorite ne cesse de s'améliorer et de vous proposer des nouvelles choses  avec un menu et du contenu qui change régulièrement ! Etant représentée dans 3 boutiques en France, nous vous proposons des pizzas de qualités à très bons prix. Alors n'hésitez plus, venez chez nous !</p>
           </div>
 
           <div class="info">
             <h4>Nos Boutiques</h4>
             <p>A ce jour, Pizza Mia est représentée dans 3 villes de France, voici donc l'emplacement de nos 3 boutiques</p>
             <p> Marseille : 12 rue avenue du Port, 13001 </p>
             <p> Lyon : 14 Rue Victor Hugo, 69000 </p>
             <p> Avignon : 62 Rue Des Lices, 84000 </p>
           </div>
          
           <div class="info">
             <h4>Réseaux Sociaux</h4>
             <p>Voici la liste de nos réseaux sociaux : </p>
             <p><i class="fab fa-facebook-f"></i>  Facebook : pizzamia</p>
             <p><i class="fab fa-twitter"></i>  Twitter : PizzaMiaa</p>
             <p><i class="fab fa-instagram"></i>  Instagram : Pizza_Mia</p>
             <p>Si vous rencontrez le moindre problème, contactez le : 06 84 52 68 43</p>
           </div>
         </div>
		<div id="modal">
 	
       <div class="mask"></div>
 	           <div class="container auto">
     	           <div class="message"></div>
        <a href="#" class="close">&times;</a>
    </div>
</div>
       <p id="contact">Contact : 06 84 52 68 43/pizzamia@gmail.com  | Pizza Mia &copy; </p>
     </footer>
   </body>
</html>

