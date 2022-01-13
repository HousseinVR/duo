<form action={{route('portefolio_store')}} method="POST">
    @csrf
    <label for="nom"> Description : </label>
    <input type="text" name="description"> <br>
    <label for="prenom"> Titre : </label>
    <input type="text" name="titre"> <br>
    <input type="submit">

    </form>
