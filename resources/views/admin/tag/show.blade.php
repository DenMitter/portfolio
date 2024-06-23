@extends('layouts.app')

@section('content')
@include('admin.includes.sidebar') 
<main class="main-content">
  @include('admin.includes.navbar')
  <div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>ID</td>
                      <td>{{ $tag->id }}</td>
                    </tr>
                    <tr>
                      <td>Title</td>
                      <td>{{ $tag->title }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
