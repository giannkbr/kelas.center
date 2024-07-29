<aside id="sidebar" class="sidebar">

	<ul class="sidebar-nav" id="sidebar-nav">

		<li class="nav-item">
			<a class="nav-link {{ request()->is('admin/dashboard') ? '' : 'collapsed' }}" href="index.html">
				<i class="bi bi-grid"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<li class="nav-heading">Pages</li>

		{{-- <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Data Benefits</span>
            </a>
		</li> --}}

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Master Benefits</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ route('categoryBenefit.index') }}">
                <i class="bi bi-circle"></i><span>Category</span>
            </a>
          </li>
        </ul>
      </li>

	</ul>

</aside>
