@extends('admin.layout')

@section('page-title','home')

@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Blog Post List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">



            <table id="example1" class="table table-bordered table-striped">

              <thead>
                <tr>
                  <th class="col-md-1">Id</th>
                  <th class="col-md-3">Title</th>
                  <th class="col-md-2">Categories</th>
                  <th class="col-md-1">created</th>
                  <th class="col-md-1">last edited</th>
                  <th class="col-md-3 text-center">edit</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($blogs as $blog)
                <tr>
                  <td> {{$blog->id}} </td>
                  <td> {{$blog->title}} </td>
                  <td> {{$blog->category->category_name}} </td>
                  <td> {{$blog->created_at->format('d.m H:i:s')}} </td>
                  <td>{{$blog->updated_at->format('d.m H:i:s')}} </td>
                  <td class="d-flex justify-content-between">
                    <a href=" {{route('editBlogPage',$blog->id)}} "><i class="fas fa-edit"></i> Edit</a>
                    <a href=" {{route('deleteBlog',$blog->id)}} "><i class="fas fa-trash"></i> delete</a>
                  </td>
                </tr>

              </tbody>

              @empty

              @endforelse
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection