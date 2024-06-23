@extends('layouts.app')

@section('content')
<!-- loader END -->
@include('admin.includes.sidebar') 
<main class="main-content">
    @include('admin.includes.navbar')
    <div class="container-fluid content-inner pb-0">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card shining-card">
                                    <div class="card-body">                    
                                        {{-- <img src="{{ asset('assets/images/coins/01.png') }}" class="img-fluid avatar avatar-50 avatar-rounded" alt="img60">  --}}
                                        <span class="fs-5 me-2">Projects</span>
                                        <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#BFBFBF" stroke="#BFBFBF"/>
                                        </svg>
                                        <div class="pt-3">
                                            <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                                            <div class="pt-3">
                                                <small>+ 0.8%</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                            <div class="col-lg-4">
                                <div class="card shining-card">
                                    <div class="card-body">                    
                                        <span class="fs-5 me-2">BTC/USDT</span>
                                        <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#BFBFBF" stroke="#BFBFBF"/>
                                        </svg>
                                        <div class="pt-3">
                                            <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                                            <div class="pt-3">
                                                <small>+ 0.8%</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                            <div class="col-lg-4">
                                <div class="card shining-card">
                                    <div class="card-body">                    
                                        <span class="fs-5 me-2">BTC/USDT</span>
                                        <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#BFBFBF" stroke="#BFBFBF"/>
                                        </svg>
                                        <div class="pt-3">
                                            <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                                            <div class="pt-3">
                                                <small>+ 0.8%</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch custom-scroll">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <div class="caption">
                                    <h4 class="font-weight-bold mb-2">Recent Trading Activities</h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1">
                                    <label class="btn btn-sm btn-secondary active rounded-start" for="btncheck1">Monthly</label>

                                    <input type="checkbox" class="btn-check" id="btncheck2">
                                    <label class="btn btn-sm btn-secondary " for="btncheck2">Weekly</label>

                                    <input type="checkbox" class="btn-check" id="btncheck3">
                                    <label class="btn btn-sm btn-secondary rounded-end" for="btncheck3">Today</label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead>
                                            <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">24h %</th>
                                            <th scope="col">7d %</th>
                                            <th scope="col">Market Cap</th>
                                            <th scope="col">Volume(24th)</th>
                                            <th scope="col">Circulating</th>
                                            <th scope="col">Last 7 Days</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="white-space-no-wrap">
                                                <td>
                                                    <img src="{{ asset('assets/images/coins/02.png') }}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                                    Bitcoin BTC<a class="button btn-primary badge ms-2" type="button">Buy</a>
                                                </td>
                                                <td class="pe-2">$40,501.87</td>
                                                <td class="text-success">
                                                    <svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/></svg>
                                                    6.93%
                                                </td>
                                                <td class="text-danger">
                                                    <svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/></svg>
                                                    4.58%
                                                </td>
                                                <td>$123,456,789,159</td>
                                                <td>$373,359,580,155<br>
                                                    <small class="ms-5">635,237 BTC</small>
                                                </td>
                                                <td class="ms-5">18,777,768 BTC</td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <div id="sparklinechart-5"></div>             
                                                        <div class="dropdown ms-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                                                <li><a class="dropdown-item" href="#">View Charts</a></li>
                                                                <li><a class="dropdown-item" href="#">View Markets</a></li>
                                                                <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between flex-wrap">
                            <div class="header-title">
                                <h4 class="card-title">Earnings</h4>
                            </div>   
                            <div class="dropdown">
                                <a href="#" class="btn btn-soft-secondary btn-sm dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div id="multiple-radialbar-chart" class="col-md-8 col-lg-8 multiple-radialbar-chart"></div>
                                <div class="d-grid gap col-md-4 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#00EC42"><g><circle cx="12" cy="12" r="8" fill="#00EC42"></circle></g></svg>
                                        <div class="ms-3">
                                            <span class="text-light">Bitcoin</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#FF2E2E"><g><circle cx="12" cy="12" r="8" fill="#FF2E2E"></circle></g></svg>
                                        <div class="ms-3">
                                            <span class="text-light">Litecoin</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-title">
                                    <h4 class="card-title">History</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline m-0 p-0">
                                    <li class="d-flex align-items-center pt-3">
                                        <div class="d-flex justify-content-between rounded-pill">
                                            <img src="{{ asset('assets/images/coins/01.png') }}" class="img-fluid avatar avatar-40 avatar-rounded" alt="img6">
                                            <div class="ms-3 flex-grow-1">
                                                <h5 class="mb-2">Bitcoin</h5>
                                                <p class="text-success mb-2">+$10,00</p> {{-- text-danger --}}
                                                <p class="fs-6">Bitcoins Evolution™. 234000 Satisfied Customers From 107 Countries.</p>
                                            </div>
                                            <div class=""><p>11/02/21</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}