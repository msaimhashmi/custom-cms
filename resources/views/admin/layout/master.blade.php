@include('admin.layout.header')
<body>
  <div class="app" id="app">
    <router-view></router-view>
    {{-- <example-component></example-component> --}}

    <!-- ############ LAYOUT START-->
    <!-- aside -->
    @include('admin.layout.sidebar')
    <!-- / -->
    
    <!-- content -->
    <div id="content" class="app-content box-shadow-z0" role="main">

      {{-- NAVBAR START --}}
      @include('admin.layout.navbar')
      {{-- NAVBAR END --}}

      {{-- FOOTER START --}}
      @include('admin.layout.footer')
      {{-- FOOTER END --}}

        <div ui-view class="app-body" id="view">
          <!-- ############ PAGE START-->
          @section('main-content')
            @show
          <!-- ############ PAGE END-->
        </div>
      </div>
    </div>
    <!-- / -->
    <!-- theme switcher -->
    @include('admin.layout.switcher')
    <!-- / -->
    <!-- ############ LAYOUT END-->
  </div>
  <!-- build:js /admin/scripts/app.html.js -->
  <!-- jQuery -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="/admin/libs/jquery/jquery/dist/jquery.js"></script>
  <!-- Bootstrap -->
  <script src="/admin/libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="/admin/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
  <!-- core -->
  <script src="/admin/libs/jquery/underscore/underscore-min.js"></script>
  <script src="/admin/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="/admin/libs/jquery/PACE/pace.min.js"></script>
  <script src="/admin/scripts/config.lazyload.js"></script>
  <script src="/admin/scripts/palette.js"></script>
  <script src="/admin/scripts/ui-load.js"></script>
  <script src="/admin/scripts/ui-jp.js"></script>
  <script src="/admin/scripts/ui-include.js"></script>
  <script src="/admin/scripts/ui-device.js"></script>
  <script src="/admin/scripts/ui-form.js"></script>
  <script src="/admin/scripts/ui-nav.js"></script>
  <script src="/admin/scripts/ui-screenfull.js"></script>
  <script src="/admin/scripts/ui-scroll-to.js"></script>
  <script src="/admin/scripts/ui-toggle-class.js"></script>
  <script src="/admin/scripts/app.js"></script>
  <!-- ajax -->
  <script src="/admin/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="/admin/scripts/ajax.js"></script>
  <!-- endbuild -->
</body>
</html>