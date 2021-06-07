@extends('base-2')
@section('content')
<h1>Controllers</h1>
<pre class="code bg-light rounded">
<code><span class="text-success">// Commande pour créer un Controller Laravel</span></code>
<code>php artisan make:controller NomDuController</code>
<code></code>
<code><span class="text-success">// Méthode du controller qui renvoie vers une vue (il est nécessaire de déclarer la route dans le fichier web.php, cf. <a href="{{ url('routes') }}">Routes</a>)</span></code>
<code>public function index()</code>
<code>{</code>
<code>  return view('welcome');</code>
<code>}</code>
</pre>    
@endsection