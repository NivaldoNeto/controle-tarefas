You are not Authenticated


@auth
    <h1>You are Authenticated</h1>
    <p>ID {{Auth::user()->id;}}</p>  
    <p>Nome {{Auth::user()->name;}}</p>    
    <p>E-mail {{Auth::user()->email;}}</p>

@endauth

@guest
    Hello user, how are you?
@endguest