@extends('layouts.app')

@include('partials.navbar')
@section('content')
    <div class="application-layout">
        <div class="app__column--sidebar pt-3 pl-2">
            <dl>
                <dt>Opleiding:</dt>
                <dd>bachlor in ...</dd>
                <dd>Mechelen 180 stp.</dd>
            </dl>
            <example-component title="Keuzevakken" data="hey"></example-component>
        </div>
        <div class="pt-3 pl-2">
            <dl>
                <dt>Initieel</dt>
                <dd><button class="btn btn-primary">Opslaan</button><button class="btn btn-primary ml-3">Doorsturen</button></dd>
            </dl>
            <example-component title="2019-2020" :data="supp" class="app__column mx-0 py-4"></example-component>
        </div>
        <div class="pt-3 pl-2">
            <dl>
                <dt>Initieel</dt>
                <dd><button class="btn btn-primary">Opslaan</button><button class="btn btn-primary ml-3">Doorsturen</button></dd>
            </dl>
            <example-component title="2020-2021" data="" class="app__column mx-0 py-4"></example-component>
        </div>
        {{$data['firstlist'][1][2]}}
           
    </div>
@endsection