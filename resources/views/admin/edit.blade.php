@extends('admin.layout')

@section('page-title','edit')

@section('content')
<!-- /.card-header -->
<div class="card-body">
  <form action=" {{route('editBlog',$blog->id)}} " enctype="multipart/form-data" method="post" role="form">
    <div class="row">
      <div class="col-sm-12">
        <!-- text input -->
        <div class="form-group">
          <label>title</label>
          <input value=" {{$blog->title}} " name="title" type="text" class="form-control" placeholder="Enter ...">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <!-- text input -->
        <div class="form-group">
          <label>author</label>
          <input value=" {{$blog->author}} " name="author" type="text" class="form-control" placeholder="Enter ...">
        </div>
      </div>
    </div>

    {{--  file upload  --}}
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label>Image</label>
          <input type="file" class="form-control" id="file-input" name="image">
        </div>
      </div>
    </div>
    {{-- end file upload  --}}


    <div class="row">
      <div class="col-sm-12">
        <!-- select -->
        <div class="form-group">
          <label>categories</label>
          <select name="category_id" class="form-control">
            @forelse ($categories as $category)
            <option value=" {{$category->category_id}} "> {{$category->category_name}} </option>
            @empty

            @endforelse


          </select>
        </div>
      </div>

    </div>



</div>

<!-- text editor -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>content</h1>
      </div>
      <div class="col-sm-6">

      </div>
    </div>
  </div>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            Content
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
              title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>

        </div>
        <div class="card-body pad">
          <div class="mb-3">
            <textarea name="content" class="textarea" placeholder="Place some text here"
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$blog->content}}</textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of text editor -->
<br>
<div class="d-flex justify-content-around">
  <button class="btn btn-danger btn-lg "> cancel </button>
  <button type="submit" class="btn btn-success btn-lg"> send </button>
</div>
<br>
<br>
<br>
@csrf
</form>

@endsection