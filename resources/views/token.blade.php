@php
    $pagetitle = 'Token';
    $breadcrumbs = ['Liste des Tokens' => route('token.index')];
@endphp

@extends('layouts.app')


@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success m-4">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="">

    <div class="row">
        <div class="col-xl-12">
             <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                    <div class="mb-9 mb-md-0">
                        <h5 class="card-title text-dark fw-bolder mb-0"> Token</h5>
                        <span>Liste des Tokens</span>
                    </div>
                    <div class="text-end me-3">
                        <form action="{{ route('token.store') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">
                                {{ auth()->user()->authToken ? __('Réinitialiser le token') : __('Générer un token') }}
                            </button>
                        </form>
                    </div>
                  </div>
                  
                  <div class="card-body p-0">
                       <div class="table-responsive">
                            <table class="table align-middle text-dark table-hover table-centered mb-0">
                                 <thead class="bg-light-subtle">
                                      <tr class="text-dark">
                                        <th>No</th>
                                        <th>Token</th>
                                        <th></th>
                                      </tr>
                                 </thead>
                                 @php $i = 0; @endphp
                                 <tbody>
                                    
                                    <tr class="text-dark">
                                        <td>{{ ++$i }}</td>
                                        <td>
                                            <span id="token-text" class="fw-bold">{{ $user->authToken }}</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" type="button"
                                                onclick="
                                                    var copyText = document.getElementById('token-text').innerText;
                                                    navigator.clipboard.writeText(copyText);
                                                    Swal.mixin({
                                                        toast: true,
                                                        position: 'top-end',
                                                        showConfirmButton: false,
                                                        timer: 3000,
                                                        timerProgressBar: true,
                                                    }).fire({
                                                        icon: 'success',
                                                        title: 'Lien copié dans le presse-papier'
                                                    });
                                                ">
                                                <i class="ti ti-files me-1"></i> Copier
                                            </button>
                                        </td>
                                    </tr>
                                
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
