@extends ('layouts.master')
@section('title')
<title>Edit Artikel</title>
@endsection
@section('sidebar')
      <li class="nav-item ">
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
       <li class="nav-item active">
        <a class="nav-link" href="{{route('artikel.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Artikel</span></a>
      </li>

@endsection
@section('title-pages')
	<h1><a href="{{route('artikel.index')}}" class="btn btn-primary btn-sm">Kembali</a></h1>
@endsection
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item "><a href="{{route('artikel.index')}}">Artikel</a></li>
    <li class="breadcrumb-item active">Edit artikel</li>
</ol>
@endsection
@section('content')
<div class="col-md-12">
	
	<div class="card shadow">
	    <div class="card-header py-3">
	      <h6 class="m-0 font-weight-bold text-primary">Edit Artikel</h6>
	    </div>
	    <div class="card-body">
	      <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
	    		@csrf
	    		@include('artikel._form')
	    	</form>
	    </div>
	</div>
</div>




@endsection