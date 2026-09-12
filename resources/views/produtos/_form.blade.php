<label for="nome">Nome: </label>
<input type="text" name="nome" value="{{ old('nome', $produto->nome) }}" required >

<label for="preco">Preço: </label>
<input type="number" step="any" name="preco" value="{{ old('preco', $produto->preco) }}" required>

<label for="quantidade">Quantidade: </label>
<input type="number" name="quantidade" value="{{ old('quantidade', $produto->quantidade) }}" required>

<label for="categoria_id">Categoria: </label>
<select name="categoria_id">
    @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}" 
        @selected($produto->categoria_id == $categoria->id)> 
        {{ $categoria->nome }} </option>
    @endforeach
</select>