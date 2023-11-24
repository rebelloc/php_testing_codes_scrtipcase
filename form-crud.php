<?php 
   include 'fetch-information.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
          label{
            font-weight: bold;
          }
          .labell{
            font-weight: bold;
          }
          .main-form{
             padding-top: 50px; 
             padding-left: 50px;
             padding-bottom: 50px; 
             padding-right: 50px;
             /* background-color: yellow; */
          }
    </style>
</head>
<body>

   <?php include 'form-input.php' ?>
   <?php include 'view-table.php' ?>

<!-- Where the table is goning printing --->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>