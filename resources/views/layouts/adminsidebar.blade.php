<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <!-- <li class="app-sidebar__heading">Dashboard</li> -->
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
            {{-- <li class="app-sidebar__heading">Domains</li> --}}
            <li>
                <a href="{{ route('admin.domains') }}" class="mm-active">
                    <i class="fa fa-globe"></i>
                    Domains<i class="fa fa-angle-down" style="margin-left: 100px;"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin.domains') }}" class="mm-active">
                            Domains
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.domainmedia') }}" class="mm-active">
                            Domains Media
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.domain-types.index') }}" class="mm-active">
                            Domain Types
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.domaincategories.index') }}" class="mm-active">
                            Domain categories
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.domainsold.index') }}" class="mm-active">
                            Sold Domains
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            {{-- <li class="app-sidebar__heading">NEWSLETTER SUBSCRIBE</li> --}}
            <li>
                <a href="{{ route('admin.newsletter.index') }}" class="mm-active">
                    <i class="fa fa-bell" aria-hidden="true"></i>SUBSCRIBE
                </a>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            {{-- <li class="app-sidebar__heading">NEWSLETTER SUBSCRIBE</li> --}}
            <li>
                <a href="{{ route('admin.offers.index') }}" class="mm-active">
                    <i class="fa fa-gg-circle" aria-hidden="true"></i>OFFER
                </a>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            {{-- <li class="app-sidebar__heading">Faq</li> --}}
            <li>
                <a href="{{ route('admin.faq.index') }}" class="mm-active">
                    <i class="fas fa-question-circle"></i>
                    Faq
                </a>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            {{-- <li class="app-sidebar__heading">Static Page</li> --}}
            <li>
                <a href="{{ route('admin.StaticPage.index') }}" class="mm-active">
                    <i class="fas fa-square"></i>
                    Static Page
                </a>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            {{-- <li class="app-sidebar__heading">Blogs</li> --}}
            <li>
                <a href="{{ route('admin.blogs.index') }}" class="mm-active">
                    <i class="fa fa-sticky-note"></i>
                    Blog
                </a>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            {{-- <li class="app-sidebar__heading">Blogs</li> --}}
            <li>
                <a href="{{ route('admin.contacts.index') }}" class="mm-active">
                    <i class="fa fa-envelope"></i>
                    Contact
                </a>
            </li>
        </ul>
    </div>
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            {{-- <li class="app-sidebar__heading">Blogs</li> --}}
            <li>
                <a href="{{ route('admin.news.index') }}" class="mm-active">
                    <i class="fas fa-newspaper"></i>
                    News
                </a>
            </li>
        </ul>
    </div>
</div>
