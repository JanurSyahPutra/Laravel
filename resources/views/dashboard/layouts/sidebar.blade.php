<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
            {{-- simbol "*" akan membuat apapun setelah tanda post, akan mengaktifkan tulisan my blog--}}
          <a class="nav-link {{ Request::is('dashboard/blog*') ? 'active' : ''}}" href="/dashboard/blog">
            <span data-feather="file-text"></span>
            My Blog
          </a>
        </li>
      </ul>
    </div>
  </nav>
