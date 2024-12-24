<?php
include('./crud/connexion.php');
?>





<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactify</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-light border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
      <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-12 me-0 " href="#">
          <img src="./img/Ab.png" alt="..." style="width: 80px ;height: 80px;">
        </a>
        <!-- User menu (mobile) -->
        <div class="navbar-user d-lg-none">
          <!-- Dropdown -->
          <div class="dropdown">
            <!-- Toggle -->
            <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar-parent-child">
                <img alt="Image Placeholder" src="./img/Ab.png" class="avatar avatar- rounded-circle">
                <span class="avatar-child avatar-badge bg-success"></span>
              </div>
            </a>
          </div>
        </div>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
          <!-- Navigation -->
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-house"></i> Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-chat"></i> Messages
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-people"></i> Users
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="navbar-divider my-5 opacity-20">
          <!-- Navigation -->

          <ul class="navbar-nav mb-md-4">
            <li>
              <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
                Contacts
                <!-- <span class="badge bg-opacity-30 bg-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">13</span> -->
              </div>
            </li>
            
            <li>
              <a href="#" class="nav-link d-flex align-items-center">
                <div class="me-4">
                  <div class="position-relative d-inline-block text-white">
                    <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar rounded-circle">
                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                  </div>
                </div>

                <div>
                  <span class="d-block text-sm font-semibold">
                    Marie Claire
                  </span>
                  <span class="d-block text-xs text-muted font-regular">
                    Paris, FR
                  </span>
                </div>

                <div class="ms-auto">
                  <i class="bi bi-chat"></i>
                </div>
              </a>
            </li>

            <li>
              <a href="#" class="nav-link d-flex align-items-center">
                <div class="me-4">
                  <div class="position-relative d-inline-block text-white">
                    <span class="avatar bg-opacity-30 bg-warning text-warning rounded-circle">JW</span>
                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                  </div>
                </div>
                <div>
                  <span class="d-block text-sm font-semibold">
                    Michael Jordan
                  </span>
                  <span class="d-block text-xs text-muted font-regular">
                    Bucharest, RO
                  </span>
                </div>
                <div class="ms-auto">
                  <i class="bi bi-chat"></i>
                </div>
              </a>
            </li>

 

          </ul>

          <!-- Push content down -->
          <div class="mt-auto"></div>
          <!-- User (md) -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-person-square"></i> Account
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-box-arrow-left"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
      <!-- Header -->
      <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid">
          <div class="mb-npx">
            <div class="row align-items-center">
              <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight">Gestion The Contact</h1>
              </div>
              <!-- Actions -->
              <div class="col-sm-6 col-12 text-sm-end">
                <div class="mx-n1">
                  <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                    <span class=" pe-2">
                      <i class="bi bi-plus"></i>
                    </span>
                    <span>Create New Contact</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Nav -->
            <ul class="nav nav-tabs mt-4 overflow-x border-0">
              <li class="nav-item ">
                <a href="#" class="nav-link active">All Contact</a>
              </li>
             
            </ul>
          </div>
        </div>
      </header>
      <!-- Main -->
       
      <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">
          <!-- Card stats -->
        

          <div class="card mb-7">
            <div class="card-header">
              <h5 class="mb-0">Applications</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-nowrap">
                <thead class="table-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nom</th>
                    <th scope="col">prénom</th>
                    <th scope="col">photo</th>
                    <th scope="col">email</th>
                    <th scope="col">numéro de téléphone</th>
                    <th class="text-center" scope="col">Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>


                  <tr>

                      <td>
                         1
                        </td>

                    <td>
                        <img  src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                      </td>


                    <td>
                       Kardache
                      </td>
                    <td>
                       Zakaria
                      </td>

                    <td>
                      karadsh@hotmail
                    </td>

                    <td>
                      <img alt="..." src="https://upload.wikimedia.org/wikipedia/commons/2/2c/Flag_of_Morocco.svg" class="avatar avatar-sm rounded-circle me-2">
                      <a class="text-heading font-semibold" href="#">
                        0678900987
                      </a>
                    </td>

                    <td class="text-end">
                        <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                            <i class="bi bi-pencil"></i>
                            </span>
                            <span>Edit</span>
                          </a>
                      <a href="#" class="btn btn-sm btn-neutral">View</a>
                      <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                        <i class="bi bi-trash"></i>
                      </button>
                    </td>

                  </tr>

                

                </tbody>
              </table>
            </div>
          
          </div>
        </div>
      </main>
    </div>
  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>