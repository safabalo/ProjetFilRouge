<nav class="sidebar nav navbar d-flex flex-column vh-100">
                    <div class="navbar-brand d-flex">
                        <span class="iconify" data-icon="healthicons:ministry-of-health-outline" style="color: #2155cd;" data-width="30" data-height="30" id="sidebarToggle"></span>
                        <p>Your Hospital</p>
                    </div>
                    <div class="">
                        <img src=""></img>
                        <p style="color: #2155cd;"><?php echo $_SESSION['nomcomplet']?></p>
                    <div>
                        <ul class="nav d-flex flex-column mb-3" id="list">
                            <li class="nav-items d-flex" style="<?php if(basename($_SERVER["REQUEST_URI"]) == 'patientDoc') echo "background-color:rgb(121, 218, 232);"?>">
                            <span class="iconify" data-icon="healthicons:doctor-male-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                                <a href="patientDoc" class="nav-link">Rendez-vous</a>
                            </li>
                            <li class="nav-items d-flex mb-3 w-100" style="<?php if(basename($_SERVER["REQUEST_URI"]) == 'patientRendez') echo "background-color:rgb(121, 218, 232);"?>">
                                <span class="iconify" data-icon="healthicons:inpatient-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                                <a href="#" class="nav-link">Rendez-vous pris</a>
                            </li>
                            <li class="nav-items d-flex" style="<?php if(basename($_SERVER["REQUEST_URI"]) == 'patientPara') echo "background-color:rgb(121, 218, 232);"?>">
                                <form method="POST" class="w-100 d-flex" action="patientPara" >
                                <!-- <input type="hidden" name="id" value="<//?php echo $_SESSION['id_patient'] ?>"> -->
                                <span class="iconify" data-icon="clarity:settings-line" style="color: #2155cd;" data-width="30" data-height="30"></span>
                                <a href="patientPara" class="nav-link">Parametres</a>
                                <!-- </form> -->
                            </li>
                            <li class="nav-items d-flex mb-3" id="logout">
                                <span class="iconify" data-icon="carbon:logout" style="color: #2155cd;" data-width="30" data-height="30"></span>
                                <a href="LogOut" class="nav-link"> LogOut</a>
                            </li>
                        </ul>
                    </div>
                </nav>