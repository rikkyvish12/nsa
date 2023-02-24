<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg"
                data-double-top-nav="data-double-top-nav" style="display: none;">
                <div class="w-100">
                    <div class="d-flex flex-between-center">
                        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop"
                            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                    class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="#">
                            <div class="d-flex align-items-center"><img class="me-2"
                                    src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                                    width="40" /><span class="font-sans-serif">NSA</span></div>
                        </a>
                    </div>
                    <hr class="my-2 d-none d-lg-block" />
                    
                </div>
            </nav>
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div><a class="navbar-brand" href="/dashboard">
                        <div class="d-flex align-items-center py-3"><img class="me-2"
                                src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt=""
                                width="40" /><span class="font-sans-serif">NSA</span></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item">
                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard"
                                    role="button" data-bs-toggle="collapse" aria-expanded="true"
                                    aria-controls="dashboard">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-chart-pie"></span></span><span
                                            class="nav-link-text ps-1">Dashboard</span></div>
                                </a>
                                <ul class="nav collapse show" id="dashboard">
                                    <li class="nav-item"><a class="nav-link active" href="/dashboard">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Default</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/about">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">About</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/gallery">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Gallery</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/event">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Event</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/service">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Our Service</span><span
                                                    class="badge rounded-pill ms-2 badge-soft-success">New</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="/member">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Management</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/contact">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Contact Us</span></div>
                                        </a><!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/support">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Support desk</span><span
                                                    class="badge rounded-pill ms-2 badge-soft-success">New</span>
                                            </div>
                                        </a><!-- more inner pages-->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard"
                    aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="index.html">
                    <div class="d-flex align-items-center"><img class="me-2"
                            src="assets/img/icons/spot-illustrations/falcon.png" alt=""
                            width="40" /><span class="font-sans-serif">falcon</span></div>
                </a>
                <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" id="dashboards">Dashboard</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="dashboards">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a
                                        class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/analytics.html">Analytics</a><a
                                        class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a
                                        class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E
                                        commerce</a><a class="dropdown-item link-600 fw-medium"
                                        href="dashboard/lms.html">LMS<span
                                            class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/project-management.html">Management</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/saas.html">SaaS</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/support-desk.html">Support desk<span
                                            class="badge rounded-pill ms-2 badge-soft-success">New</span></a></div>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </nav>