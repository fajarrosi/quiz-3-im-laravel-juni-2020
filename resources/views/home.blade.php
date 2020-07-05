@extends ('layouts.master')
@section('title')
<title>HOME</title>
@endsection
@section('sidebar')
<!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Artikel
      </div>

      <li class="nav-item">
        <a class="nav-link" href="{{route('artikel.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Artikel</span></a>
      </li>
@endsection
@section('title-pages')
	<h1 class="h3 mb-4 text-gray-800">Erd</h1>
@endsection
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item active">Home</li>
</ol>
@endsection
@section('content')
<img src=" {{asset('images/erd.png')}} ">
@endsection