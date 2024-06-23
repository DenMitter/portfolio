@extends('layouts.app')

@section('content')
@include('admin.includes.sidebar') 
<main class="main-content">
  @include('admin.includes.navbar')
  <div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
                <h4 class="card-title text-white">Basic Datatable</h4>
              </div>
              <div class="d-flex mt-3 ms-4 me-4 justify-content-between">
                <form id="perPageForm" method="GET" action="{{ route('admin.tag.index') }}">
                  <select name="per_page" class="form-select-custom" style="
                    padding:10px 15px 10px 15px;
                    color:#fff;
                    background-color: #292f39;
                    background-repeat: no-repeat;
                    background-position: right 1rem center;
                    background-size: 16px 12px;
                    border: 1px solid #384151;
                    border-radius: .5rem;" id="validationDefault04" required onchange="document.getElementById('perPageForm').submit();">
                      <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                      <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20</option>
                      <option value="30" {{ $perPage == 30 ? 'selected' : '' }}>30</option>
                      <option value="40" {{ $perPage == 40 ? 'selected' : '' }}>40</option>
                  </select>
                </form>
                <div class="form-outline">
                  <form id="searchForm" method="GET" action="{{ route('admin.tag.index') }}">
                    <input type="hidden" name="per_page" value="{{ $perPage }}">
                    <input type="search" name="search" id="form1" class="form-control ms-1" placeholder="Search.." aria-label="Search" value="{{ $search }}">
                  </form>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="">
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th colspan="2" class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tags as $tag)
                        <tr class="table-item">
                          <td>{{ $tag->id }}</td>
                          <td>{{ $tag->title }}</td>
                          <td><a href="{{ route('admin.tag.edit', $tag->id) }}" class="text-success"><svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></td>
                          <td>
                            <form class="delete-form" action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="border-0 bg-transparent text-danger">
                                <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                              </button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-between flex-wrap">
                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing {{ $tags->firstItem() }} to {{ $tags->lastItem() }} of {{ $tags->total() }} entries</div>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($tags->onFirstPage())
                          <li class="page-item"><span class="page-link" aria-hidden="true"><svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 19L8.5 12L15.5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></li>
                        @else
                          <li class="page-item"><a class="page-link" href="{{ $tags->previousPageUrl() }}&per_page={{ $perPage }}&search={{ $search }}" rel="prev" aria-label="Previous"><svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 19L8.5 12L15.5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                        @endif
  
                        {{-- Pagination Elements --}}
                        @foreach ($tags->links()->elements[0] as $page => $url)
                          @if ($page == $tags->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                          @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}&per_page={{ $perPage }}&search={{ $search }}">{{ $page }}</a></li>
                          @endif
                        @endforeach
  
                        {{-- Next Page Link --}}
                        @if ($tags->hasMorePages())
                          <li class="page-item"><a class="page-link" href="{{ $tags->nextPageUrl() }}&per_page={{ $perPage }}&search={{ $search }}" rel="next" aria-label="Next"><svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                        @else
                          <li class="page-item"><span class="page-link" aria-hidden="true"><svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></li>
                        @endif
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
