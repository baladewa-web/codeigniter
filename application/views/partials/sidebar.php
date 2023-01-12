<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <h3 class="text-primary">APPS<h3>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
              <a href="<?php echo site_url('dashboard/index') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <!-- Pages -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            
            <!-- MENU -->
            <li class="menu-item <?= $this->uri->segment(1) == 'page' ? 'open active' : '' ?>">
              <a href="javascript:void(0)" class="menu-link menu-toggle ">
              <i class="menu-icon tf-icons bx bxs-file"></i>
                <div data-i18n="Extended UI">Data</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item <?= $this->uri->segment(2) == 'list' ? 'active' : '' ?>">
                  <a href="<?php echo site_url('page/list') ?>" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">List Data</div>
                  </a>
                </li>
                <li class="menu-item <?= $this->uri->segment(2) == 'create' ? 'active' : '' ?>">
                  <a href="<?php echo site_url('page/create') ?>" class="menu-link">
                    <div data-i18n="Text Divider">Create Data</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Account -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Account</span></li>
            
            <!-- Extended components -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div data-i18n="Extended UI">Account</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">List Account</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Create Account</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                <i class="menu-icon tf-icons bx bx-power-off"></i>
                <div data-i18n="Boxicons">Log Out</div>
              </a>
            </li>
          </ul>
        </aside>