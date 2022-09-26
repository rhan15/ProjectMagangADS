<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800;900&display=swap">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title>User Roles</title>
</head>
<body>
    {{-- <nav class="sidebar">
        <div class="text">Side Menu</div>
        <ul>
            <li><a href="#1">Dashboard</a></li>
            <li>
                <a href="#2" class="feat-btn">Features
                    <span class="feat-rotate fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="#3">Pages</a></li>
                    <li><a href="#4">Elements</a></li>
                </ul>
            </li>
            <li>
                <a href="#5" class="serv-btn">Services
                    <span class="serv-rotate fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="#6">App Design</a></li>
                    <li><a href="#7">Web Design</a></li>
                </ul>
            </li>
            <li><a href="#8">Portofolio</a></li>
            <li><a href="#9">overview</a></li>
            <li><a href="#10">shortcut</a></li>
            <li><a href="#11 ">feedback</a></li>

        </ul>
    </nav>
    <script>
        $('.feat-btn').click(function(){
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .feat-rotate').toggleClass("rotate");
        });
        $('.serv-btn').click(function(){
            $('nav ul .serv-show').toggleClass("show");
            $('nav ul .serv-rotate').toggleClass("rotate");
        });
        $('nav ul li').click(function(){
            $("nav ul li.active").removeClass("active");
            $(this).addClass("active");
        }); 
        $('nav ul li ul li a').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        }); 
    </script> --}}
            
        




    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <nav class="sidebar">
        <div class="text">Side Menu</div>
        <ul>
            <li>
                <a href="#2" class="feat-btn">User Management
                    <span class="feat-rotate fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="#3">Admin</a></li>
                    <li><a href="#5">Users</a></li>
                    <li><a href="#4">Reseller</a></li>
                    <li><a href="#4">Supliers</a></li>
                    <li><a href="#4">Role & Permissions</a></li>
                </ul>
            </li>
            <li><a href="#8">Kategori</a></li>
            <li><a href="#9">Payment Method</a></li>
            <li><a href="#10">Config Home Screen</a></li>   
            <a>ADMINISTRATION</a>
            <li><a href="#4">Settings</a></li>

        </ul>
    </nav>
    <script>
        $('.feat-btn').click(function(){
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .feat-rotate').toggleClass("rotate");
        });
        $('.serv-btn').click(function(){
            $('nav ul .serv-show').toggleClass("show");
            $('nav ul .serv-rotate').toggleClass("rotate");
        });
        $('nav ul li').click(function(){
            $("nav ul li.active").removeClass("active");
            $(this).addClass("active");
        }); 
        $('nav ul li ul li a').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        }); 
    </script>
        </div>
        <div class="content">
            <div>
                <nav class="navbar navbar-light py-3 " id="navbar_top">
                    <span class="navbar-brand ml-2" id="name"><a class="pr-1" href="">Hilmi Hidayat</a>|<a class="pl-1" href="">Super Admin</a></span>
                    <a href="#66"><span class="fa-solid fa-power-off" id="pwr_btn"></span></a>
              </nav>
            </div>
            <div class="" id="role_tab">
                <div class="title ml-4 mt-6 font-weight-bolder">
                    <a href="">Daftar Role</a>
                </div>
                <div class="flex-lg-row justify-content-center mx-4 mt-3 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" id="role">
                    <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <th scope="col">ROLE</th>
                            <th scope="col" class="col-7">PERMISSIONS</th>
                            <th scope="col" class="col-3 ">ACTIONS</th>
                          </tr>
                          <tr>
                            <td>Super Admin</td>
                            <td>manage orders, manage product registration, manage products, manage supliers, manage categories, manage resellers, manage recepients, manage sliders, manage flash sales, manage vouchers, manage registrations, ,manage users, assign role, assign permissions</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" id="action_button" data-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Admin</td>
                            <td>manage recepients, manage sliders, manage flash sales, manage vouchers, manage registrations, ,manage users, assign role, assign permissions</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" id="action_button" data-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Bumdes</td>
                            <td>manage sliders, manage flash sales, manage vouchers, manage registrations, ,manage users, assign role, assign permissions</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" id="action_button" data-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>