<header id="header" class="module header bg-primary text-white" data-module="header">
    {{-- <nav class="container navbar navbar-expand-lg justify-content-lg-between">
        <div class="header-mobile">
            <div class="col-mb-8">
                <a id="header-logo" class="navbar-brand header-logo" title="Logo" href="{!! App::getLogo()['href'] !!}">
                    <img src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['alt'] !!}">
                </a>
            </div>
            <div class="col-mb-4">
                <button class="navbar-toggler hamburger-menu" type="button" data-toggle="collapse"
                    data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icomoon icon-close-menu d-none"></span>
                    <span class="sr-only">Menu</span>
                </button>
            </div>
        </div>

        <div class="navbar-collapse main-menu" id="main-menu" data-module="menu">
            <ul class="main-menu-ul navbar-nav ml-lg-auto">
                @php
                wp_nav_menu(array(
                'theme_location' => 'primary',
                'items_wrap' => '%3$s',
                'container' => false,
                'depth' => 2,
                // 'walker' => new App\Libs\Services\C8ThemeHeaderMenu()
                ));
                @endphp
                <li class="action-search">
                    <a href="javascript:void(0)" class="is-open-search">
                        <em class="icomoon icon-icon-search"></em>
                    </a>
                </li>
            </ul>
        </div>
    </nav> --}}

    <div class="container">
      <div class="d-md-flex justify-content-between pt-1" id="header-top">
          <div id="header-top-left">
              <ul class="d-flex">
                  <li class="px-2 border-right border-white"><a href="/admin" class="link-white">BOUTIQUE</a></li>
                  <li class="px-2">
                    <span>Kết nối </span>
                    <a href="#" class="link-white"><i class="fab fa-facebook"></i></a>
                    <span>&nbsp;</span>
                    <a href="#" class="link-white"><i class="fab fa-instagram"></i></a>
                  </li>
              </ul>
          </div>
          <div class="text-md-right" id="header-top-right">
              <ul class="d-flex justify-content-end">
                  <li class="mx-1">
                      <div>
                          <a class="d-flex link-white" href="#">
                              <div><i class="far fa-bell"></i></div><span>&nbsp;Thông báo</span>
                          </a>
                      </div>
                  </li>
                 <li class="mx-1">
                      <div>
                          <a class="d-flex link-white" href="#">
                              <div><i class="far fa-question-circle"></i></div><span>&nbsp;Trợ giúp</span>
                          </a>
                      </div>
                  </li>
                  <li class="mx-1"><a href="#" class="link-white">Đăng ký</a></li>
                  <li class="mx-1"><a href="#" class="link-white">Đăng nhập</a></li>
              </ul>
          </div>
      </div>
      <div class="d-flex mt-3 py-2" id="header-middle">
      <div class="mx-2"><a href="/"><img src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['alt'] !!}"></a></div>
          <div class="flex-fill mx-4 pt d-flex flex-column justify-content-center">
              <form>
                  <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Tìm thông tin" value="" />
                    <div class="input-group-append">
                      <button class="btn btn-green" id="search-btn" type="button">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
              </form>
          </div>
          <div class="mx-2 d-flex flex-column justify-content-center">
              <div class="position-root popover__wrapper__cart" id="cart"><a href="/cart"><i class="fas fa-blog fa-2x text-white"></i></a></div>
          </div>
      </div>
  </div>
</header>