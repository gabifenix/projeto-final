<h3>Editar Filme </h3>

<form action="{{ route('movies.update', $movie['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $movie['nome']}}">
    <input type="submit" value="Salvar">
</form>