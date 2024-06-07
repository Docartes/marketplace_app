<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	@include('partials.bootstrap')
</head>
<body id="home">
    @include('partials.navbar')

    <main class="m-4">
      @yield('content')
    </main>

    @include('partials.footer')

    @include('partials.script')

  </body>
  </html>