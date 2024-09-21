            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                         
                            </li>
<?php if($_SESSION['utype']=='1'):?>
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
</svg> <span> Sub-admins </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subadmins.php">Add Sub-admin</a></li>
                                    <li><a href="manage-subadmins.php">Manage Sub-admin</a></li>
                                </ul>
                            </li>
<?php endif;?>
               


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-dash-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
</svg> <span> Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="add-category.php">Add Category</a></li>
                                    <li><a href="manage-categories.php">Manage Category</a></li>
                                </ul>
                            </li>

    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"> <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-blockquote-right" viewBox="0 0 16 16">
  <path d="M2.5 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1zm10.113-5.373a7 7 0 0 0-.445-.275l.21-.352q.183.111.452.287.27.176.51.428.234.246.398.562.164.31.164.692 0 .54-.216.873-.217.328-.721.328-.322 0-.504-.211a.7.7 0 0 1-.188-.463q0-.345.211-.521.205-.182.569-.182h.281a1.7 1.7 0 0 0-.123-.498 1.4 1.4 0 0 0-.252-.37 2 2 0 0 0-.346-.298m-2.168 0A7 7 0 0 0 10 6.352L10.21 6q.183.111.452.287.27.176.51.428.234.246.398.562.164.31.164.692 0 .54-.216.873-.217.328-.721.328-.322 0-.504-.211a.7.7 0 0 1-.188-.463q0-.345.211-.521.206-.182.569-.182h.281a1.8 1.8 0 0 0-.117-.492 1.4 1.4 0 0 0-.258-.375 2 2 0 0 0-.346-.3z"/>
</svg><span>Sub Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategory.php">Add Sub Category</a></li>
                                    <li><a href="manage-subcategories.php">Manage Sub Category</a></li>
                                </ul>
                            </li>               
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
  <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z"/>
</svg> <span> Posts (News) </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post.php">Add Posts</a></li>
                                    <li><a href="manage-posts.php">Manage Posts</a></li>
                                     <li><a href="trash-posts.php">Trash Posts</a></li>
                                </ul>
                            </li>  
                     

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="aboutus.php">About us</a></li>
                                    <li><a href="contactus.php">Contact us</a></li>
                                </ul>
                            </li>
   <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
  <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
</svg> <span> Comments </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="unapprove-comment.php">Waiting for Approval </a></li>
                                    <li><a href="manage-comments.php">Approved Comments</a></li>
                                </ul>
                            </li>   

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>


                </div>
                <!-- Sidebar -left -->

            </div>