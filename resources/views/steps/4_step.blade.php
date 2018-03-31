@extends('layout')

@section('content')
    <h2>Bazilika svaté Jany z Arku &#9962;</h2>
    <hr>

    <p class="text-center">
        <img class="img-fluid" src="/images/bazilika.jpg" alt="">
    </p>

    <p>
        Koukej lásko, Bazilika svaté Jany z Arku.
    </p>

    <p>
        Římskokatolická bazilika svaté Jany z Arku je křesťanská bazilika v 18. obvodu v Paříži, v ulici Rue de la Chapelle. Farní kostel je zasvěcen Johance z Arku a byl postaven ve 20. století v těsném sousedství gotického kostela Saint-Denys de la Chapelle.
    </p>

    <p>
        V roce 1926 vyhlásila Pařížská arcidiecéze veřejnou soutěž na stavbu kostela zasvěcenému Johance z Arku v sousedství kostela Saint-Denys de la Chapelle, kde se Johanka z Arku v roce 1429 modlila. Výstavba začala již v roce 1930, ale byla dokončena až roku 1964 pod vedením architekta Pierra Isnarda.
    </p>

    <p>A teď pojďme tam, kde Johanka získala své druhé jméno. Tahle cesta bude určitě moc dobrá pro naše pohodlí.</p>

    <div class="jumbotron">
        <p class="text-center lead" style="margin: 0;">
            <a href="#">
                <a target="_blank" href="https://www.google.com/maps/place/50%C2%B003'40.0%22N+14%C2%B019'58.0%22E/@50.0608658,14.3324386,19.16z/data=!4m5!3m4!1s0x0:0x0!8m2!3d50.0611111!4d14.3327778">
                    50°03'40.0"N 14°19'58.0"E
                </a>
        </p>
    </div>

    <a href="/images/4_1.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/4_1.jpeg">
    </a>
    <a href="/images/4_2.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/4_2.jpeg">
    </a>

    <a href="/images/4_3.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/4_3.jpeg">
    </a>

    <a href="/images/4_4.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/4_4.jpeg">
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
            <input type="hidden" name="step" value="4">
            <h4 class="display-6">Další místo?</h4>
            <hr>
            <div class="form-group form-group-lg">
                <input type="text" class="text-center form-control" name="code" placeholder="Sem napiš nalezenou indícii">
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Objevit další místo</button>
        </form>
    </div>
@endsection