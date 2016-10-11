@foreach ($events as $event)
  <li>
      <a href="{{ action('RegisterController@index', $event->id) }}" class="dropdown-toggle" data-toggle="dropdown">
        {{ $event->nama }}
      </a>
  </li>
@endforeach
