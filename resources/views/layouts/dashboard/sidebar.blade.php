<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}"
                            ><i class="icon-speedometer"></i> Dashboard
                            <span class="tag tag-info">NEW</span></a
                        >
                    </li>

                    <li class="nav-title">UI Elements</li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"
                            ><i class="icon-puzzle"></i>Projects</a
                        >
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{route('project.index')}}"
                                    ><i class="icon-puzzle"></i> index </a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{route('project.create')}}"
                                    ><i class="icon-puzzle"></i> Create </a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"
                            ><i class="icon-puzzle"></i>Settings</a
                        >
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{route('setting.index')}}"
                                    ><i class="icon-puzzle"></i> index </a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"
                            ><i class="icon-puzzle"></i>Pages</a
                        >
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{route('about.create')}}"
                                    ><i class="icon-puzzle"></i> About </a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{route('contact.index')}}"
                                    ><i class="icon-puzzle"></i> Contact </a
                                >
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>