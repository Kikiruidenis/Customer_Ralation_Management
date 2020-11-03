<div>
    @include('include.navbar')
</div>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<br>
<br>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="http://127.0.0.1:8000">
                CRM_Laravel
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                                                <li class="nav-item dropdown">
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="WMrMjupBjUp96mfkJANQSy1p0MNo0mYrdDKbtYpL">                                    </form>
                            </div>
                        </li>
                                        </ul>
            </div>
        </div>
    </nav>