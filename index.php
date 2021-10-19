<?php


function split_name($fullName, $allNames) {
  
  $fullName = trim($fullName);
  $last_name = (strpos($fullName, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $fullName);
  $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $fullName ) );
  $doneName = $last_name .", ". $first_name ." ". $allNames;
  return $doneName;
}
  
 $output = split_name($_GET["name"], $_GET["nameList"]);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Form Project</title>
  </head>
  <body>
    <div class="container">
      <h1>Add Names</h1>
      
      
        <form method="get" action="index.php" class="row g-3">
        <div class="col-sm-3">
          <button type="submit" class="btn btn-primary">Add Names</button>
          <button  action="index.php" class="btn btn-primary">Clear Names</button>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Enter Name</label>
            <input type="text" name ="name" class="form-control" id="name" >
            </div>
          <div class="mb-3">
            <label for="nameList" class="form-label">List of Names</label>
            <textarea class="form-control" name="nameList" id="nameList" rows="3"><?php echo $output ?></textarea>
          </div>    
          </form>
        
          
        
    </div>    

  </body>
</html>