@php
    $pagetitle = 'Historique';
    $breadcrumbs = ['Historique' => route('historiques.index')];
@endphp
@extends('layouts.app')


@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                 <div class="card">
                      <div class="card-header border-0">
                           <div class="row justify-content-between">
                                <div class="col-lg-6">
                                     <div class="row align-items-center">
                                          <div class="col-lg-6">
                                               <form class="app-search d-none d-md-block me-auto">
                                                    <div class="position-relative">
                                                         <input type="search" class="form-control" placeholder="Rechercher" autocomplete="off" value="">
                                                         <iconify-icon icon="solar:magnifer-broken" class="search-widget-icon"></iconify-icon>
                                                    </div>
                                               </form>
                                          </div>
                                          
                                     </div>
                                </div>
                           </div>
                      </div>
                 </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            
                            <div class="mb-9 mb-md-0">
                                <h5 class="card-title text-dark fw-bolder mb-0">Historiques</h5>
                                <span>Historique des messages</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <!-- Menu Toggle Button -->
                               
             
                                <!-- App Search-->
                                <form class="app-search d-none d-md-block me-auto" method="GET" action="{{ route('historique.search') }}">

                                    <div class="position-relative">
                                        <input type="search" class="form-control border-0" name="query" placeholder="Recherche par numéro..." autocomplete="off" value="{{ request('query') }}">
                                        <button type="submit" class="search-widget-icon btn btn-link p-0">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </div>
                                </form>
                                
                           </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th >Contenu</th>
									    <th >Numéro</th>
                                        <th >Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @php
                                    $i = 0;
                                @endphp
                                <tbody>
                                   @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td >{{ $message->Contenu }}</td>
										    <td >{{ $message->Destinataire }}</td>
                                            <td>{{ $message->Status }}</td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-xl-12">
                 <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                        <div class="mb-9 mb-md-0">
                            <h5 class="card-title text-dark fw-bolder mb-0"> Historiques</h5>
                            <span>Historique des messages</span>
                        </div>
                      </div>
                      <div class="card-body p-0">
                           <div class="table-responsive">
                                <table class="table align-middle text-danger fw-medium fs-15 table-hover table-centered mb-0">
                                     <thead class=" bg-light-subtle">
                                          <tr class="text-dark">
                                            <th>No</th>
                                            <th >Contenu</th>
                                            <th >Numéro</th>
                                            <th >Status</th>
                                            <th></th>
                                          </tr>
                                     </thead>
                                     @php
                                         $i = 0;
                                     @endphp
                                     <tbody>
                                        @foreach ($messages as $message)
                                            <tr class="text-dark">
                                                <td>{{ ++$i }}</td>
                                                <td >{{ $message->Contenu }}</td>
                                                <td >{{ $message->Destinataire }}</td>
                                                <td>{{ $message->Status }}</td>
                                                
                                            </tr>
                                        @endforeach
                                     </tbody>
                                </table>
                           </div>
                           <!-- end table-responsive -->
                      </div>
                 </div>
            </div>

       </div>
    </div>
@endsection
