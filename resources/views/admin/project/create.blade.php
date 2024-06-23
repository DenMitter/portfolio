@extends('layouts.app')

@section('content')
@include('admin.includes.sidebar') 
<main class="main-content">
   @include('admin.includes.navbar')
   <div class="container-fluid content-inner pb-0">
      <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-xl-3 col-lg-4">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Add New Project</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        {{-- <div class="profile-img-edit position-relative">
                           <img class="img-fluid preview-image" src="../../assets/images/avatars/01.png" alt="profile-pic">
                           <div class="upload-icone bg-primary">
                              <svg class="upload-button" width="14" height="14" viewBox="0 0 24 24">
                                 <path fill="#ffffff" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                              </svg>
                              <input class="file-upload" type="file" accept="image/*">
                           </div>
                        </div> --}}
                        <div class="mb-3">
                           <input name="preview_image" type="file" class="form-control form-control-sm" aria-label="Small file input example">
                        </div>
                        <div class="img-extension mt-3">
                           <div class="d-inline-block align-items-center">
                              <span>Only</span>
                              <a href="javascript:void();">.jpg</a>
                              <a href="javascript:void();">.png</a>
                              <a href="javascript:void();">.jpeg</a>
                              <span>allowed</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-group" data-select2-id="29">
                        <label>Tags:</label>
                        <div class="select2-green" data-select2-id="29">
                        <select class="multiple-select" name="tag_ids[]" multiple="" data-placeholder="Виберіть тег" data-dropdown-css-class="select2-green" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                           @foreach ($tags as $tag)
                              <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                           @endforeach
                        </select>
                        </div>
                     </div>
                     {{-- <div class="form-group">
                        <label class="form-label">Project Tags:</label>
                        <select name="type" class="selectpicker form-control" data-style="py-0">
                           <option>Select</option>
                           <option>Web Designer</option>
                           <option>Web Developer</option>
                           <option>Tester</option>
                           <option>Php Developer</option>
                           <option>Ios Developer </option>
                        </select>
                     </div> --}}
                  </div>
               </div>
            </div>
            <div class="col-xl-9 col-lg-8">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">New Project Information</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="new-user-info">
                        <div class="row">
                           <div class="form-group col-md-12">
                              <label class="form-label" for="fname">Title:</label>
                              <input name="title" type="text" class="form-control" placeholder="Title">

                              @error('title')
                                 <p class="text-danger">Це поле має бути заповненим</p>
                              @enderror
                           </div>
                           <div class="form-group col-md-12">
                              <label class="form-label" for="cname">Description:</label>
                              <input name="description" type="text" class="form-control" placeholder="Description">

                              @error('description')
                                 <p class="text-danger">Це поле має бути заповненим</p>
                              @enderror
                           </div>
                           <div class="form-group col-md-12">
                              <label class="form-label" for="cname">View link ( e.g. link to GitHub ):</label>
                              <input name="view_link" type="text" class="form-control" placeholder="Link">

                              @error('view_link')
                                 <p class="text-danger">Це поле має бути заповненим</p>
                              @enderror
                           </div>
                        </div>
                        <hr>
                        <div class="checkbox form-label">
                           {{-- <label class="form-label"><input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">Is Published</label> --}}
                           <input name="is_published" type="checkbox" id="cbx" style="display: none;" value="1">
                           <label for="cbx" class="check">
                              <svg width="18px" height="18px" viewBox="0 0 18 18">
                                 <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                                 <polyline points="1 9 7 14 15 4"></polyline>
                              </svg>
                           </label>
                           Is Published
                        </div>
                        <button type="submit" class="btn btn-primary">Add New Project</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</main>
@endsection
