<header class="header">
  <section class="sidebar-header bg-gray bright-color">
    <section class="d-flex justify-content-between flex-md-row-reverse px-2">
      <span id="sidebar-toggle-show" class="d-inline d-md-none pointer"><i class="fas fa-toggle-off"></i></span>
      <span id="sidebar-toggle-hide" class="d-none d-md-inline pointer"><i class="fas fa-toggle-on"></i></span>
      <span><img class="logo" src="{{ asset('admin-assets/images/logo.png') }}" alt="فلای نست" /></span>
      <span class="d-md-none pointer" id="menu-toggle"><i class="fas fa-ellipsis-h"></i></span>
    </section>
  </section>

  <section class="body-header" id="body-header">
    <section class="d-flex justify-content-between">
      <section>
        <span class="me-5">
          <span class="search-area d-none" id="search-area">
            <i class="fas fa-times pointer" id="search-area-hide"></i>
            <input type="text" class="search-input" id="search-input" />
            <i class="fas fa-search pointer"></i>
          </span>
          <i class="fas fa-search p-1 d-none d-md-inline pointer" id="search-toggle"></i>
        </span>
        <span class="pointer p-1 d-none d-md-inline me-5" id="full-screen">
          <i class="fas fa-compress d-none" id="screen-compress"></i>
          <i class="fas fa-expand" id="screen-expand"></i>
        </span>
      </section>

      <section>
        <span class="ms-2 ms-md-4 position-relative">
          <span class="pointer" id="header-notification-toggle">
            <i class="fas fa-bell position-relative">
              <sub class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger ms-1">4</sub>
            </i>
          </span>
          <section class="header-notifictation rounded" id="header-notification">
            <section class="d-flex justify-content-between">
              <span class="px-2"> نوتیفیکیشن ها </span>
              <span class="badge text-bg-danger p-2 ms-1 my-auto">
                جدید
              </span>
            </section>
            <ul class="list-group rounded px-0">
              <li class="list-group-item list-group-item-action">
                <div class="card notifictation-card">
                  <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center">
                      <img class="img-fluid notifictation-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="..." />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="notifictation-user">محمد هااشمی</h5>
                        <p class="notifictation-text">
                          این یک متن تستی ااست
                        </p>
                        <p class="notifictation-time">
                          <small class="text-body-secondary">30 دقیقه پیش</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item list-group-item-action">
                <div class="card notifictation-card">
                  <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center">
                      <img class="img-fluid notifictation-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="..." />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="notifictation-user">محمد هااشمی</h5>
                        <p class="notifictation-text">
                          این یک متن تستی ااست
                        </p>
                        <p class="notifictation-time">
                          <small class="text-body-secondary">30 دقیقه پیش</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item list-group-item-action">
                <div class="card notifictation-card">
                  <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center">
                      <img class="img-fluid notifictation-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="..." />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="notifictation-user">محمد هااشمی</h5>
                        <p class="notifictation-text">
                          این یک متن تستی ااست
                        </p>
                        <p class="notifictation-time">
                          <small class="text-body-secondary">30 دقیقه پیش</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </section>
        </span>
        <span class="ms-2 ms-md-4 position-relative">
          <span class="pointer" id="header-comment-toggle">
            <i class="fas fa-comment-alt position-relative">
              <sub class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger ms-1">4</sub>
            </i>
          </span>

          <section class="header-comment rounded" id="header-comment">
            <section class="border-bottom px-4">
              <input type="text" class="form-control form-control-sm my-4" placeholder="جستجو..." />
            </section>

            <section class="header-comment-wrapper">
              <ul class="list-group rounded px-0">
                <li class="list-group-item list-group-item-action">
                  <div class="card notifictation-card">
                    <div class="row g-0">
                      <div class="col-md-4 d-flex align-items-center">
                        <img class="img-fluid notifictation-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="..." />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body d-flex justify-content-between align-items-center">
                          <h5 class="comment-user">محمد هااشمی</h5>
                          <span>
                            <i class="fas fa-circle text-success"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </section>
          </section>
        </span>

        <span class="ms-2 ms-md-4 position-relative">
          <span class="pointer" id="header-profile-toggle">
            <span class="header-username">امیر قاسمی</span>
            <i class="fas fa-angle-down"></i>
          </span>

          <section class="header-profile rounded" id="header-profile">
            <section class="list-group rounded">
              <a class="list-group-item list-group-item-action header-profile-link" href="#">
                <i class="fas fa-cog"> </i>تنظیمات
              </a>
              <a class="list-group-item list-group-item-action header-profile-link" href="#">
                <i class="fas fa-user"> </i>کاربر
              </a>
              <a class="list-group-item list-group-item-action header-profile-link" href="#">
                <i class="fas fa-envelope"> </i>پیام ها
              </a>
              <a class="list-group-item list-group-item-action header-profile-link" href="#">
                <i class="fas fa-lock"> </i>قفل صفحه
              </a>
              <a class="list-group-item list-group-item-action header-profile-link" href="#">
                <i class="fas fa-sign-out"> </i>خروج
              </a>
              <a class="list-group-item list-group-item-action header-profile-link" href="#">
                <i class="fas fa-cog"> </i>تنظیمات
              </a>
            </section>
          </section>
        </span>
      </section>
    </section>
  </section>
</header>