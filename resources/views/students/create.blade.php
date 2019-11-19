<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="{{ asset ('css/style.css') }}">

</head>
<body>
  <form>
  	<label for="Name">Name</label>
  	 <input type="text" name="name"> <br/>
  	<label for="Roll.No">Roll.No:</label>
  	 <input type="number" name="Roll"> <br/>
  	<label for="Faculty">Faculty: </label> 
  	 <input type="text" name="faculty"> <br/>
  	
   <button type="submit">Save</button>
     
   <input type="reset" name="cancel">
 </form>

 <script type="text/javascript" src="{{ asset ('js/script.js') }}" onload="hello()">  </script>
</body>
</html>