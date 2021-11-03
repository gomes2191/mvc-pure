<h1>Usuários</h1>

<ul>
    @foreach ($users as $user)
        <li> {{ $user }} </li>
    @endforeach
</ul>