@extends('layout')

@section('content')
    <h2>Orleáns &#127750;</h2>
    <hr>

    <p class="text-center">
        <img class="img-fluid" src="/images/orleans.JPG" alt="">
    </p>

    <p>
        A jsme tu!
    </p>

    <p>
        Orléans (do češtiny někdy překládáno jako Orleán) je město ve Francii, od jehož názvu a názvu celé oblasti se v minulosti odvozoval šlechtický titul příslušející mladším synům z královského rodu – titul vévoda orléanský.
    </p>

    <p>
        Město leží v kraji Centre sídlo departementu Loiret. Leží na řece Loiře v nadmořské výšce 90–124 m a na ploše 27,48 km² čítá 114 286 obyvatel (2012). Je obklopeno rovinatou krajinou, na jižním břehu Loiry pokrytou četnými lesy (oblast Sologne) a na severním břehu obilnářskou oblastí Beauce.
    </p>

    <p>
        Město Orléans založili již Keltové jako Cenabum. Roku 52 př. n. l. zde byla zavražděna řada římských obchodníků, a tak vypuklo dobře připravené povstání Galů proti Římské říši. Po následném dobytí Galie Caesarem bylo pod římskou správou součástí provincie Gallia Lugdunensis jako Cenabum Aureliani nebo Aurelianum (na počest císaře Aureliana). Pod tímto názvem město také existovalo i za dob raného křesťanství a franské říše. Ve 3. století bylo ve městě založeno orléanské biskupství. V 9. století byl dobyt Normany, později byl v držení Kapetovců.
        Na začátku 14. století se začala rozvíjet kultura a vzdělanost založením univerzity. Za stoleté války se Orléans proslavil Janou z Arku, která roku 1429 osvobodila město od anglické nadvlády.
    </p>

    <p></p>

    <p>Počátkem března 1429 vyjela se skromným doprovodem od guvernéra ve Vaucouleurs za Karlem VII. do Chinonu a za několik týdnů ho přiměla svou přímostí a nezlomným přesvědčením o svém vyšším poslání k tažení do Orléansu. Johanka z Arku dostala vojsko, byť malé, nechala si vyšít na korouhev květy lilie a slova Jesus Maria. Její vítězný pochod trval od května do července. 8. května 1429 vjela do osvobozeného Orléansu, 18. června, kde nejprve musela odrazit četné útoky a vyčistit okolí Orléansu. Klíčovým vítězstvím pro ní bylo dobytí pevnosti Tourelles. Poté vyrazila na města Jargeau, které obléhala měsíc. Dále k městu Meungu, které bylo obléháno půl roku; až po dlouhých a útrpných bojích vyhnala Johanka anglickou smetánku s mnoha zkušenými anglickými veliteli, a město nakonec padlo. Pro Johanku to byl obrovský úspěch. Nakonec se vydala k Beaugency, které po dvouměsíčním obléhání padlo, a s ním i poslední velký odpor v údolí řeky Loiry. Pak Johanka porazila anglickou armádu u Patay a odtáhla k Remeši, korunovačnímu městu francouzských králů. Po cestě dobyla města Auxerre, Troyes a jezerní město Chalons. 17. července byl dauphin Karel v Remeši korunován na Karla VII., čímž získal v očích současníků rozhodující převahu nad svým anglickým soupeřem, nezletilým Jindřichem VI.</p>

    <p>Kam dál?</p>

    <div class="jumbotron">
        <p class="text-center lead" style="margin: 0;">
            <a href="#">
                <a target="_blank" href="https://www.google.com/maps/place/50%C2%B003'43.0%22N+14%C2%B019'49.0%22E/@50.0618409,14.3302818,19.35z/data=!4m5!3m4!1s0x0:0x0!8m2!3d50.0619444!4d14.3302778">
                    50°03'43.0"N 14°19'49.0"E
            </a>
        </p>
    </div>

    <a href="/images/5_1.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/5_1.jpeg">
    </a>
    <a href="/images/5_2.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/5_2.jpeg">
    </a>

    <a href="/images/5_3.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/5_3.jpeg">
    </a>

    <a href="/images/5_4.jpeg">
        <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/5_4.jpeg">
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
            <input type="hidden" name="step" value="5">
            <h4 class="display-6">Další místo?</h4>
            <hr>
            <div class="form-group form-group-lg">
                <input type="text" class="text-center form-control" name="code" placeholder="Sem napiš nalezenou indícii">
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Objevit další místo</button>
        </form>
    </div>
@endsection