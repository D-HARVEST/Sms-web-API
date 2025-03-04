@extends('layouts.app')

@section('template_title')
    Devices
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Token') }}
                            </span>

                            
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="float-right text-end">
                        <form action="{{ route('devices.store') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm float-right">
                                {{ auth()->user()->authToken ? __('Réinitialiser le token') : __('Générer un token') }}
                            </button>
                        </form>
                    </div>
                    
                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Token</th>
									{{-- <th >Libelle</th> --}}

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($devices as $device)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										{{-- <td >{{ $device->Libelle }}</td> --}}

                                            <td>
                                                <div class="input-group my-1">
                                                    <input type="text" class="form-control rounded-2"
                                                        value="{{ $device->Token }}" readonly>
                                                    <button class="btn btn-secondary" type="button"
                                                        onclick="
                                                     var copyText = document.querySelector('.input-group input');
                                                     navigator.clipboard.writeText(copyText.value);
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
                                                        <i class="ti ti-files me-2"></i> Copier
                                                    </button>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $devices->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
