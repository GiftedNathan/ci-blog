<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootswatch/bootstrap.min.css')?>">
  <title>Home</title>
</head>

<body>
  
  <header class="d-flex flex-column flex-md-row flex-wrap justify-content-between aligh-items-center col-md-flex-column bg-primary py-2 px-3">
    <a href="<?php echo base_url('/')?>" class="text-light text-center fs-4">CiBlog</a>
    <nav class="nav nav-masthead justify-content-center ">
      <a class="nav-link fw-bold py-1 px-3 active" aria-current="page" href="<?php echo base_url()?>/">Home</a>
      <a class="nav-link fw-bold py-1 px-3" href="<?php echo base_url('/about')?>">About</a>
      <a class="nav-link fw-bold py-1 px-3" href="<?php echo base_url('/blog')?>">Blog</a>
      <a class="nav-link fw-bold py-1 px-3" href="<?php echo base_url('/blog/create')?>">Create post</a>
      <a class="nav-link fw-bold py-1 px-3" href="<?php echo base_url('/blog/manage-posts')?>">Manage posts</a>
    </nav>
  </header>