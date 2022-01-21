<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors"/>
    <meta name="generator" content="Hugo 0.83.1" />
    <title>Immobliler safi</title>

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" > -->
    <!-- <link rel="stylesheet" href="/fontawesome-free-5.15.3-web/css/all.css"> -->
    <link href="<?php echo URLROOT.DS.'public/css/bootstrap.min22.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT.DS.'public/css/style.css'; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT.DS.'public/fontawesome-free-5.15.3-web/css/all.css'; ?>" rel="stylesheet" >
    
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="col-2 ms-5">
          <a class="navbar-brand" href="#">
            <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'IMMOBLIERSASI-logo'.DS.'vector'.DS.'default-monochrome.svg' ?> " alt="" width="150" height="35">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 ms-5 mb-lg-0">
            <li class="nav-item ms-3">
              <a class="nav-link " aria-current="page" href="#">Accueil</a>
            </li>
            
            
            <li class="nav-item mx-4">
              <a class="nav-link " href="#">A vendre</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link " href="#">A louer</a>
            </li>
          </ul>
          
        
          <form class="d-flex">
            
            <select class="form-control border-primary me-2 w-25" name="selected" id="s" aria-label="Disabled select example" >
              <option value="isbn">ISBN</option>
              <option value="title">Titre</option>
              <option value="author">Auteur</option>
              <option value="category">Categorie</option>
          </select>
            <input class="form-control me-2 w-75" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        
        </div>
      </div>
    </nav>