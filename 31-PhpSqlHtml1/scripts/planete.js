// Découpe l'URL et récupère les paramètres (ici qu'un seul donc l'instruction n'est pas très utile)
let parameters = location.search.substring(1).split("&");

let temp = parameters[0].split("=");
planete = unescape(temp[1]);
document.write("Tu as choisi: " + planete);
