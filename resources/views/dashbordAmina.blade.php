<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
</head>
<body>
<div class="d-flex shadow-sm bg-light" id="wrapper">
        <div class="" id="sidebar-wrapper">
            <div class="sidebar-heading text-center d-flex flex-column py-4 fs-5  mt-5">
                <div class=" align-items-center">
                    <img   width="70px" height="70px" src="./views/assets/img/profil.jpeg" alt="" class="rounded-circle">
              <h3></h3>
                </div><form action=""method="post">
                <button type="submit" name="logout" class="btn btn-lg btn-block btn-light my-3 mycolor button1 fs-6 ">Log out</button></form> </div>
      <a href="dashboard" type="submit" class="list-group-item list-group-item-action   "><i class="uil uil-chart-bar fs-4 me-2"></i>Dashboard</a>
      <a href="#" type="submit" class="list-group-item list-group-item-action   "><i class="uil uil-medkit me-2 fs-4"></i>Chansons</a>
      <a href="#" type="submit" class="list-group-item list-group-item-action "><i class="uil uil-stopwatch me-2 fs-4"></i>Artistes</a>
      <a href="#" name="appointments-displayer" type="submit" class="list-group-item list-group-item-action "><i class="uil uil-bookmark me-2 fs-4"></i>Autors</a>
        </div>
        <div id="page-content-wrapper" class="w-100" style="height: 100vh; overflow: scroll;">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-filter-left primary-text fs-4 me-3"  id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            </nav>
            <div class="">
                <div class="cover_image " style="background-image: url(./views/assets/img/cover1.png);background-size:cover; border-radius:10px"  >
                    <div class="container mb-4">
                        <div class="row">
                            <div class="col-md-12 p-5 pb-5 text-white">
                                <h5 class="fw-bolder">Welcome !</h5>
                                <p class="fs-4 fw-bold"></p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta ab tempore quo.<br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque tenetur quod cumque?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"></h3> 
                                <p class="fs-5">Nombre total des titres</p>
                            </div>
                            <i class="  uil uil-music fs-1 primary-text border  p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"></h3>
                                <p class="fs-5">Nombre total des artistes</p>
                            </div>
                            <i
                                class=" uil uil-user fs-1 primary-text border  p-3"></i>
                               
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"></h3>
                                <p class="fs-5">Total des admins</p>
                            </div>
                                <i class=" uil uil-user fs-1 primary-text border  p-3"></i>
                        </div>
                    </div>
                    <div class="row my-5">
                    <div class="ms-4 d-flex justify-content-between">
                        <button class="col-md-1 "  aria-pressed="true" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD+</button>
                        <form action="" method="post" class="">
                          <input class="w-95"  type="search" name="search" id="">
                          <button type="submit"> <i class="col-md-1 uil uil-search "></i></button>
                        </form>
                       
                    </div>
                    <div class=" table-responsive ms-4">
                        <table class="table mt-4 rounded-2" style="background-color: #fff; color: #000">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Titre</th>
                                 <th scope="col">Nom de l'artiste</th>
                                 <th scope="col">Album</th>
                                 <th scope="col">Paroles</th>
                                 <th scope="col">Année de création</th>
                                 <th></th>
                                 <th scope="col">Tools</th>
                              </tr>
                           </thead>
                            <tbody>
                                          
                                    <tr>
                                       <th scope="row"></th>
                                       <td>
                                          <p class="text-truncate" style="width:200px"> </p>
                                       </td>
                                      
                                       <td>
                                          <p class="text-truncate" style="width:200px"></p>
                                       </td>
                                       <td></td>
                                       <td > <button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#showParoles" >View Paroles</button></td>
                                       <td></td>
                                       <td></td>
                                       <td>
                                          <div class="d-flex">
                                             <button class="btn btn-primary me-1"  data-bs-toggle="modal" data-bs-target="#exampleModalE">
                                                Edit
                                             </button>
                                             <form action="" method="POST">
                                                 <input type="hidden" name="id_chanson" value="">
                                                 <button type="submit" name="delete" class="btn btn-danger" >Delete</button>
                                              </form>
                                          </div>   
                                       </td>
                                    </tr>
                                            
                           </tbody>
                     </table>
                </div>
        </div>
    </div>
   </div>
</div>
</body>
</html>