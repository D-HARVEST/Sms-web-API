@extends('auth.template')
@section('content')
    <h2 class="lh-base mb-0">Vérification de l'email </h2>
    <p>
        Un nouveau lien de vérification a été envoyé à votre adresse email.
    </p>
    <hr>
    <div class="card-body text-center p-4">
        @if (session('resent'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <span>Un nouveau lien de vérification a été envoyé à votre adresse email.</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <p class="mb-4">

        </p>

        <p class="text-muted">Vous n'avez pas reçu l'email ?</p>

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1"> <i class="bi bi-arrow-repeat"></i> Renvoyer l'email</button>
        </form>
    </div>
@endsection



@section('illustrations')
    <img src="{{ asset('matdash/login2.png') }}" class="w-100 img-fluid my-5" alt="...">
    <p class="text-center mb-4">
        Avant de continuer, veuillez vérifier votre boîte de réception et cliquer sur le lien de confirmation.
    </p>
@endsection
