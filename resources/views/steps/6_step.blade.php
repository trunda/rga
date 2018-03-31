@extends('layout')

@section('content')
    <h2>Compiegne &#128532;</h2>
    <hr>

    <p class="text-center">
        <img class="img-fluid" src="/images/compiegne.jpg" alt="">
    </p>

    <p>
        Vítej v Compiegne. Toto místo se stalo Johance osudným.
    </p>

    <p>
        Compiègne je francouzské město v departementu Oise regionu Hauts-de-France na severu Francie. Je situované podél řeky Oise. Její obyvatelé jsou nazýváni Compiégnois.
    </p>

    <p>
        Jana z Arku byla rozhodnuta pokračovat v boji až do vyhnání Angličanů ze země. Mocně působila na vojáky i lid, král se však začal její popularity obávat, proto jí svěřoval stále méně a méně důležité, ale často nebezpečné úkoly. Počátkem září 1430 sice zaútočily její oddíly na Paříž, neměly však bez královniny podpory šanci. Při obnovení válečných operací na jaře 1431 hájila Jana s malým vojenským oddílem proti anglickým útokům Compiegne a byla – patrně zradou – zajata 23. května Burgunďany, kteří byli spojenci Anglie.
    </p>

    <p>
        Zde byla Johanka (Jana) zrazena a uvězněna.
    </p>

    <p>Než dojdeme do cíle, podíváme se ještě do jedná oblasti Francie, těšíš se?</p>

    <div class="jumbotron">
        <p class="text-center lead" style="margin: 0;">
            <a href="#">
                <a target="_blank" href="https://www.google.com/maps/place/50%C2%B003'24.0%22N+14%C2%B020'13.0%22E/@50.0566701,14.3347557,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d50.0566667!4d14.3369444">
                    50°03'24.0"N 14°20'13.0"E
            </a>
        </p>
    </div>

    <a href="/images/6_1.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/6_1.jpeg">
    </a>
    <a href="/images/6_2.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/6_2.jpeg">
    </a>

    <a href="/images/6_3.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/6_3.jpeg">
    </a>

    <a href="/images/6_4.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/6_4.jpeg">
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
            <input type="hidden" name="step" value="6">
            <h4 class="display-6">Další místo?</h4>
            <hr>
            <div class="form-group form-group-lg">
                <input type="text" class="text-center form-control" name="code" placeholder="Sem napiš nalezenou indícii">
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Objevit další místo</button>
        </form>
    </div>
@endsection