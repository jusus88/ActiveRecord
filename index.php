<link rel="stylesheet"  href="estilo.css">
<link href="https://fonts.googleapis.com/css?family=Monoton|Ultra&display=swap" rel="stylesheet">

 <form action="proceso.php" method="post" id="form">
 	
 	<input type="text" name="name" placeholder="ingresa tu nombre">
 	<input type="text" name="lname" placeholder="ingresa tu apellido">
 	<input type="number" name="dni" placeholder="ingresa tu dni">
 	<input type="radio" name="sexo" value="f">F
 	<input type="radio" name="sexo" value="m">M
 	<hr>
 	<button type="submit">Guardar</button>
 	
 </form>
 <script type="text/javascript">
 	form.addEventListener("submit", (e)=>{
 		e.preventDefault();

 		let frm=new FormData(form);
 		let Ajax=new XMLHttpRequest();
 		Ajax.addEventListener("load", (i)=>{


 			if (Ajax.status==200 & Ajax.readyState==4){
 				alert("registro guardado correctamente");
 				form.reset();
 			}
 			
 			
 		});
 		Ajax.open("post","proceso.php");
 		Ajax.send(frm);

 	});
 </script>