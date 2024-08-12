<form action="{{ route('site.contato') }}" method="post">
    {{-- Token --}}
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{ $borda_form }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{ $borda_form }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $borda_form }}">
    <br>
    <select name="motivo_contato" class="{{ $borda_form }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $borda_form }}" placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="{{ $borda_form }}">ENVIAR</button>
</form>