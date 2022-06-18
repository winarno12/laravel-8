 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
     <div class="position-sticky pt-3">
         <ul class="nav flex-column">
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                     href="/dashboard">
                     <i class="bi bi-dice-5-fill"></i>
                     Dashboard
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('dashboard/post*') ? 'active' : '' }}" href="/dashboard/post">
                     <i class="bi bi-dice-5-fill"></i>
                     My Post
                 </a>
             </li>
         </ul>
         @can('admin')
             <h6 class="siddebar-heading d-flex justify-content-between align-item-center px-3 mt-4 mb-1 text-muted">
                 <span>Administrator</span>
             </h6>
             <ul class="nav flex-column">
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('dashboard/category*') ? 'active' : '' }}"
                         href="/dashboard/category">
                         <i class="bi bi-dice-5-fill"></i>
                         Post Categories
                     </a>
                 </li>
             </ul>
         @endcan
     </div>
 </nav>
