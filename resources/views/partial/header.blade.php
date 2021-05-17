<!-- BEGIN:: Header -->
<div class="masterpage-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- logo wrapper -->
        <a class="navbar-brand" href="/">
            <img src="{{asset('images/tranich.png')}}" alt="tranich logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- masterpage menue -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'project' ? 'active' : ''}}" href="{{ url('/project') }}">@lang('navbar-lan.project_menu')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'service' ? 'active' : ''}}" href="{{ url('/service') }}">@lang('navbar-lan.service_menu')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'solution' ? 'active' : ''}}" href="{{ url('/solution') }}">@lang('navbar-lan.solution_menu')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'about' ? 'active' : ''}}" href="{{ url('/about') }}">@lang('navbar-lan.about_menu')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'contact' ? 'active' : ''}}" href="{{ url('/contact') }}">@lang('navbar-lan.contact_menu')</a>
                </li>
                <li class="nav-item">
                    <a id="lan-url" class="nav-link" href="{{ url('/locale','Khmer') }}">
                        <span id="lan-text">ភាសារខ្មែរ</span>
                    </a>
                </li>

            </ul>
        </div>

    </nav>

</div>
<!-- ENG:: Header -->