@extends('base')
@section('content')
<h1>Formulaire</h1>
<?php $message = []; ?>
@if (isset($submit) && !empty($submit))
    @if (empty($email) || empty($password))
        @if (empty($email))
            <?php array_push($message, "Veuillez saisir une adresse mail valide"); ?>
        @endif  
        @if (empty($password))
            <?php array_push($message, "Veuillez saisir un mot de passe valide"); ?>
        @endif
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
            @csrf
        </form>  
    @else
        <p>Votre adresse mail est : </p>{{ $email }}
    @endif
    @if ($message !== "")
        @foreach ($message as $mes)
        <div class="alert alert-danger mt-3">
            {{ $mes }}
        </div>
        @endforeach
    @endif
@else
<form method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
    @csrf
</form>

<pre class="code bg-light rounded mt-5">
<code><span class="text-success">// Controller</span></code>
<code>public function form(Request $request)</code>
<code>{</code>
<code>    if($request->isMethod("POST")) {</code>
<code>        $email = $request->input("email");</code>
<code>        $password = $request->input("password");</code>
<code>        $submit = $request->has("submit");</code>
<code>        return view("form", ["email"=>$email, "password"=>$password, "submit"=>$submit]);</code>
<code>    }</code>
<code>    return view('form');</code>
<code>}</code>
<code></code>
<code><span class="text-success">// Pour que les messages d'erreurs n'apparaissent pas sur la page du formulaire il faut récupérer le submit (cf. l.7 du Controller)</span></code>
<code><span class="text-success">// Puis vérifier s'il existe dans Blade avant de récupérer et afficher les messages.</span></code>
<code>&#64;if (isset($submit) && !empty($submit))</code>
<code>    &#64;if (empty($email) || empty($password))</code>
<code>        &#64;if (empty($email))</code>
<code>            &#60;?php array_push($message, "Veuillez saisir une adresse mail valide"); ?&#62;</code>
<code>        &#64;endif</code>
<code>        &#64;if (empty($password))</code>
<code>            &#60;?php array_push($message, "Veuillez saisir un mot de passe valide"); ?&#62;</code>
<code>        &#64;endif</code>
<code>    &#64;else</code>
<code>        &#60;p&#62;Votre adresse mail est : &#60;/p&#62;&#123;&#123; $email &#125;&#125;</code>
<code>    &#64;endif</code>
<code>    &#64;if ($message !== "")</code>
<code>        &#64;foreach ($message as $mes)</code>
<code>        &#60;div class="alert alert-danger mt-3"&#62;</code>
<code>            &#123;&#123; $mes &#125;&#125;</code>
<code>        &#60;/div&#62;</code>
<code>        &#64;endforeach</code>
<code>    &#64;endif</code>
<code>&#64;else</code>
</pre>
@endif
@endsection