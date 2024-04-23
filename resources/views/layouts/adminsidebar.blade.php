<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Dashboards</li>
            <li>
                <a href="{{ route('dashboard') }}" class="mm-active">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Domains</li>
            <li>
                <a href="{{ route('admin.domains') }}" class="mm-active">
                    <i class="fa fa-globe"></i>
                    Domains
                </a>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">NEWSLETTER SUBSCRIBE</li>
            <li>
                <a href="{{ route('admin.newsletter.index') }}" class="mm-active">
                    <i class="fa fa-bell" aria-hidden="true"></i>SUBSCRIBE
                </a>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Faq</li>
            <li>
                <a href="{{ route('admin.faq.index') }}" class="mm-active">
                    <i class="fas fa-question-circle"></i>
                    Faq
                </a>
            </li>
        </ul>
    </div>
</div>
