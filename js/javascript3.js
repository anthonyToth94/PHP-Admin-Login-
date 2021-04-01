regisztracio();
function regisztracio(){
	//lementem az elemeket!
	const regisztracio = document.querySelector("#regisztracio");

	regisztracio.addEventListener("click",function(){
		
		const felhasznalo =	document.querySelector("#felhasznalo").value;
		const jelszo = document.querySelector("#jelszo").value;
		const jelszo2 = document.querySelector("#jelszo2").value;

		$(document).ready(function(){
			$.post("regisztracioFeldolgoz.php",
				{felhasznalo: felhasznalo, jelszo: jelszo,jelszo2:jelszo2 },
				function(data){	

					$('#hiba').html(data);
					if(data == "Sikeres regisztráció!"){
						document.querySelector("#felhasznalo").value = "";
						document.querySelector("#jelszo").value = "";
						document.querySelector("#jelszo2").value = "";
					}
				});
		});
	});


}