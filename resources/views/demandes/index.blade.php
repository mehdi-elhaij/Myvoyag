@extends('layouts.master')

@section('body')

<div class="container">
    
    <div class="row">
        <div class="col-12">
            <div class="my-5 text-center">
                <h2 class="mb-3">Bienvenue dans l' Acceuille des voyage organisés.</h2>
                <p class="text-mute h6">
                    Veuillez choisir un voyage ou Remplir une nouvelle demande.
                    <a href="{{url('/demande/create')}}">nouvelle demande!</a>
                </p>
            </div>
        </div>
    </div> <!-- .row -->
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="row">
                    @foreach($demandes as $demande)
                        @if($demande->approved == 'directeur')
                            <div class="col-sm-2 col-lg-4">
                                @component('components.travel_card', [
                                    'bg'        => 'https://zawiastudio.com/dashboard/demo/img/candidate2.jpg',
                                    'dest'      => $demande->destinationSite->city,
                                    'avatar'    => asset('/uploads/avatars/' . $demande->owner->avatar),
                                    'arrive'    => $demande->departureSite->name,
                                    'depart'    => $demande->destinationSite->name,
                                    'date'      => $demande->departure_date,
                                    'count'     => 5 - $demande->nbr_personnes,
                                    'firstname' => $demande->owner->firstName, 
                                    'lastname'  => $demande->owner->lastName,
                                    'request_url' => url('/demande/request/create/' . $demande->id)
                                ])
                                @endcomponent
                            </div>
                        @endif
                    @endforeach
                </div> <!-- .row -->
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
@endsection