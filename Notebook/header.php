<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NoteBokk</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h1>NoteBokk</h1>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link mr-2 <?php if($_GET['p']=='view') echo 'active';?>" href="?p=view">View</a>
                    <a class="nav-link mr-2 <?php if($_GET['p']=='add') echo 'active';?>" href="?p=add">Add <span class="sr-only">(current)</span></a>
                    <a class="nav-link mr-2 <?php if($_GET['p']=='update') echo 'active';?>" href="?p=update">Update</a>
                    <a class="nav-link mr-2 <?php if($_GET['p']=='delete') echo 'active';?>" href="?p=delete">Delete</a>
                </div>
            </div>
        </nav>
    </header>
    <main>