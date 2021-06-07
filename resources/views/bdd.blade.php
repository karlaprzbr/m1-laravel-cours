@extends('base-2')
@section('content')
<h1>Gestion de la base de données</h1>
<ul>
    <li>Comme dans Symfony, il faut d'abord créer la base de données vide dans <code>phpMyAdmin</code></li>
    <li>Il faut ensuite configurer le <code>.env</code> avec les identifiants et le nom de la base de données</li>
    <li>La structure de Laravel fournit 3 migration : <code>create_users_table</code>, <code>create_password_reset_table</code> et <code>create_failed_jobs_table</code></li>
    <li>Ensuite, lacer cette commande pour créer les tables correspondant aux migrations :</li>
<pre class="code bg-light rounded">
<code>php artisan migrate</code>
</pre>
    <li>Pour créer une nouvelle migration, lancer cette commande :</li>
<pre class="code bg-light rounded">
<code>php artisan make:migration create_nom_de_la_table</code>
</pre>
    <li>Modifier le fichier de migration avant de lancer la commande <code>migrate</code></li>
    <li>Lancer les commandes :</li>
<pre class="code bg-light rounded">
<code>php artisan make:model NomDuModel</code>
<code>php artisan make:controller NomDuController <span class="text-success">// cf. <a href="{{ url('controllers') }}">Controllers</a></span></code>
</pre>
</ul>    
@endsection