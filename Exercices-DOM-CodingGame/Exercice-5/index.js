//changer titre
d3.select('h1').text('Rick Astley - Never Gonna Give You Up ');
//effacer la premiere ligne

// effacer les doublons

//effacer l'element avec l'id erreur
d3.select('#erreur').remove();
//ajouter un footer en bas de la page
d3.select('body').append('footer').text(' © Copyright 2020 - Nom');