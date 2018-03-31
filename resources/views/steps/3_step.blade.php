@extends('layout')

@section('content')
    <h2>Domrémy-la-Pucelle &#128029;</h2>
    <hr>

    <p class="text-center">
        <img class="img-fluid" src="/images/dum.jpg" alt="">
    </p>

    <p>
        Vítej u rodného domu Johanky z Arku.
    </p>

    <p>Domrémy-la-Pucelle je obec ve Francii na severozápadním okraji departementu Vosges a v regionu Grand Est. Původně nesla jméno Domrémy, které se změnilo na Domrémy-la-Pucelle na počest zdejší rodačky Jany z Arku, přezdívané la Pucelle d'Orléans.</p>

    <p>Od roku 1429 byla obec na žádost Jany z Arku osvobozena následníkem trůnu Karlem VII. Francouzským od povinnosti placení daní. Podle Jany totiž daně místní obyvatele příliš zatěžovaly a Karel tím chtěl také vyjádřit Janě svůj vděk za to, že vedla jeho vojska do boje proti Anglii ve stoleté válce. Obec musela znovu začít platit daně po Velké francouzské revoluci.</p>

    <p>Nyní se přesuneme na další, tentokrát posvátné místo. Musíme se ale vrátit zpět do Paříže, tak mi dej ruku a jdeme.</p>

    <div class="jumbotron">
        <p class="text-center lead" style="margin: 0;">
            <a href="#">
                <a target="_blank" href="https://www.google.com/maps/place/50%C2%B003'39.0%22N+14%C2%B019'46.0%22E/@50.0608604,14.329248,20.12z/data=!4m5!3m4!1s0x0:0x0!8m2!3d50.0608333!4d14.3294444">50°03'39.0"N 14°19'46.0"E</a>
        </p>
    </div>

    <a href="/images/3_1.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/3_1.jpeg">
    </a>
    <a href="/images/3_2.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/3_2.jpeg">
    </a>

    <a href="/images/3_3.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/3_3.jpeg">
    </a>

    <a href="/images/3_4.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/3_4.jpeg">
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
            <input type="hidden" name="step" value="3">
            <h4 class="display-6">Další místo?</h4>
            <hr>
            <div class="form-group form-group-lg">
                <input type="text" class="text-center form-control" name="code" placeholder="Sem napiš nalezenou indícii">
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Objevit další místo</button>
        </form>
    </div>
@endsection