<!-- Sidebar Start -->
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between" style="padding-left: 70px;">
      <a href="/dashboard" class="text-nowrap logo-img">
          <img src="{{ asset('assets/images/logos/gmf-farm.png') }}" style="max-width: 100px; margin-top: 20px;"/>
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
          <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/dashboard" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ Request::is('sheep*') ? 'active' : '' }}" href="/sheep" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Data Domba</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ Request::is('assessment*') ? 'active' : '' }}" href="/assessment" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:stethoscope-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Pemeriksaan Awal</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ Request::is('vital-sign*') ? 'active' : '' }}" href="/vital-sign" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:health-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Tanda Vital</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ Request::is('radiology*') ? 'active' : '' }}" href="/radiology" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:soundwave-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Radiologi</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
          <span class="hide-menu">Profile</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ Request::is('user*') ? 'active' : '' }}" href="/user" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:user-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Data Pengguna</span>
          </a>
        </li>
        {{-- <li class="sidebar-item">
          <a class="sidebar-link" href="/" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:logout-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Logout</span>
          </a>
        </li> --}}
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->