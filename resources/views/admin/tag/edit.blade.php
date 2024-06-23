@extends('layouts.app')

@section('content')
@include('admin.includes.sidebar') 
<main class="main-content">
   @include('admin.includes.navbar')
   <div class="container-fluid content-inner pb-0">
      <form action="{{ route('admin.tag.update', $tag) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
          <div class="col-xl-9 col-lg-8">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                    <h4 class="card-title">Edit Tag</h4>
                  </div>
              </div>
                <div class="card-body">
                  <div class="new-user-info">
                    <div class="row">
                      <div class="form-group col-md-12">
                        <input name="title" type="text" class="form-control" id="fname" placeholder="Title" value="{{ $tag->title }}">

                        @error('title')
                            <p class="text-danger">Це поле має бути заповненим</p>
                        @enderror
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </form>
   </div>
</main>
@endsection