<header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-2">
          <div class="header-left d-flex align-items-center">
            <div class="menu-toggle-btn">
              <button
                id="menu-toggle"
                class="main-btn primary-btn btn-hover"
              >
                <i class="lni lni-menu"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-md-10 col-10">
          <div class="header-right">
            <div class="header-search d-none d-md-flex">
              <form action="#">
                <input type="text" placeholder="Search..." />
                <button><i class="lni lni-search-alt"></i></button>
              </form>
            </div>
            <!-- notification start -->
            <div class="notification-box ml-15 d-none d-md-flex">
              <button
                class="dropdown-toggle"
                type="button"
                id="notification"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="lni lni-alarm"></i>
                <span>2</span>
              </button>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="notification"
              >
                <li>
                  <a href="#0">
                    <div class="image">
                      <img src="assets/images/lead/lead-6.png" alt="" />
                    </div>
                    <div class="content">
                      <h6>
                        John Doe
                        <span class="text-regular">
                          comment on a product.
                        </span>
                      </h6>
                      <p>
                        Lorem ipsum dolor sit amet, consect etur adipiscing
                        elit Vivamus tortor.
                      </p>
                      <span>10 mins ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#0">
                    <div class="image">
                      <img src="assets/images/lead/lead-1.png" alt="" />
                    </div>
                    <div class="content">
                      <h6>
                        Jonathon
                        <span class="text-regular">
                          like on a product.
                        </span>
                      </h6>
                      <p>
                        Lorem ipsum dolor sit amet, consect etur adipiscing
                        elit Vivamus tortor.
                      </p>
                      <span>10 mins ago</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <!-- notification end -->
            <!-- message start -->
            <div class="header-message-box ml-15 d-none d-md-flex">
              <button
                class="dropdown-toggle"
                type="button"
                id="message"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="lni lni-envelope"></i>
                <span>3</span>
              </button>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="message"
              >
                <li>
                  <a href="#0">
                    <div class="image">
                      <img src="assets/images/lead/lead-5.png" alt="" />
                    </div>
                    <div class="content">
                      <h6>Jacob Jones</h6>
                      <p>Hey!I can across your profile and ...</p>
                      <span>10 mins ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#0">
                    <div class="image">
                      <img src="assets/images/lead/lead-3.png" alt="" />
                    </div>
                    <div class="content">
                      <h6>John Doe</h6>
                      <p>Would you mind please checking out</p>
                      <span>12 mins ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#0">
                    <div class="image">
                      <img src="assets/images/lead/lead-2.png" alt="" />
                    </div>
                    <div class="content">
                      <h6>Anee Lee</h6>
                      <p>Hey! are you available for freelance?</p>
                      <span>1h ago</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <!-- message end -->
            <!-- profile start -->
            <div class="profile-box ml-15">
              <button
                class="dropdown-toggle bg-transparent border-0"
                type="button"
                id="profile"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <div class="profile-info">
                  <div class="info">
                    <div class="image">
                      <img
                        src="{{ asset('assets/images/profile/profile-image.png') }}"
                        alt=""
                      />
                      <span class="status"></span>
                    </div>
                  </div>
                </div>
              </button>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="profile"
              >
                <h6>John Doe</h6>
                <li>
                  <a href="#0">
                    <i class="lni lni-user"></i> View Profile
                  </a>
                </li>
                <li>
                  <a href="#0">
                    <i class="lni lni-alarm"></i> Notifications
                  </a>
                </li>
                <li>
                  <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                </li>
                <li>
                  <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                </li>
                <li>
                  <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                </li>
              </ul>
            </div>
            <!-- profile end -->
          </div>
        </div>
      </div>
    </div>
  </header>