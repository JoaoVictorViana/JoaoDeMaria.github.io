<style>
    a:hover{
        color: white;
    }

    
    .nav-item-color{
        color: #e1e1e0;
    }
    .now{
        color : white;
    }
</style>


<ul class = 'nav bg-info' style = 'height: 3rem;'>
    <li class = 'nav-item'> 
        <a href = '/' class = "nav-link nav-item-color {{$nav_array[0]}}" > Home </a>
    </li>
    <li class = 'nav-item'> 
        <a href = '/list' class = "nav-link nav-item-color {{$nav_array[1]}}"> Lista </a>
    </li>
    <li class = 'nav-item'> 
        <a href = '/favorites' class = "nav-link nav-item-color {{$nav_array[2]}}"> Favoritos </a>
    </li>
    <li class = 'nav-item'> 
        <a href = '/contact' class = "nav-link nav-item-color {{$nav_array[3]}}"> Contatos </a>
    </li>
</ul>