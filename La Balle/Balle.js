class Balle {
	
	constructor(){
		this.rayon = Math.floor(5+Math.random()*45);
		this.x = Math.floor(this.rayon+(Math.random()*(1000-2*this.rayon)));
		this.y = Math.floor(this.rayon+(Math.random()*(800-2*this.rayon)));
		this.vitesseX = Math.floor(Math.random()*20)-10;
		this.vitesseY = Math.floor(Math.random()*20)-10;
		var rouge = Math.floor(Math.random()*256);
		var vert = Math.floor(Math.random()*256);
		var bleu = Math.floor(Math.random()*256);
		var alpha = 0.1+Math.random()*0.9;
		//this.couleur = "rgba("+rouge+","+vert+","+bleu+","+alpha+")";
		this.couleur = `rgba(${rouge},${vert},${bleu},${alpha})`;
	}
	
	
}
