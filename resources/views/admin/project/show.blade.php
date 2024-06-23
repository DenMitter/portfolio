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
                      <td>{{ $project->id }}</td>
                    </tr>
                    <tr>
                      <td>Title</td>
                      <td>{{ $project->title }}</td>
                    </tr>
                    <tr>
                      <td>Description</td>
                      <td>{{ $project->description }}</td>
                    </tr>
                    <tr>
                      <td>View link</td>
                      <td>
                        @if ($project->view_link == NULL)
                            None
                        @else
                          <a href="{{ $project->view_link }}">* link *</a>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Tags</td>
                      <td>
                        @foreach ($tags as $tag)
                          @if (is_array($project->tags->pluck('id')->toArray()) && in_array($tag->id, $project->tags->pluck('id')->toArray()))
                            <span class="show-tag mr-1">
                              {{ $tag->title }}
                            </span>
                          @endif
                        @endforeach
                      </td>
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
