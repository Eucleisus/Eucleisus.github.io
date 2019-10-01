
 var lis = [document.getElementById("li_fs"),
			document.getElementById("li_fslh"),
			document.getElementById("li_fsjp"),
			document.getElementById("li_fasa"),
			document.getElementById("li_fseg")];


			
 function init(i){
	lis[i].onmouseover = function(){
		var child = lis[i].lastChild; // On prend le dernier enfant
		while(child){
			if(child.className === "deroul"){ // C'est un l'élément recherché
				child.style.visibility = 'visible';
				child.onmouseout = function(){
					this.style.visibility = 'hidden';
				}
			}
			child = child.previousSibling; // À chaque tour de boucle, on prend l'enfant précédent
		}
	}
	lis[i].onmouseout = function(){
		var child = lis[i].lastChild;
		while(child){
			if(child.className === "deroul"){
				child.style.visibility = 'hidden';
			}
			child = child.previousSibling;
		}
	}
 }
 
 for(var i=0; i<5; i++) init(i);
