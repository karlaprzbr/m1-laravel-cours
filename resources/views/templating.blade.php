@extends('base')
@section('content')
<h1>Templating avec <code>Blade</code></h1>

<ul>
    <li>Créer un fichier base ou layout dans le dossier views</li>
    <li>Ajouter le <code>head</code>, le <code>header</code>, la <code>nav</code> et le <code>footer</code></li>
    <li>Compléter les fichiers <code>blade</code> avec les lignes suivantes :</li>
</ul>
<pre class="code bg-light rounded">
<code><span class="text-success">// Dans le fichier parent</span></code>
<code>&#64;yield('title')</code>
<code></code>
<code><span class="text-success">// Dans le fichier enfant</span></code>
<code>&#64;extends('base')</code>
<code>&#64;section('title')</code>
<code>... code ...</code>
<code>&#64;endsection</code>
</pre>
<ul>
    <li>L'affichage des liens internes</li>
</ul>
<pre class="code bg-light rounded">
<code>&#60;a href="&#123;&#123; url('nomDeLaRoute') &#125;&#125;"&#62;&#60;/a&#62;</code>
</pre>

<ul>
    <li>L'affichage des variables</li>
</ul>
<pre class="code bg-light rounded">
<code>&#123;&#123; <span class="text-primary">$variable</span> &#125;&#125;</code>
</pre>

<ul>
    <li>Concaténation</li>
</ul>
<pre class="code bg-light rounded">
<code>&#123;&#123; <span class="text-primary">$var1 . $var2</span> &#125;&#125;</code>
</pre>

<ul>
    <li>Conditions</li>
</ul>
<pre class="code bg-light rounded">
<code><span class="text-success">// Pareil pour tous les types de conditions</span></code>
<code><span class="text-primary">&#64;if</span></code>
<code>... code ...</code>
<code><span class="text-primary">&#64;endif</span></code>
</pre>
@endsection