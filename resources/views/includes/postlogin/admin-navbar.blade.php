
<!-- Main Sidebar Container -->
  <aside class="main-sidebar bg-light  elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <!-- <img src="https://careerlinked.org/images/icon.png" style="width: 30px;" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light"><img src="images/margdarshak-logo.png" style="width:150px;"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://margdarshak.org/public/uploads/user_img/RP.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
               <a href="#" class="d-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RP Singh &nbsp;&nbsp;<i class="fas fa-ellipsis-v"></i></a>

                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item edit" href="edit-profile.php"><i class="nav-icon fas fa-edit"></i><span>Edit Profile</span></a>
                      <a class="dropdown-item edit" href="#"><i class="nav-icon fas fa-key"></i><span>Password</span></a>
                       <a class="dropdown-item edit" href="#"><i class="fas fa-user-plus"></i><span>Team</span></a>
                       <a class="dropdown-item edit" href="#"><i class="fas fa-file-signature"></i><span>Authorize</span></a>
                      <a class="dropdown-item edit" href="#"><i class="nav-icon fas fa-sign-out-alt"></i><span>Logout</span></a>
                    </div>
                          
        </div>
        
      </div>
     <div class="income_" style="">
         <ul class="list_">
            <li><span><img src="images/work.png">Work</span><span>₹400000</span></li>
            <li><span><img src="images/wallet.png">Ewallet</span><span>₹4000</span></li>
            <li><span><img src="images/account.png">Account</span><span>₹400000</span></li>
            <li><span><img src="images/rupee.png">Income</span><span>₹0</span></li>
            <li><span><img src="images/money.png">Bonus</span><span>₹400</span></li>
              <div class="income_content"> 
           <p>Validity of ewallet amount is till last date of the month</p>
           <a href="income-dashboard.php">View</a>
         </div>
         </ul>
       
     </div>
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="admin-dashboard.php" class="nav-link">
         
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                
              </p>
            </a>
          </li>
         
      
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                 
                <a href="#" data-toggle="modal" data-target="#modalLoginForm1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add user</p>
                </a>
              </li>
       
             
            </ul>
          </li>
  
  
            <li class="nav-item">
                        <a href="{{route('user.masterTable')}}" class="nav-link">
                            <i class="nav-icon fas fa-book-reader"></i>
                            <p>
                                Master Table
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('user.studySchedule')}}" class="nav-link">
                            <i class="nav-icon fas fa-book-reader"></i>
                            <p>
                                Study Schedule
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.teacherSchedule')}}" class="nav-link">
                            <i class="nav-icon fas fa-book-reader"></i>
                            <p>
                                Teacher Schedule
                            </p>
                        </a>
                    </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
