<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body class="bg-dark text-light">
<div class="mt-3 text-center">
        <p class="h2">Online Repository <br>
            <small class="text-muted">Faculty of Natural Sciences at Keele University</small>
        </p>
    </div>
    <br><br><br><br>
    <div id="single-array" class="p-5">
        <script type="text/javascript">
            setInterval("loadXMLDoc()", 1);
        </script>
    </div>

    <br><br><br><br>
    <div class="text-center">
        <a href="main.php">
            <button type="submit" class="btn btn-primary"> <----- </button>
        </a>
    </div>

    <script type="text/javascript">
        function loadXMLDoc(){
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("single-array").innerHTML = xmlhttp.response.split("\n").slice(-200).join("\n");
                }
            }
            xmlhttp.open("GET","data.txt", true);
            xmlhttp.send();
        }

    </script>
</body>

</html>