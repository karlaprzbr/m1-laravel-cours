@extends('base')
@section('content')
<h1>Routes</h1>
<pre class="code bg-light rounded">
<code><span class="text-success">// Toutes les routes sont stockées dans le fichier /routes/web.php</span></code>
<code></code>
<code><span class="text-success">// Cette route est la plus basique et permet d'accéder à la racine du site</span></code>
<code>Route::get('/', function () {</code>
<code>    return view('index');</code>
<code>});</code>
<code></code>
<code><span class="text-success">// Cette route prend en compte des paramètres qu'elle envoit à la vue</span></code>
<code>('/url/{param1}/{param2}', function ($param1, $param2) {</code>
<code>    return view('nomDeLaVue', ["param1"=>$param1, "param2"=>$param2]);</code>
<code>});</code>
<code></code>
<code><span class="text-success">// Cette route appartient à un Controller (cf. <a href="{{ url('controllers') }}">Controllers</a>)</span></code>
<code>Route::get('url', [</code>
<code>    NomDuController::class, "nomDeLaVue"</code>
<code>]);</code>
<code></code>
<code><span class="text-success">// Formulaire avec get() et post() (cf. <a href="{{ url('form') }}">Formulaires</a>)</span></code>
<code>Route::get('url', [</code>
<code>    NomDuController::class, "nomDeLaVue"</code>
<code>]);</code>
<code>Route::post('url', [</code>
<code>    NomDuController::class, "nomDeLaVue"</code>
<code>]);</code>
<code></code>
<code><span class="text-success">// Formulaire avec match()</span></code>
<code>Route::match(["get", "post"], "url", [NomDuController::class, "nomDeLaVue"]);</code>
</pre>
    
@endsection