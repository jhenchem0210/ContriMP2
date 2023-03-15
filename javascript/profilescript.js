 var loadFile = function(event) {
	    var output = document.getElementById('load1');
	    output.src = URL.createObjectURL(event.target.files[0]);
	  };

 function onbuttoncolor()
 {
 	var on=document.getElementById("browser");
 	on.style.backgroundColor = "#6665ee";
 	on.style.width="50%";
 }

 function outbuttoncolor()
 {
 	var out=document.getElementById("browser");
 	out.style.backgroundColor = "#7979f3";
 	out.style.width="97%";
 }