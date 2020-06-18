@extends('layouts.app')

@include('partials.navbar')
@section('content')

    <div class="application-layout">
        <div class="app__column--sidebar pt-3 pl-2">
            <dl data-step="1" data-intro="Welkom bij het Isp. Hier zie je welke Opleiding je hebt, de locatie van je opleiding en hoeveel studiepunten je moet opnemen op te kunnen slagen.">
                <dt>Opleiding:</dt>
                <dd>bachlor in {{$data['education'][0]->name}}</dd>
                <dd>{{$data['education'][0]->location}} {{$data['education'][0]->studyPoints}} stp.</dd>
            </dl>
            <choices-component title="Keuzevakken" data-step="2" data-intro="De keuze vakken zijn de vakken die niet verplicht zijn. Deze kan je gebruiken door te slepen naar een jaar en opslaan."></choices-component>
        </div>
        <div class="pt-3 pl-2">
            <faseone-component title="{{$data['yearOne']}}-{{$data['yearTwo']}}"></-component>
        </div>
        <div class="pt-3 pl-2">
            <dl>
                <dt>Initieel</dt>
                <dd><button class="btn bg-orange text-white">Opslaan</button><button class="btn bg-orange text-white ml-3">Doorsturen</button></dd>
                <dd><b>Opgenomen studiepunten:</b></dd>
            </dl>
            <fasetwo-component title="{{$data['yearTwo']}}-{{$data['yearThree']}}" class="app__column mx-0 py-4"></-component>
        </div>
        <div class="pt-3 pl-2">
            <dl>
                <dt>Initieel</dt>
                <dd><button class="btn bg-orange text-white">Opslaan</button><button class="btn bg-orange text-white ml-3">Doorsturen</button></dd>
                <dd><b>Opgenomen studiepunten:</b></dd>
            </dl>
            <fasethree-component title="{{$data['yearThree']}}-{{$data['yearFour']}}" class="app__column mx-0 py-4"></-component>
        </div>
        <div id="extrayear" class="pt-3 pl-2">
            <dl>
                <dt>Initieel</dt>
                <dd><button class="btn bg-orange text-white">Opslaan</button><button class="btn bg-orange text-white ml-3">Doorsturen</button></dd>
                <dd><b>Opgenomen studiepunten:</b></dd>
            </dl>
            <fasefour-component title="{{$data['yearFour']}}-{{$data['yearFive']}}" :data="[]" class="app__column mx-0 py-4"></fasefour-component>
        </div>
        <div class="pt-3 pl-2">
            <button class="btn-add" onclick="addyear()" id="addyear">Jaar toevoegen +</button>
        </div>
        <div class="pt-3 pl-2 pr-5">
            <dl>
                <dt>Initieel</dt>
                <dd><button class="btn bg-orange text-white">Aanvragen</button></dd>
            </dl>
            <exemptions-component title="Vrijstellingen" :data="[]" class="app__column mt-5 py-4"></exemptions-component>
        </div>
    </div>
@endsection
<script>
        
   
    if (localStorage.getItem("check") === null) {
      var extrayear = "unchecked";
      document.getElementById('extrayear').style.display ='block';
      localStorage.setItem('check', "unchecked");
      
  } else{
      var extrayear = localStorage.getItem('check');
      if (extrayear == "checked") {
        document.getElementById('extrayear').style.display ='block';
      }
      else{
        document.getElementById('extrayear').style.display ='none'; 
      }
  }
  
function addyear() {
  
  if (extrayear == "unchecked") {
    document.getElementById('extrayear').style.display ='block';
      extrayear = "checked";
      localStorage.setItem('check', "checked");
      
  }
  else if (extrayear == "checked") {
    document.getElementById("extrayear").style.display ='none';
      extrayear = "unchecked";
      localStorage.setItem('check', "unchecked");
  }
  
  
}

        </script>