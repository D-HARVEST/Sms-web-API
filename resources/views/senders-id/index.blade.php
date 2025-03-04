@php
    $pagetitle = 'Senders ID';
    $breadcrumbs = ['Liste des Senders ID' => route('senders-ids.index')];
@endphp

@extends('layouts.app')

@section('template_title')
    Senders Ids
@endsection

@section('content')
    <div class="wrapper">
            <!-- Start Container Fluid -->
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
                                <div class="col-lg-6">
                                     <div class="text-md-end mt-3 mt-md-0">
                                          <a href="{{ route('senders-ids.create') }}" class="btn btn-success me-1"><i class="ri-add-line"></i>
                                            {{ __('Nouveau') }}
                                          </a>
                                     </div>
                                </div><!-- end col-->
                           </div>
                      </div>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                 <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                        <div class="mb-9 mb-md-0">
                            <h5 class="card-title text-dark fw-bolder mb-0"> Sender ID</h5>
                            <span>Liste des Senders ID</span>
                        </div>
                           {{-- <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                     This Month
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                     <!-- item-->
                                     <a href="#!" class="dropdown-item">Download</a>
                                     <!-- item-->
                                     <a href="#!" class="dropdown-item">Export</a>
                                     <!-- item-->
                                     <a href="#!" class="dropdown-item">Import</a>
                                </div>
                           </div> --}}
                      </div>
                      <div class="card-body p-0">
                           <div class="table-responsive">
                                <table class="table align-middle text-dark table-hover table-centered mb-0">
                                     <thead class="bg-light-subtle">
                                          <tr class="text-dark">
                                               <th>No</th>
                                               <th>Nom</th>
                                               <th>Action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($sendersIds as $sendersId)
                                        <tr class="text-dark">
                                            <td>{{ ++$i }}</td>
                                            
										
										<td >{{ $sendersId->Nom }}</td>
										

                                            <td>
                                                <form action="{{ route('senders-ids.destroy', $sendersId->id) }}" method="POST">
                                                  @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Suprimer') }}</button>
                                                </form>
                                            </td>
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
