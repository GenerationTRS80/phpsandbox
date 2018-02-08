<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP - Ajax/JSscript Search User</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
  <script>
      function showSuggestion(sString){
        if(sString.length == 0) {
          
          document.getElementById('output').innerHTML = '';
        
        } else {
          
          // Make a get request to a page using AJAX's  http object xmlhttp
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function(){

            // readystate = 4 request finished and response is ready -- Status = 200 "OK"
            if (this.readyState == 4 && this.status == 200) {

              document.getElementById('output').innerHTML = this.responseText;

            } else {
            // console.log(this.readyState);
            console.log(this.statusText);
            }
          }

          xmlhttp.open("GET", "suggest.php?q="+sString, true);
          xmlhttp.send();

        }
      }
  </script>
  
</head>
<body>
    <div class="container">
      <h1>Search Users</h1>
      <form>
          Search User:<input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
      </form>
      <p>Suggestion: <span id="output" style="font-weighted:bold"></span></p>
   
</body>
</html>