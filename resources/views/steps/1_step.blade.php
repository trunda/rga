@extends('layout')

@section('content')
    <h2>Vítej na Ruzyni, lásko &#x1F493; &#9992;</h2>
    <hr>

    <p class="text-center">
        <img class="img-fluid" src="/images/plane.png" alt="">
    </p>

    <p>
        Jak jistě víš, Johanka z Arku je <strong>francouzská hrdinka</strong>, která velela armádě od útlého věku a porazila dobyvačné a
        odvěké nepřátele Francie &mdash; Brity.
    </p>

    <p>Aby jsi částečně prožila Johanky příběh, právě jsi se přesunula <strong>z Pražské Ruzyně do Francie na letiště Charlese de Gaulla</strong>.</p>

    <p>
        Chceme-li pokračovat dále, vydejme se tam, kde to všechno začalo. Už víš, jak se tam spolu dostaneme?
    </p>

    <div class="jumbotron">
        <p class="text-center lead" style="margin: 0;">
            <a href="#">
                <a target="_blank" href="https://www.google.com/maps/place/50%C2%B003'36.2%22N+14%C2%B019'45.6%22E/@50.0598704,14.3290021,18.51z/data=!4m6!3m5!1s0x0:0x0!7e2!8m2!3d50.0600459!4d14.3293327">50°03'36.2"N 14°19'45.6"E</a>
            </a>
        </p>
    </div>

    <a href="/images/1_1.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/1_1.jpeg">
    </a>
    <a href="/images/1_2.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/1_2.jpeg">
    </a>

    <a href="/images/1_3.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/1_3.jpeg">
    </a>

    <a href="/images/1_4.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/1_4.jpeg">
    </a>

    <hr>

    <div class="jumbotron text-center">
        @if(session()->has('nope'))
            <div class="alert alert-danger">
                {{ session()->get('nope') }}
            </div>
        @endif
        <form id="form" action="/#form" method="post">
            @csrf
            <input type="hidden" name="step" value="1">
            <h4 class="display-6">Další místo?</h4>
            <hr>
            <div class="form-group form-group-lg">
                <input type="text" class="text-center form-control" name="code" placeholder="Sem napiš nalezenou indícii">
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Objevit další místo</button>
        </form>
    </div>
@endsection