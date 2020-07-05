@extends ('layouts.master')
@section('title')
<title>Artikel</title>
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
	<h1 class="h3 mb-4 text-gray-800">Data Artikel</h1><br>
	
@endsection
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Artikel</li>
</ol>
@endsection
@section('content')
<div class="col-md-12">
	
	<div class="card shadow">
	    <div class="card-header py-3">
	      <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
	    </div>
	    <div class="card-body">
	    	<h1><a href="{{route('artikel.tambah')}}" class="btn btn-primary btn-sm">tambah Artikel</a></h1>
	      <table class="table table-bordered">
	  <thead>                  
	    <tr>
	      <th style="width: 10px">#</th>
	      <th>Task</th>
	      <th>Progress</th>
	      <th style="width: 40px">Label</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>1.</td>
	      <td>Update software</td>
	      <td>
	        <div class="progress progress-xs">
	          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
	        </div>
	      </td>
	      <td><a href="{{route('artikel.edit')}}" class="btn btn-success btn-sm">edit</a></td>
	    </tr>
	    <tr>
	      <td>2.</td>
	      <td>Clean database</td>
	      <td>
	        <div class="progress progress-xs">
	          <div class="progress-bar bg-warning" style="width: 70%"></div>
	        </div>
	      </td>
	      <td><a href="{{route('artikel.detail')}}" class="btn btn-warning btn-sm">Detail</a></td>
	    </tr>
	    <tr>
	      <td>3.</td>
	      <td>Cron job running</td>
	      <td>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar bg-primary" style="width: 30%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-primary">30%</span></td>
	    </tr>
	    <tr>
	      <td>4.</td>
	      <td>Fix and squish bugs</td>
	      <td>
	        <div class="progress progress-xs progress-striped active">
	          <div class="progress-bar bg-success" style="width: 90%"></div>
	        </div>
	      </td>
	      <td><span class="badge bg-success">90%</span></td>
	    </tr>
	  </tbody>
	</table>
	    </div>
	</div>
</div>




@endsection
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush