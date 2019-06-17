<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap fluid-container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
          @include('partials.section')
          @include('partials.section-two')
          @include('partials.section-three')
          @include('partials.section-four')
          @include('partials.carousel')
        </main>
        
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
