<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
   <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
       data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
       aria-controls="navbarVerticalCollapse" aria-expanded="false"
       aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
               class="toggle-line"></span></span></button>
   <a class="navbar-brand me-1 me-sm-3" href="index.html">
       <div class="d-flex align-items-center"><img class="me-2"
               src="assets/img/icons/spot-illustrations/falcon.png" alt=""
               width="40" /><span class="font-sans-serif">NSA</span></div>
   </a>
  
   <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
       <li class="nav-item">
           <div class="theme-control-toggle fa-icon-wait px-2"><input
                   class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                   type="checkbox" data-theme-control="theme" value="dark" /><label
                   class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                   for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                   title="Switch to light theme"><span
                       class="fas fa-sun fs-0"></span></label><label
                   class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                   for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                   title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
           </div>
       </li>
       
       
    
       <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
               role="button" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
               <div class="avatar avatar-xl">
                   <img class="rounded-circle" src="assets/img/team/3-thumb.png"
                       alt="" />
               </div>
           </a>
           <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
               aria-labelledby="navbarDropdownUser">
               <div class="bg-white dark__bg-1000 rounded-2 py-2">
                   <a class="dropdown-item fw-bold text-warning" href="#!"><span
                           class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#!">Set status</a>
                   <a class="dropdown-item" href="pages/user/profile.html">Profile &amp;
                       account</a>
                   <a class="dropdown-item" href="#!">Feedback</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                   <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
               </div>
           </div>
       </li>
   </ul>
</nav>

<script>
   var navbarPosition = localStorage.getItem('navbarPosition');
   var navbarVertical = document.querySelector('.navbar-vertical');
   var navbarTopVertical = document.querySelector('.content .navbar-top');
   var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
   var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
   var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

   if (localStorage.getItem('navbarPosition') === 'double-top') {
       document.documentElement.classList.toggle('double-top-nav-layout');
   }

   if (navbarPosition === 'top') {
       navbarTop.removeAttribute('style');
       navbarTopVertical.remove(navbarTopVertical);
       navbarVertical.remove(navbarVertical);
       navbarTopCombo.remove(navbarTopCombo);
       navbarDoubleTop.remove(navbarDoubleTop);
   } else if (navbarPosition === 'combo') {
       navbarVertical.removeAttribute('style');
       navbarTopCombo.removeAttribute('style');
       navbarTop.remove(navbarTop);
       navbarTopVertical.remove(navbarTopVertical);
       navbarDoubleTop.remove(navbarDoubleTop);
   } else if (navbarPosition === 'double-top') {
       navbarDoubleTop.removeAttribute('style');
       navbarTopVertical.remove(navbarTopVertical);
       navbarVertical.remove(navbarVertical);
       navbarTop.remove(navbarTop);
       navbarTopCombo.remove(navbarTopCombo);
   } else {
       navbarVertical.removeAttribute('style');
       navbarTopVertical.removeAttribute('style');
       navbarTop.remove(navbarTop);
       navbarDoubleTop.remove(navbarDoubleTop);
       navbarTopCombo.remove(navbarTopCombo);
   }
</script>