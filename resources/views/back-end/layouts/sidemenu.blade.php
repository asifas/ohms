<div class="sidemenu-area">
    <div class="sidemenu-header">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('assets/img/small-logo.png') }}" alt="image">
            <span>OHMS</span>
        </a>

        <div class="burger-menu d-none d-lg-block">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>
    </div>

    <div class="sidemenu-body">
        <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
            <li class="nav-item-title">
                Main
            </li>

            <li class="nav-item mm-active">
                <a href="{{ route('home') }}" class="nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-home-circle'></i></span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            @if(Auth::user()->user_type == '1X101')
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">My Appointment</span>
                    </a>

                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="{{ route('appointment.list') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">My Appointments</span>
                            </a>
                            <a href="{{ route('appointment') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Appointment Form</span>
                            </a>

                        </li>
                    </ul>
                </li>
            @endif

            @if(Auth::user()->user_type == '7X707')
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Department</span>
                    </a>

                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="{{ route('department') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Create Department</span>
                            </a>
                            <a href="{{ route('departments') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Department List</span>
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Bed Management</span>
                    </a>

                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="{{ route('bed.floor') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Bed Floor</span>
                            </a>
                            <a href="{{ route('bc.index') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Bed Category</span>
                            </a>
                            <a href="{{ route('b.index') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Bed</span>
                            </a>

                        </li>
                    </ul>
                </li>
            @endif
            @if(Auth::user()->user_type == '7X707')
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Doctor</span>
                    </a>

                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="{{ route('doctor.add') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Add Doctor</span>
                            </a>
                            <a href="{{ route('doctor.list') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Doctor List</span>
                            </a>

                        </li>
                    </ul>
                </li>
            @endif
            @if(Auth::user()->user_type == '5X505')
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Patient List</span>
                    </a>

                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">List</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(Auth::user()->user_type == '7X707')
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Medicine Store</span>
                    </a>
                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="{{ route('com.index') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Add Company</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mc.index') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Medicine Category List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('medicine.index') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Medicine List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Blood Bank</span>
                    </a>
                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="{{ route('donor.index') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Donor List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blood.index') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Blood Bank</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Appointments</span>
                    </a>
                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="{{ route('appointment.list') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Patient</span>
                    </a>
                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="{{ route('in.patient.list') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">In Patient</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('out.patient.list') }}" class="nav-link">
                                <span class="icon"><i class='bx bxs-inbox'></i></span>
                                <span class="menu-title">Out Patient</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Prescription</span>
                    </a>

                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="{{route('prescription.index')}}" class="nav-link">
                                <span class="icon"><i class='bx bxs-badge-check'></i></span>
                                <span class="menu-title">Prescription List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                        <span class="icon"><i class='bx bx-cog'></i></span>
                        <span class="menu-title">Setting</span>
                    </a>

                    <ul class="sidemenu-nav-second-level">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="icon"><i class='bx bxs-badge-check'></i></span>
                                <span class="menu-title">Change Logo</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>
