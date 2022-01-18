@extends('layouts.back')
<form action={{route('portefolio.update',$data->id)}} method="POST">
    @csrf
    @method('PUT')
    <label for="prenom"> Titre : </label>
    <input type="text" name="titre" value={{$data->titre}}> <br>
    <label for="prenom"> Description : </label>
    <input type="text" name="description" value={{$data->description}}> <br>
    <button type="submit" class="btn btn-success">Envoyer</button>




    </form>
