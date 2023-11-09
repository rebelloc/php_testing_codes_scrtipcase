<?php 
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="row col-md-12">
   <div class="container col-md-5 mt-4">
   <form class="form">
    <div class="form-group">
        <label for="id"></label>
        <input type="hidden" class="form-control" id="id">
        <small id="" class=""></small>
    </div>
    <div class="form-group">
        <label for="actividad">Actividad</label>
        <input type="text" class="form-control" id="actividad" placeholder="actividad">
    </div>
    <div class="form-group mt-2">
        <label for="actividad">Actividad description</label>
        <textarea type="text" class="form-control" id="actividad" placeholder="actividad" rows="4" cols="50"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
   </div>
<!-- Where the table is goning printing --->
   <div class="col-md-6">
   <table class="table stripped mt-4">
      <thead>
        <tr>
            <th>Id</th>
            <th>Actividad</th>
            <th>description</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><button class="btn btn-warning">Update</button</td>
            <td><button class="btn btn-warning">Delete</button</td>
        </tr>
      </tbody>
    </table>
   </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>