@section('title')
Findsport.uz
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/main.c6596996.css')}}">
@endsection

<main>
  <section class="welcome">
    <div class="container">
      <div class="container welcome-content">
        <div class="welcome-title">
          <h1>Занимайтесь спортом</h1>
          <p>Находите спортивные площадки быстро и удобно</p>
        </div>
        <div class="services"> <a href="#" class="item"> <img src="assets/arena.0d0b93d2.svg" title="Icon made by Freepik from www.flaticon.com" alt="arenas"> <span>Арендовать площадку</span> <i class="fas fa-arrow-circle-right"></i> </a> <a href="#" class="item"> <img src="assets/training.1e65d49c.svg" title="Icon made by Freepik from www.flaticon.com" alt="training"> <span>Записаться на тренировку</span> <i class="fas fa-arrow-circle-right"></i> </a> <a href="#" class="item"> <img src="assets/map.d836c2ff.svg" title="Icon made by Freepik from www.flaticon.com" alt="map"> <span>Посетить мероприятия</span> <i class="fas fa-arrow-circle-right"></i> </a> </div>
      </div>
    </div>
  </section>
  <section>
    <div class="title">
      <div class="container">
        <div class="top">
          <h2>Спортивные площадки</h2>
          <a href="{{route('places',$l)}}">
            Показать все
          </a>
        </div>
        <hr>
        <hr class="bold">
      </div>
    </div>
    <div class="clubs content">
      <div class="container">
        <div class="row mobile-scroll">
          @foreach($places as $place)
          <div class="col-lg-3 col-sm-6"> 
            <a class="club-card" href="#"> 
              <span class="price">от {{$place->get_min_price()}} UZS</span>
              <img 
                src="{{route('unimg')."?path=".urlencode($place->image)}}" 
                alt=""
              >
              <div class="stars">
                @for($i=0;$i<$place->rate;$i++)
                  <i class="fa fa-star gold"></i>
                @endfor
                @for($i;$i<5;$i++)
                  <i class="fa fa-star-o"></i> 
                @endfor
              </div>
              <h3>{{json_decode($place->title)->$l}}</h3> 
              <span> 
                <i class="fa fa-map-marker"></i>
                {{json_decode($place->address)->$l}}
              </span>
            </a> 
          </div>
          @endforeach
      </div>
    </div>
  </div>
</section>
<section class="sports">
  <div class="container">
    <h2>Выбирайте свой спорт</h2>
    <div class="sport-types">
      @foreach($sports as $sport)
      <a href="#"> 
        <img src="{{route('unimg')."?path=".urlencode($sport->path)}}" alt=""> 
        <span>{{json_decode($sport->title)->$l}}</span> 
      </a> 
      @endforeach
    </div>
  </div>
</section>
<section>
  <div class="title">
    <div class="container">
      <div class="top">
        <h2>Тренировки в клубах</h2> <a href="#">Показать все</a>
      </div>
      <hr>
      <hr class="bold">
    </div>
  </div>
  <div class="clubs content">
    <div class="container">
      <div class="row mobile-scroll">
        @foreach($clubs as $club)
        <div class="col-lg-3 col-sm-6"> 
          <a class="club-card" href="#">
            <img 
              src="{{route('unimg')."?path=".urlencode($club->path)}}" 
              alt=""
            >
            <h3>{{json_decode($club->title)->$l}}</h3>
            <span> 
              <i class="fa fa-map-marker"></i> 
              {{json_decode($club->address)->$l}}
            </span>
          </a> 
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<section class="grey testimonials">
  <div class="title">
    <div class="container">
      <div class="top">
        <h2>Отзывы о площадках</h2>
      </div>
      <hr>
      <hr class="bold">
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-11">
          <div class="tes-carousel">
            <div class="tes-card">
              <div class="tes-text"> Играем не первый раз, площадка хорошая и вполне просторная (хватает места для подачи и по бокам), высота потолков допустима (бывают и ниже). Раздевалки и душ кому-то покажутся убитыми и тесными. Но все необходимое имеется (сидушки, крючки). Персонал доброжелателен, помогает натянуть сетку, все ок. Отличный зал по соотношению цена-качество-транспортная доступность. </div>
              <div class="tes-detail"> <span class="author">Арсений Георков</span> <span class="middle-text">пишет о площадке</span> <a href="#">Площадка для игровых видов спорта и единоборств на Кленовом</a> </div>
            </div>
            <div class="tes-card">
              <div class="tes-text"> Очень классная атмосфера </div>
              <div class="tes-detail"> <span class="author">Евгений Школьный</span> <span class="middle-text">пишет о площадке</span> <a href="#">Сквош корты CitySquash Сокол</a> </div>
            </div>
            <div class="tes-card">
              <div class="tes-text"> Хороший спортивный зал для малочисленной группы. В зале имеется всё необходимое для проведения полноценной тренировки. Единственный недостаток: баскетбольные кольца расположены на нестандартной высоте, чуть выше обычного, покрытие мягкое и пришлось подкачивать мячи. </div>
              <div class="tes-detail"> <span class="author">Александр Попов</span> <span class="middle-text">пишет о площадке</span> <a href="#">Спортзал на Панфилова</a> </div>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="tes-controls">
            <div class="up"> <i class="fa fa-arrow-up"></i> </div>
            <div class="down"> <i class="fa fa-arrow-down"></i> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="for-owners">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="title">Возможности для клубов</div> <a href="#" class="btn">Добавить объект</> </a>
      </div>
      <div class="col-lg-7">
        <div class="our-service">
          <ul>
            <li>Привлечение клиентов на аренду площадки</li>
            <li>Простая и удобная система</li>
            <li>Привлечение клиентов на аренду площадки</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="all-sports">
  <div class="container">
    <h2>Найдите то, что вам нужно</h2>
    <nav> <a href="#" class="nav-link active" data-target="tab-1">Площадки</a> <a href="#" class="nav-link" data-target="tab-2">Занятия</a> <a href="#" class="nav-link" data-target="tab-3">Клубы</a> </nav>
    <div class="tab-content">
      <div class="tab active" data-tab="tab-1"> <a href="#">Бадминтон</a> <a href="#">Баскетбол</a> <a href="#">Волейбол</a> <a href="#">Единоборство</a> <a href="#">Йога</a> <a href="#">Сквош</a> <a href="#">Танцы</a> <a href="#">Теннис</a> <a href="#">Футбол</a> </div>
      <div class="tab" data-tab="tab-2"> <a href="#">Баскетбол</a> <a href="#">Волейбол</a> <a href="#">Единоборство</a> <a href="#">Йога</a> <a href="#">Сквош</a> <a href="#">Танцы</a> <a href="#">Теннис</a> <a href="#">Футбол</a> </div>
      <div class="tab" data-tab="tab-3"> <a href="#">Волейбол</a> <a href="#">Единоборство</a> <a href="#">Йога</a> <a href="#">Сквош</a> <a href="#">Танцы</a> <a href="#">Теннис</a> <a href="#">Футбол</a> </div>
    </div>
  </div>
</section>
</main>
@section('js')
<script src="{{asset('assets/slick.min.ab04a41b.js')}}"></script>
<script src="{{asset('assets/main.1a031342.js')}}"></script>
@endsection