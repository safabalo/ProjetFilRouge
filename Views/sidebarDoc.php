<nav class="sidebar nav navbar d-flex flex-column vh-100">
                <div class="navbar-brand d-flex">
                    <span class="iconify" data-icon="healthicons:ministry-of-health-outline" style="color: #2155cd;" data-width="30" data-height="30" id="sidebarToggle"></span>
                    <p>Your Hospital</p>
                </div>
                <div>
                    <ul class="nav d-flex flex-column mb-3" id="list">
                        <input type="hidden" name="id_doctor" value="<?php echo $_SESSION["id_doctor"] ?>">
                        <li class="nav-items d-flex" style="<?php if(basename($_SERVER["REQUEST_URI"]) == 'docDash') echo "background-color:rgb(121, 218, 232);"?>">
                        <span class="iconify" data-icon="healthicons:doctor-male-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="docDash" class="nav-link">Rendez-vous</a>
                        </li>
                        <li class="nav-items d-flex mb-3">
                            <span class="iconify" data-icon="healthicons:inpatient-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="#" class="nav-link">Symptomes</a>
                        </li>
                        <li class="nav-items d-flex">
                            <span class="iconify" data-icon="clarity:settings-line" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="#" class="nav-link">Parametres</a>
                        </li>
                        <li class="nav-items d-flex mb-3" id="logout">
                            <span class="iconify" data-icon="carbon:logout" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="LogOut" class="nav-link"> LogOut</a>
                        </li>
                    </ul>
                </div>
            </nav>