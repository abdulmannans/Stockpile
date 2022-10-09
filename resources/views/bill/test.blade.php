<html>

<head>
	<title>Jquery | Keyup() </title>
	<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>   
</head>
<script>
    
    $(document).ready(function(){
        var value = document.getElementById('a').value;
        $("#a").keyup(function() {
            if(value.length <=3){
                document.getElementById('browsers').innerHTML = "<option value='Edge'><option value='Firefox'><option value='Microsoft'>";   
            }else if(value.length == 1){
                document.getElementById('browsers').innerHTML = "";
            }
	});
    });
	
    
</script>

<body>
    <input list="browsers" type="text" id="a" autocomplete="off">
    <datalist id="browsers" ></datalist>
    <br>
    <br>
    <h1 id="hello">Hello World!</h1>
</body>

</html>									
