var myForm = document.getElementById('myForm');
      
myForm.addEventListener('submit', function(e) {
	switch(myForm.maPlanete.value) {
		case "Mercure":
		case "Venus":
		case "Terre":
		case "Mars":
		case "Jupiter":
		case "Saturne": break;
		case "Dagobah": alert ("Tu te prends pour un futur Jedi ?"); e.preventDefault(); break;
		case "Tatooine": alert ("Tu te prends pour Luke Skywalker ?"); e.preventDefault(); break;
		case "L'etoile noire": alert ("Tu te prends pour Dark Vador ?"); e.preventDefault(); break;
		case "Lune d'Endor": alert ("Tu te prends pour un Ewoks ?"); e.preventDefault(); break;
		default: alert("T'as oublié une planète dans la liste"); e.preventDefault();
	}
}, true);

myForm.addEventListener('reset', function(e) {
	alert("Une planète du système solaire, c'est compliqué ?");
}, true);
