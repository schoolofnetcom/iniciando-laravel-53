<html>
<body>
<h1>Site Client</h1>
<form method="post" action="{{ route('site.client.store') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="text" name="value"/>
    <button type="submit">Enviar</button>
</form>
</body>
</html>