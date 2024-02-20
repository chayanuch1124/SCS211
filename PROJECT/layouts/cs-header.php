<nav class="navbar navbar-expand-lg navbar-light">
        <a class="botton creators d-none d-lg-block" onclick="openLoginPopup()"
          ><i class="bi bi-book"> </i>Creators
        </a>
        <a class="navbar-brand d-lg-none" href="cs-1.2.php"
          ><img
            src="https://upload.wikimedia.org/wikipedia/commons/0/09/Naver_Line_Webtoon_logo.png"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto nav">
            <li class="nav-item">
              <a class="nav-link" href="#">ORIGINALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">GENRES</a>
            </li>
            <a class="d-none d-lg-block logo" href="cs-1.2.php"
              ><img
                src="https://upload.wikimedia.org/wikipedia/commons/0/09/Naver_Line_Webtoon_logo.png"
            /></a>
            <li class="nav-item">
              <a class="nav-link" href="#">POPULAR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cs-2.2.php">CANVAS</a>
            </li>
          </ul>
          <div class="row nav-start">
            <div class="col-6">
              <a class="button creators d-lg-none" onclick="openLoginPopup()">
                <i class="bi bi-book"></i> Creators
              </a>
            </div>
            <div class="col-6">
              <div class="nav__actions">
                <!-- search -->
                <i class="bi bi-search nav__search" id="search-btn"></i>
                <!-- login -->
                <i
                  class="bi bi-person-circle nav__login"
                  id="login-btn"
                  onclick="openLoginPopup()"
                ></i>
              </div>
            </div>
          </div>
          <!-- Popup สำหรับ login -->
          <div class="overlay" id="overlay"></div>
          <div class="login-popup" id="login-popup">
            <!-- เนื้อหาของ popup -->
            <a>Log in and enjoy special features.</a>
            <form>
              <div class="txt_field">
                <input type="text" id="username" name="username" required />
                <label for="username">Username</label>
              </div>
              <div class="txt_field">
                <input type="password" id="password" name="password" required />
                <label for="password">Password</label>
              </div>
              <input
                type="button"
                value="Sign up"
                onclick="closeLoginPopup()"
              />
              <input
                type="submit"
                class="login"
                value="Log In"
                onclick="validateForm()"
              />
              <div class="pass" onclick="closeLoginPopup()">
                Forgot Password?
              </div>
              <div class="line"></div>
              
              <div class="social">
                <a href="#" class="facebook">
                  <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="twitter">
                  <i class="bi bi-twitter"></i>
                </a>
                <a href="#" class="line-1">
                  <i class="bi bi-line"></i>
                </a>
                <a href="#" class="google">
                  <i class="bi bi-google"></i>
                </a>
                <a href="#" class="apple">
                  <i class="bi bi-apple"></i>
                </a>
              </div>
            </form>
            <!-- ปุ่มปิด popup -->
            <i class="bi bi-x close-icon" onclick="closeLoginPopup()"></i>
          </div>
        </div>
      </nav>