@extends('admin.admin_master')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <a href="{{route('add.users')}}"><button type="button" class="btn btn-success rounded-pill">Add Users</button></a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                  <th>
                    #id
                </th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                <th>Action</th>
                  </tr>
                </thead>
                <tbody>
               
                @foreach ($data as $list)
                            <tr>
                            
                                <td>{{$list->id}}</td>
                                <td>{{$list->name}}</td>
                                <td>{{$list->email}}</td>
                                <td><a href="{{route('edit.form',$list->id)}}"><button type="button" class="btn btn-primary rounded-pill">edit</button></a></td>
                                <td><a href="{{route('delete.user',$list->id)}}"><button type="button" class="btn btn-danger rounded-pill">delete</button></a></td>


                            </tr>
                            @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsectin