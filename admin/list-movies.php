
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!-- Include English language -->
    <script src="js/plugins/datepicker/dist/js/i18n/datepicker.en.js"></script>

    <style>
        .page-link {
            background-color: unset !important;
            padding: 6px 12px 6px 12px !important;
            color:white;
            border: none;
        }
        .page-item {
            padding-bottom:4px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
     <div class ="col-sm-12" style="padding-left:0px;padding-right:0px;">
    <div id="main-container">
            <aside id="left-sidebar">
                <div id="nav-brand-container">
                    <div class = "sidebar-row">
                        <a id="nav-brand"> GoodMovies
                        </a>
                        <i id="bars" class="fas fa-bars"></i>
                    </div>
                </div>
                    <div id="profile-pic-container">
                        <div class = "sidebar-row">
                            <img src="../images/admin.jpg" height="60px" width="60px">
                            <ul id="button-container">
                                <li><strong><i>Welcome!</i> John Doe</strong><span class="active"></span></li>
                                <li style="color:#4f5967; font-size:10px;font-weight: 800">ADMINISTRATOR</li>
                                <li>
                                    <button class = "btn btn-edit-profile">Edit Profile</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class = "sidebar-row">
                    <div id="sidebar-items">
                        <ul>
                            <li>
                                <a href="admin.php">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>Dashboard</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a  href="admin.php">
                                    <i class="fas fa-file-video"></i>
                                    <span>Movies</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>

                            </li>
                            <li>
                                <a>
                                    <i class="fas fa-tv"></i>
                                    <span>Genres</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="far fa-images"></i>
                                    <span>Movie Icons</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                            <span style="color:#2d3e50">EXTRAS</span>
                                <li>
                                    <a>
                                        <i class="fas fa-tachometer-alt"></i>
                                        <span>Dashboard</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fas fa-users"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                            <li>
                                <a>
                                    <i class="fas fa-users-cog"></i>
                                    <span>User Config</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="fas fa-money-check-alt"></i>
                                    <span>Payment Methods</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>Invoices</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        <div id="main-panel">
            <div id="notifications-container">
                    <h3>Movies</h3>
                    <ul style="display: flex;margin-left:auto">
                        <li>
                            <a class="nav-link">
                                <i class="fas fa-address-card"></i>
                            </a>

                        </li>
                        <li>
                            <a class="nav-link">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link">
                                <i class="fas fa-bell"></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link">
                                <img src="../images/admin.jpg" height="25px" width="25px">
                            </a>

                        </li>
                        <li>
                            <a class="nav-link">
                                John Doe
                                <i class="fas fa-chevron-down"></i>
                            </a>
                        </li>
                    </ul>
            </div>
            <div class="row">
                <div id="main-panel-left-sidebar">
                    <div id ="add-btn-container">
                        <div class = "sidebar-row">
                            <a href="add-movie.html" class = "btn btn-add">
                                <i class="fas fa-plus"></i>
                                Add New Movie</a>
                        </div>
                    </div>
                    <ul>
                        <span>FEATURED MOVIES</span>
                        <li>Romeo And Juliet</li>
                        <li>Titanic</li>
                        <li>MR Nice Guy</li>
                        <li>Mission Impossible</li>
                        <li>Hitman</li>
                        <hr>
                        <span>FEATURED GENRES</span>
                        <li>Action</li>
                        <li>Commedy</li>
                        <li>Romance</li>
                        <li>Chick Flick</li>
                    </ul>
            </div>
            <div id="users-container">
                <div id="pagination-container">
                    <ul style="display:flex; position:relative;margin-top:6px">
                        <li>Show</li>
                        <li>
                            <select name="per_page" id="per_page">
                                <option >5</option>
                                <option selected>10</option>
                                <option  >15</option>
                                <option >20</option>
                            </select>
                        </li>
                        <li>entries</li>
                    </ul>
                    <ul style="display:flex;margin-left: auto" class="paginator-ul">
                        <li class='page-item active'>
                            <a class = 'page-link'  href='#' class = 'page-link'>1</a>
                        </li><li class='page-item '>
                            <a class = 'page-link'  href='#' class = 'page-link'>2</a>
                        </li>
                        <li class='page-item '>
                            <a class = 'page-link'  href='#' class = 'page-link'>3</a>
                        </li>                    
                    </ul>
                </div>
                <table id="movies">
                    <tr>
                        <th>Movie Title</th> <th>Genre(s)</th> <th>Year Released</th><th>Cover Imagge</th> <th>Actions</th>
                    </tr>
                        <tr>
                                <td>Murder in miami</td>
                                <td>Commedy,Action</td>
                                <td>2019-05-20</td>
                                <td style="width:15px"><img src="../images/movie_covers/murder in miami.PNG" height="25px" width="25px"></td>
                                <td style="width:15px">
                                    <a href="admin.php?action=edit-movie&id=58">edit</a>
                                    <a href="admin.php?action=edit-movie">delete</a>
                                </td>
                        </tr>
                         <tr>
                            <td>Thong girl</td>
                            <td>Commedy</td>
                            <td>2019-05-19</td>
                            <td style="width:15px"><img src="../images/movie_covers/thong_girl.PNG" height="25px" width="25px"></td>
                            <td style="width:15px">
                                <a href="admin.php?action=edit-movie&id=57">edit</a>
                                <a href="admin.php?action=edit-movie">delete</a>
                            </td>
                         </tr>
                        <tr>
                            <td>Things to do</td>
                            <td>Commedy</td>
                            <td>2019-05-26</td>
                            <td style="width:15px"><img src="../images/movie_covers/things to do.PNG" height="25px" width="25px"></td>
                            <td style="width:15px">
                                <a href="admin.php?action=edit-movie&id=56">edit</a>
                                <a href="admin.php?action=edit-movie">delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Court</td>
                            <td>Thriller</td>
                            <td>2019-05-28</td>
                            <td style="width:15px"><img src="../images/movie_covers/court.PNG" height="25px" width="25px"></td>
                            <td style="width:15px">
                                <a href="admin.php?action=edit-movie&id=55">edit</a>
                                <a href="admin.php?action=edit-movie">delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Date or hire</td>
                            <td>Commedy</td>
                            <td>2019-03-04</td>
                            <td style="width:15px"><img src="../images/movie_covers/date_or_hire.PNG" height="25px" width="25px"></td>
                            <td style="width:15px">
                                <a href="admin.php?action=edit-movie&id=54">edit</a>
                                <a href="admin.php?action=edit-movie">delete</a>
                            </td>
                        </tr>
                </table>
            </div>            
        </div>
            <!-- Footer -->
            <footer class="page-footer font-small blue">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2019 Copyright:
                    <a href="https://mdbootstrap.com/education/bootstrap/"> goodmovies</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->
            </div>

        </div>
    </div>
</div>
    </div>
</body>
</html>