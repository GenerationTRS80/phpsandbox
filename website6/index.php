<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search User</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
  
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