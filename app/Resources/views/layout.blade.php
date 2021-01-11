<!DOCTYPE html>
<html {{ language_attributes() }}>
  <head>
    <meta charset="{{ get_bloginfo('charset') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ wp_head() }}
    <style>
      :root {
        --theme-primary: {{ $theme['color']['primary'] }};
        --theme-tertiary: {{ $theme['color']['tertiary'] }};
        --theme-secondary: {{ $theme['color']['secondary'] }};
        --theme-dark: #1D2545;
      }
      html { margin-top: 0 !important; }
    </style>  
  </head>
  <body id="body" class="bg-white">
    <div class="relative flex flex-col min-h-screen antialiased font-body">
      @yield('header')
      @yield('body')
      @yield('footer')
    </div>
    {{ wp_footer() }}
  </body>
</html>
