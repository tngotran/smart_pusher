<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	   <title>Apache2 Ubuntu Default Page: It works</title>
	   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
           <script type="text/javascript">

	 $(document).ready(function(){
	 	 $('#on').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
	  		 var a = new XMLHttpRequest();
	   		 a.open("GET", "light.php?q=" + "lightOn", true);   // thay cái batden.php thành file thực thi của bạn
			 a.onreadystatechange=function(){
			    if(a.readyState==4){
			   	    if(a.status == 200){
				    }
				     else  alert("Error")
	    		    }
		 	 }
		         a.send();
		});
	 	 $('#off').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "light.php?q=" + "lightOff", true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 })
		 $('#musicOn').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"musicOn",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#musicOff').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q=" + "musicOff",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#vlUp').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "volume.php?q="+"volumeUp",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error - I don't know but there is an error 404 maybe :)")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#vlDown').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "volume.php?q="+"volumeDown",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error - I don't know but there is an error 404 maybe :)")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#vlMute').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "volume.php?q="+"volumeMute",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error - I don't know but there is an error 404 maybe :)")
				     }
	    		    }
	   		}
		       a.send();
		 });
	});
	</script>

	</head>
<body>
  <button type="button" id="on">Light On</button><br>
  <button type="button" id="off">Light Off</button><br>  
  <button type="button" id="musicOn">Music On</button><br>
  <button type="button" id="musicOff">Music Off</button><br>
 <button type="button" id="vlUp">Volume UP</button><br>
 <button type="button" id="vlDown">Volume DOWN</button><br>
 <button type="button" id="vlMute">Set Volume 0%</button><br>
	
  <?php 

//     $saved = getenv("PULSE_SERVER");        // save old value 
     $newld = "/run/user/1000/pulse/native";  // extra paths to add 
  //  if ($saved) { $newld .= ":$saved"; }           // append old paths if any 
    putenv("PULSE_SERVER=$newld");        // set new value 
     echo exec('sudo amixer set Master on 2>&1') . " \n";	
   //  echo exec('sudo amixer -D pulse sset Master 50% 2>&1');
    // echo date("l");
    // putenv("PULSE_SERVER=$saved");        // restore old value
  ?>

</body>

</html>



