@extends('layout')

@section('content')
    <h2>Nádraží Gare de Paris-Nord &#128644;</h2>
    <hr>

    <p class="text-center">
        <img class="img-fluid" src="/images/nadrazi.jpg" alt="">
    </p>

    <p>
        Právě jsi dorazila na hlavní nádraží v Paříži, ze kterého se budeme společně přesouvat dál.
    </p>

    <p>Pojďme si mezi tím, než ti pojede vlak (jede ti v {{ Carbon\Carbon::now()->addMinute(22)->format('h:i') }}, to je za <strong>22 minut</strong>), říci něco o raném životě Johanky.</p>

    <p>Od svých 14 let slýchala Johanka podle své výpovědi hlasy a měla vidění, v nichž se jí zjevovali andělé a světci, především archanděl Michael, sv. Kateřina a sv. Markéta. Johanka se k nim modlila za záchranu Francie, neboť žoldnéřská anglická vojska drancovala a vypalovala její rodný kraj a nezadržitelně se blížila k Orleánsu. Údajné hlasy světců jí prý sdělily, že byla Bohem vyvolena osvobodit Francii, a archanděl Michael ji nabádal, aby na sebe vzala mužský šat a osvobodila Orléans. Inspirovaná těmito hlasy a díky síle své vlastní osobnosti, víře v Boha a přesvědčení ve své poslání vystoupila veřejně se svými úmysly.</p>

    <p>
        Už jsi určitě našla další kartičku a tak víš, kam jedeme. Vezmeme si deku a cestou pod ní budeme hrát karty. Tak poběž lásko, ať ten vlak stihneme!
    </p>

    <div class="jumbotron">
        <p class="text-center lead" style="margin: 0;">
            <a href="#">
                <a target="_blank" href="https://www.google.com/maps/place/50%C2%B003'39.0%22N+14%C2%B020'03.0%22E/@50.0610083,14.3336111,19.26z/data=!4m5!3m4!1s0x0:0x0!8m2!3d50.0608333!4d14.3341667">50°03'39.0"N 14°20'03.0"E</a>
            </a>
        </p>
    </div>

        <a href="/images/2_1.jpeg">
            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/2_1.jpeg">
        </a>
        <a href="/images/2_2.jpeg">
            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/2_2.jpeg">
        </a>

        <a href="/images/2_3.jpeg">
            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/2_3.jpeg">
        </a>

        <a href="/images/2_4.jpeg">
            <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/2_4.jpeg">
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
            <input type="hidden" name="step" value="2">
            <h4 class="display-6">Další místo?</h4>
            <hr>
            <div class="form-group form-group-lg">
                <input type="text" class="text-center form-control" name="code" placeholder="Sem napiš nalezenou indícii">
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Objevit další místo</button>
        </form>
    </div>
@endsection