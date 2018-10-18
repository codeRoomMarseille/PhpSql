// Selectionne une planete dans le tableau
function changePlanete(planete){
	let planetes = document.getElementsByTagName("TD");
	for(let myPlanete of planetes) {
		myPlanete.style.backgroundColor = "White";
		if(myPlanete.innerHTML == planete.value) {
			myPlanete.style.backgroundColor = "Red";
		}
	}
}
