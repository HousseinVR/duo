<form action={{route('blog_store')}} method="POST">
    @csrf
    <label for="nom"> Image : </label>
    <input type="text" name="image"> <br>
    <label for="prenom"> Description : </label>
    <input type="text" name="description"> <br>
    <label for="prenom"> Titre : </label>
    <input type="text" name="titre"> <br>
    <input type="submit">



    </form>
