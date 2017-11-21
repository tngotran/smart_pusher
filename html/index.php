
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
	   		 a.open("GET", "batden.php");   // thay cái batden.php thành file thực thi của bạn
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
		 	a.open("GET", "tatden.php");   // thay cái tatden.php thành file thực thi của bạn
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
	});
	</script>

	</head>
<body>
  <button type="button" id="on">Bật Đèn</button><br>
  <button type="button" id="off">Tắt Đèn</button><br>  
</body>

</html>

