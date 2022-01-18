@extends('layouts.index')
<ul class="list-unstyled">
    <li class="media">
      <div class="media-body">
        <h5 class="mt-0 mb-1">Titre : {{$table->titre}}</h5>
        <p>Description : {{$table->description}}</p>
      </div>
<button type="button" class="btn btn-warning">
    <a href={{route('portefolio.change')}}>
     Back
 </a>  </button>

