<div class = 'row bg-light border border'>
        @foreach($films as $film)
        <div class = 'col-4' >
            <div class = 'card border border' style = 'heigth: 15rem;width: 14rem;'>
                <img src = "https://image.tmdb.org/t/p/w500{{$film['poster_path']}}" class = 'card-img-top'>
                <div class = 'card-body'>
                    <h5 class = 'card-title'> {{$film['title']}}</h5>
                    <p class = 'card-text'>{{$film['overview']}}</p>
                    <a href = "/film/{{$film['id']}}" class = 'btn btn-primary'> Ir ver o filme </a>
                </div>
            </div>
        </div>
        @endforeach 
</div>
