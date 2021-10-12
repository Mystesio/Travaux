window.addEventListener("load",run,false);

function run(){
	
	var i,j;
	var table,tr,td;
	
	table = document.createElement("table");
	for(i=0;i<50;i++){
		tr = document.createElement("tr");
		for(j=0;j<50;j++){
			td = document.createElement("td");
			td.addEventListener("click",change,false);
			tr.appendChild(td);
		}
		table.appendChild(tr);
	}
	document.body.appendChild(table);
	
  
	function change(){
		var i;
		var j;
		var cpt; 
		var cellules = document.getElementsByTagName("td");
              
		 for ( i=0;i<cellules.length;i++){ 
		 var jeu=Math.floor(Math.random()*cellules.length);
	     cellules[jeu].style.backgroundColor= "red";
	     if (cellules[i] != cellules[jeu]){
		 cellules[i].style.backgroundColor="white"; 
		 }
		 if (cellules[jeu]==this){
			 cellules[jeu].style.backgroundColor="white";
			 alert ('gagné');
		 }
		} 
	}
}
