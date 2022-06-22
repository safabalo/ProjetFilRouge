<nav class="sidebar nav navbar d-flex flex-column">
                <div class="navbar-brand d-flex">
                    <span class="iconify" data-icon="healthicons:ministry-of-health-outline" style="color: #2155cd;" data-width="30" data-height="30" id="sidebarToggle"></span>
                    <p>Your Hospital</p>
                </div>
                <div>
                    <ul class="nav d-flex flex-column mb-3" id="list">
                        <li class="nav-items d-flex" style="<?php if(basename($_SERVER["REQUEST_URI"]) == 'adminDash') echo "background-color:rgb(121, 218, 232);"?>">
                            <span class="iconify pt-2" data-icon="bi:columns-gap" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="adminDash" class="nav-link" >Home</a>
                        </li>
                        <li class="nav-items d-flex mb-3 mt-3" style="<?php if(basename($_SERVER["REQUEST_URI"]) == 'adminDoc') echo "background-color:rgb(121, 218, 232);"?>">
                            <span class="iconify" data-icon="healthicons:doctor-male-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="adminDoc" class="nav-link">Docteurs</a>
                        </li>
                        <li class="nav-items d-flex mb-3" style="<?php if(basename($_SERVER["REQUEST_URI"]) == 'adminPat') echo "background-color:rgb(121, 218, 232);"?>">
                            <span class="iconify" data-icon="healthicons:inpatient-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="adminPat" class="nav-link">Patients</a>
                        </li>
                        <li class="nav-items d-flex">
                            <span class="iconify" data-icon="clarity:settings-line" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="" class="nav-link">Paramètres</a>
                        </li>
                        <li class="nav-items d-flex mb-3" id="logout">
                            <span class="iconify" data-icon="carbon:logout" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="LogOut" class="nav-link"> LogOut</a>
                        </li>
                    </ul>
                </div>
            </nav>