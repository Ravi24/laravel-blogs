
<!DOCTYPE html>
<html lang="en">

    @include('layout.page_head')

  <body>
    
  @include('layout.master_nav')
  
    <div class="container">

    @yield('content')
     
     
    @yield('sidebar')
    
    
    </div><!-- /.row -->
    </div><!-- /.container -->

    @include('layout.layout_footer')


    @yield('scripts');
  </body>
</html>
