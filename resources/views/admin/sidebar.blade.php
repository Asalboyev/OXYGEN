<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span class="logo-name">Otika</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>
      <li class="dropdown">
        <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
        <li class="dropdown ">
            <a href="{{ route('admin.projects.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Projects</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.d_projects.index') }}" class="nav-link"><i data-feather="monitor"></i><span>D Projects</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.posts.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Posts</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.words.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Words</span></a>
        </li>


    </ul>
  </aside>
</div>
