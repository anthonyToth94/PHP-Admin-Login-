$(document).ready(function(){
	$("#belepes").click(function(){
		
		$.post("bejelentkezes.php",
			{felhasznalo: $('#felhasznalo').val(), jelszo: $('#jelszo').val()},
			function(data){	

				let belephet = data;
				if(belephet.length < 5){
					window.location.href = "admin.php";
				}
				else{
					$('#hiba').html(belephet);
				}
			});
	});
});

/*
const belepes = document.querySelector("#belepes");

belepes.onclick = function(){

const felhasznalo = document.getElementById("felhasznalo").value;
const jelszo = document.getElementById("jelszo").value;

const xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function(){
		if(xhttp.readyState === 4 && xhttp.status === 200){
			console.log(xhttp.responseText);
		}
	};
	xhttp.open("POST","bejelentkezes.php",true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send('felhasznalo='+felhasznalo+'&jelszo='+jelszo); 

}
*/