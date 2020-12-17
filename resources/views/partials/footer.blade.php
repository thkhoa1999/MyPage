<div class="space-100"></div>
<footer id="footer" class="module footer px-5 pt-5 pb-2"">
  {{-- <div class="container footer-top">
    <div class="row">
      @php
      wp_nav_menu(array(
      'theme_location' => 'footer',
      'items_wrap' => '%3$s',
      'container' => false,
      'depth' => 2,
      // 'walker' => new App\Libs\Services\Nav\C8ThemeFooterMenu()
      ));
      @endphp
    </div>
    <div class="footer-item-col col-lg-3 col-6">
      {!! App::getFooterAddress() !!}

    </div>
  </div>
  </div>
  <div class="container text-center">
    <div class="footer-copyright last-mb-none p-3">
      {!! App::getCopyRight() !!}
    </div>
  </div> --}}

  <div class="container">
        <div class="row">
            <div class="col-md-4"><b>DEVELOPER</b>
                <ul>
                    <li><a href="#">Diệp Tư Thinh</a></li>
                    <li><a href="#">Trương Hoàng Khoa</a></li>
                    <li><a href="#">                
                      <div>
                          @php
                          wp_nav_menu(array(
                          'theme_location' => 'footer',
                          'items_wrap' => '%3$s',
                          'container' => false,
                          'depth' => 2,
                          //'walker' => new App\Libs\Services\Nav\C8ThemeFooterMenu()
                          ));
                          @endphp
                        </div>
                    </a></li>
                </ul>
            </div>
            <div class="col-md-4 text-center mt-md-0 mt-2"><b>SOCIAL</b>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i><span>&nbsp;Facebook</span></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i><span>&nbsp;Instagram</span></a></li>
                </ul>
            </div>
            <div class="col-md-4 text-center mt-md-0 mt-2"><b>CONTACT US</b>
                <address>
                    
                    1355 Vo Thi Sau Street, Suite 900<br>
                    Nha Trang, Khanh hoa<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
        </div>

        <hr />
        <p>© @php echo Date("Y") @endphp See you later.</p>
    </div>
</footer>

<!-- endblock -->
<noscript>
  <div id="mod-noscript" class="mod-noscript">
    <div class="d-table w-100 h-100">
      <div class="d-table-cell align-middle text-center">
        <div class="container">
          <h3>To use web better, please enable Javascript.</h3>
        </div>
      </div>
    </div>
  </div>
</noscript>


