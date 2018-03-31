@extends('layout')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Vítej Borůvko.</h1>
        <p class="lead">Připravil jsem pro tebe hru. Budeš potřebovat <strong>Google Mapy v mobilu, toulavé botky a
                trochu dobré nálady</strong>. Jdeme na to.</p>
        <hr class="my-4">
        <p>V každém kroku najdeš GPS souřadnice a příběh k dané lokalitě. Na souřadnice musíš dojít a najít kartičku s
            heslem (indicií) k další lokalitě.</p>
    </div>

    <h2>Johanka z Arku</h2>
    <hr>

    <p class="text-center">
        <img class="img-fluid" src="/images/johanka.jpg" alt="">
    </p>

    <p>
        Johanka se narodila patrně roku 1412 v zámožné selské rodině v lotrinsku.
        Krátce nato byla zahájena třetí etapa stoleté války. Angličané se vylodili na kontinentě a roku 1415 zvítězili u
        Azincourtu.
        Poté postupně ovládli severní Francii. Roku 1420 podepsali anglický král Jindřich V. a francouzský král Karel
        VI. smlouvu
        v Troyes, na jejímž základě získal dědický nárok na francouzskou korunu po Karlově smrti anglický panovnický rod
        Lancasterů.
    </p>

    <p>
        Pokud sečteš všechna čísla v roce předpokládaného narození Johanky, dostaneš číslici 8. A přesně tolik míst na
        své
        cestě ve stopách Panny Orleánské navštívíš.
    </p>

    <p>
        Pojďme se spolu vydat hned na to první.
    </p>

    <div class="jumbotron">
        <p class="text-center lead" style="margin: 0;">
            <a href="#">
                <a target="_blank" href="https://www.google.com/maps/place/50%C2%B003'38.0%22N+14%C2%B019'43.0%22E/@50.0601154,14.3283818,18.19z/data=!4m5!3m4!1s0x0:0x0!8m2!3d50.0605556!4d14.3286111">
                    50°03'38.0"N 14°19'43.0"E
                </a>
            </a>
        </p>
    </div>

    <p>Budeš muset přeletět kamsi do Francie, kde celý příběh začíná. <strong>Najdi svoji indicií, která ti pomůže
            přesunout se naší cestě dále.</strong></p>

        <a href="/images/0_1.jpeg">
            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/0_1.jpeg">
        </a>
        <a href="/images/0_2.jpeg">
            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/0_2.jpeg">
        </a>

        <a href="/images/0_3.jpeg">
            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/0_3.jpeg">
        </a>

        <a href="/images/0_4.jpeg">
            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/0_4.jpeg">
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
            <input type="hidden" name="step" value="0">
            <h4 class="display-6">Další místo?</h4>
            <hr>
            <div class="form-group form-group-lg">
                <input type="text" class="text-center form-control" name="code" placeholder="Sem napiš nalezenou indícii">
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Objevit další místo</button>
        </form>
    </div>
@endsection