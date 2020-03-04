<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="cointainer-fluid">
    <div class="row">
        
        <div class="col-md-4"></div>
        <div class="text-center col-md-4 mt-3 back"><br>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="title"><b><h4>Select Image to Upload</h4></b></label>
        <hr class="mb-3">
        <input type="file" name="files[]" multiple><br>
        
        <br><button type="submit" name="submit">
        <i class="btn btn-primary fa fa-upload" aria-hidden="true"></i>
        Upload</button><hr class="mb-3">
    </form>    
        
        </div>
        <div class="col-md-4"></div>
</div>  


</body>
</html>