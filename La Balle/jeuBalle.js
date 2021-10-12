window.addEventListener("DOMContentLoaded",run,false);

function run(){
	var monCanvas = document.getElementById("monCanvas");
	var cg = monCanvas.getContext("2d");
	var bouton = document.getElementById("ajout");
	bouton.addEventListener("click",ajouterBalle,false);
	var mesBalles = [new Balle()];
	
	var timer = setInterval(animation,100);
	
	function ajouterBalle(){
		mesBalles.push(new Balle());
	}
	
	function efface(){
		cg.fillStyle = "#FFFFFF";
		cg.fillRect(0,0,1000,800);
	}
	
	function dessineBalle(b){
		cg.fillStyle = b.couleur;
		cg.beginPath();
		cg.arc(b.x,b.y,b.rayon,0,2*Math.PI);
		cg.fill();
		cg.closePath();
	}
	
	function bouge(b){
		if((b.x>(1000-b.rayon))||(b.x<b.rayon)){
			b.vitesseX = -b.vitesseX;
		}
		if((b.y>(800-b.rayon))||(b.y<b.rayon)){
			b.vitesseY = -b.vitesseY;
		}
		b.x += b.vitesseX;
		b.y += b.vitesseY;
	}
	
	function animation(){
		var i;
		efface();
		for(i=0;i<mesBalles.length;i++){
			bouge(mesBalles[i]);
			dessineBalle(mesBalles[i]);
		}
	}
}
