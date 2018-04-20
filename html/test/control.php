
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	   <title>Apache2 Ubuntu Default Page: It works</title>
	   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
           <script type="text/javascript">

	 $(document).ready(function(){
	 	 $('#pl1').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
	  		 var a = new XMLHttpRequest();
	   		 a.open("GET", "yt.php?q=" + "pl1", true);   // thay cái batden.php thành file thực thi của bạn
			 a.onreadystatechange=function(){
			    if(a.readyState==4){
			   	    if(a.status == 200){
				    }
				     else  alert("Error")
	    		    }
		 	 }
		         a.send();
		});
		 $('#pl2').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
                         var a = new XMLHttpRequest();
                         a.open("GET", "yt.php?q=" + "pl2", true);   // thay cái batden.php thành file thực thi của bạn
                         a.onreadystatechange=function(){
                            if(a.readyState==4){
                                    if(a.status == 200){
                                    }
                                     else  alert("Error")
                            }
                         }
                         a.send();
                });

		 $('#pl3').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
                         var a = new XMLHttpRequest();
                         a.open("GET", "yt.php?q=" + "pl3", true);   // thay cái batden.php thành file thực thi của bạn
                         a.onreadystatechange=function(){
                            if(a.readyState==4){
                                    if(a.status == 200){
                                    }
                                     else  alert("Error")
                            }
                         }
                         a.send();
                });

		 $('#pop').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
                         var a = new XMLHttpRequest();
                         a.open("GET", "yt.php?q=" + "pop", true);   // thay cái batden.php thành file thực thi của bạn
                         a.onreadystatechange=function(){
                            if(a.readyState==4){
                                    if(a.status == 200){
                                    }
                                     else  alert("Error")
                            }
                         }
                         a.send();
                });
		 $('#kara').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
                         var a = new XMLHttpRequest();
                         a.open("GET", "yt.php?q=" + "kara", true);   // thay cái batden.php thành file thực thi của bạn
                         a.onreadystatechange=function(){
                            if(a.readyState==4){
                                    if(a.status == 200){
                                    }
                                     else  alert("Error")
                            }
                         }
                         a.send();
                });



	 	 $('#turnOffCom').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
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
		 });

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

		
		 $('#piano').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"piano",true);   // thay cái tatden.php thành file thực thi của bạn
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

		 $('#mozart').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"mozart",true);   // thay cái tatden.php thành file thực thi của bạn
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

		 $('#yiruma').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"yiruma",true);   // thay cái tatden.php thành file thực thi của bạn
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
		 $('#beethoven').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"beethoven",true);   // thay cái tatden.php thành file thực thi của bạn
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
		 $('#wakeup').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"wakeup",true);   // thay cái tatden.php thành file thực thi của bạn
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
		 $('#bath').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"bath",true);   // thay cái tatden.php thành file thực thi của bạn
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
		 $('#sleep').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"sleep",true);   // thay cái tatden.php thành file thực thi của bạn
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
	   		var a = new XMLHttpRequest();		 	a.open("GET", "music.php?q=" + "musicOff",true);   // thay cái tatden.php thành file thực thi của bạn
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

  <button type="button" id="pl1">play List1</button><br>
  <button type="button" id="pl2">play List2</button><br>
  <button type="button" id="pl3">play List3</button><br>
  <button type="button" id="pop">pop music</button><br>
  <button type="button" id="kara">karaoke song</button><br>

  <button type="button" id="turnOffCom">Turn Off Computer</button><br>  

  <br><br>
  <button type="button" id="musicOn">Music On</button><br>
  <button type="button" id="musicOff">Music Off</button><br>
 <br><br>
 <button type="button" id="mozart">Mozart</button><br>
 <button type="button" id="piano">Piano</button><br>
 <button type="button" id="yiruma">Yiruma</button><br>
 <button type="button" id="beethoven">Beethoven</button><br>
 <br><br>
 <button type="button" id="wakeup">Wake Up</button><br>
 <button type="button" id="sleep">Sleep</button><br>
 <button type="button" id="bath">bath</button><br>
 <br><br>
 <button type="button" id="vlUp">Volume UP</button><br>
 <button type="button" id="vlDown">Volume DOWN</button><br>
 <button type="button" id="vlMute">Mute</button><br>
 <br><br>
 <br><br>

	
  <?php 

//     $saved = getenv("PULSE_SERVER");        // save old value 
     $newld = "/run/user/1000/pulse/native";  // extra paths to add 
  //  if ($saved) { $newld .= ":$saved"; }           // append old paths if any 
    putenv("PULSE_SERVER=$newld");        // set new value 
     echo exec('sudo amixer set PCM on 2>&1') . " \n";	
   //  echo exec('sudo amixer -D pulse sset Master 50% 2>&1');
    // echo date("l");
    // putenv("PULSE_SERVER=$saved");        // restore old value
  ?>

</body>

</html>



