@extends('layouts.app')


<div class="container">
<form action="{{route('user.store')}}" method="POST">
@csrf
<label for="">Titre</label>
<input type="text" placeholder="Veuiller insérer un titre svp" name="title" class="btn-group">
<br>
<label class="mt-5" for="">Texte</label><br>
<textarea type="" placeholder="Veuiller insérer un titre svp" name="text" class="mt-5"></textarea>

<button type="submit">Valider</button>

</form>
</div>