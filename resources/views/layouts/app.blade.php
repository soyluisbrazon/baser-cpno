<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="">
      
        <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
          <title>@yield('title') || BASER </title>

        <!-- Fonts -->
        

        <!-- Styles -->
        @include('layouts.styles')
        @yield('styles')

    </head>
    <body data-plugin-page-transition>
      <div class="body">
        @include('navs.header')

        @yield('content')

        @include('navs.footer')
      </div>

      @include('layouts.scripts')
      @yield('scripts')
    </body>
</html>
