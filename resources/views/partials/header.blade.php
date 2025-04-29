<header class="navbar">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="BA Global Logo">
        <h1>BA GLOBAL<br><span>HEALTH FIRST</span></h1>
    </div>
    <nav class="nav-links">
        <!-- HOME with submenu -->
        <div class="dropdown">
            <a href="" class="dropbtn">HOME</a>
            <div class="dropdown-content">
                <div class="dropdown-main">
                    <div class="dropdown-section">
                        <a href="" class="dropdown-heading">About Us</a>
                    </div>
                    <div class="dropdown-section">
                        <a href="" class="dropdown-heading">Our Mission</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SERVICES with submenu -->
        <div class="dropdown">
            <a href="{{ route('services') }}" class="dropbtn">SERVICES</a>
            <div class="dropdown-content">
                <div class="dropdown-main">
                    <div class="dropdown-section medical-jobs">
                        <a href="{{ route('services.medical_jobs') }}" class="dropdown-heading">Medical Jobs</a>
                        <div class="dropdown-subcontent">
                            <div class="dropdown-column">
                                <a href="{{ route('services.physiotherapy') }}">Physiotherapy</a>
                                <div class="dropdown-subcontent nested">
                                    <a href="{{ route('services.lab_equipment') }}">Equipment</a>
                                    <a href="{{ route('services.consumables') }}">Consumables</a>
                                </div>
                            </div>
                            <div class="dropdown-column">
                                <a href="{{ route('services.laboratory') }}">Laboratory</a>
                                <div class="dropdown-subcontent nested">
                                    <a href="{{ route('services.reagents') }}">Reagents</a>
                                    <a href="{{ route('services.lab_equipment') }}">Equipment</a>
                                    <a href="{{ route('services.consumables') }}">Consumables</a>
                                </div>
                            </div>
                            <div class="dropdown-column">
                                <a href="{{ route('services.equipment') }}">Furnitures</a>
                                <div class="dropdown-subcontent nested">
                                    <a href="{{ route('services.beds') }}">Beds</a>
                                    <a href="{{ route('services.machines') }}">Machines</a>
                                    <a href="{{ route('services.others') }}">Others</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-section non-medical">
                        <a href="{{ route('services.non_medical') }}" class="dropdown-heading non-medical-heading">Non-Medical</a>
                        <div class="dropdown-subcontent">
                            <div class="dropdown-column">
                                <a href="">Section</a>
                            </div>
                            <div class="dropdown-column">
                                <a href="">Ultracs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTACT with submenu -->
        <div class="dropdown">
            <a class="dropbtn">CONTACT</a>
            
        </div>
    </nav>
</header>