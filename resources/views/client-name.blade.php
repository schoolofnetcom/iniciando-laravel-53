<p>Client {{ $id }}, {{ $name }}</p>

<p>{{ 2 + 2 }}</p>
<p>{{ $name . " Diniz" }}</p>
<p>{{ isset($conteudo) ? $conteudo : "Variável não existe"  }}</p>
<p>{{ $conteudo or 'Variavel não existe' }}</p>
<p> {{ "<a href='#'>Link</a>" }}</p> unescaped
