<div>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="bg-dark">
            <div class="sidebar-header bg-dark">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="bg-dark dropdown-toggle">Home</a>
                    <ul class="bg-dark collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle bg-dark">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download">Download source</a>
                </li>
                <li>
                    <a href="#" class="article">Back to article</a>
                </li>
            </ul>
        </nav>


        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <button type="button" id="sidebarCollapse" class="btn btn-dark ">
                            <i class="fas fa-align-left"></i>
                    </button>
                <div class="container">


                         <!-- Logo -->
                    {{-- <a class="navbar-brand me-4" href="/">
                        <x-jet-application-mark width="36" />
                    </a> --}}
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            {{-- <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-jet-nav-link> --}}
                            <div class="input-group mr-5">
                            <div id="search-autocomplete" class="form-outline">
                                <input type="search" placeholder="Search" id="form1" class="form-control" />
                            </div>
                            <button type="button" class="btn btn-dark">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav align-items-baseline">
                            <!-- Teams Dropdown -->
                            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                <x-jet-dropdown id="teamManagementDropdown">
                                    <x-slot name="trigger">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Team Management -->
                                        <h6 class="dropdown-header">
                                            {{ __('Manage Team') }}
                                        </h6>

                                        <!-- Team Settings -->
                                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-jet-dropdown-link>

                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('Create New Team') }}
                                            </x-jet-dropdown-link>
                                        @endcan

                                        <hr class="dropdown-divider">

                                        <!-- Team Switcher -->
                                        <h6 class="dropdown-header">
                                            {{ __('Switch Teams') }}
                                        </h6>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" />
                                        @endforeach
                                    </x-slot>
                                </x-jet-dropdown>
                            @endif

                            <!-- Settings Dropdown -->
                            @auth
                                <x-jet-dropdown id="settingsDropdown">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <span class="mx-3"> {{ Auth::user()->name }}</span><img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        @else
                                            {{ Auth::user()->name }}

                                            <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-jet-dropdown-link href="#">
                                            {{ __('Produt') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </x-jet-dropdown-link>

                                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                                {{ __('API Tokens') }}
                                            </x-jet-dropdown-link>
                                        @endif

                                        <hr class="dropdown-divider">

                                        <!-- Authentication -->
                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                            {{ __('Log out') }}
                                        </x-jet-dropdown-link>
                                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </x-slot>
                                </x-jet-dropdown>
                            @endauth
                        </ul>
                    </div>
                </div>

            </nav>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
    const basicAutocomplete = document.querySelector('#search-autocomplete');
    const data = ['One', 'Two', 'Three', 'Four', 'Five'];
    const dataFilter = (value) => {
    return data.filter((item) => {
        return item.toLowerCase().startsWith(value.toLowerCase());
    });
    };

    new mdb.Autocomplete(basicAutocomplete, {
    filter: dataFilter
    });
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</div>
