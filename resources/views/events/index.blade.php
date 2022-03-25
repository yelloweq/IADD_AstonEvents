
@include('layouts.basic')

<header class=" pt-4 text-center">
  <h1 class="p-3">{{ __('Events') }}</h1>

</header>
<div class="container py-4">
  <form class="d-flex pb-4" name="sort" id="sort">

    <select class="custom-select mx-3" name="sort" id="sort">
      <option value="">Sort by</option>
      <option value="Likes">Likes</option>
      <option value="upcomming">Upcomming</option>
      <option value="new">Newest</option>
      <option value="A-z">A-z</option>
      <option value="Z-a">Z-a</option>
    </select>

    <select class="d-flex custom-select mx-3" name="category" id="category">
      <option value="">Category</option>
      <option value="all">All</option>
      <option value="Sports">Sports</option>
      <option value="Culture">Culture</option>
      <option value="Other">Other</option>
    </select>

    <button class="d-flex btn btn-primary mx-3" type="submit" id="sortbutton">Sort</button>

</form>
<div class="row justify-content-center ">
  

    @foreach ($events as $event)
    <div class="card col-md-3 mx-2 mb-3 py-4 text-center shadow-md">
        <img height="50"  class="rounded mx-auto d-block" src="{{ asset('storage/' . strtolower($event->name) . ".png") }}" alt="Card image cap" onerror="this.onerror=null;this.src='{{ asset('storage/placeholder.png') }}';">
        <div class="card-body text-align-center">
          <h5 class="card-title">{{ $event->name }}</h5>
          <p class="card-text">{{ $event->description }}</p>
        </div>
        <a href="{{ route('events.show', [$event->id]) }}" class="">Details</a>
          <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($event->date)->toDayDateTimeString() }}</small></p>
        <div class="row align-items-center">
        <div class="col-4">

          @if (Auth::check() && Auth::user()->hasLiked($event))
          <a class="btn heart-icon-active" href="{{ route('events.like', [$event->id]) }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-heart-fill heart-icon-active" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
          </svg>
          </a> 
          @else
          <a
            class="btn heart-icon" 
            @if (Auth::check())
            href="{{ route('events.like', [$event->id]) }}"> 
            @else
            href="{{ route('register') }}">
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-heart-fill heart-icon" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
          </a>
          @endif

        </div>

        <div class="col-8">
          @if ($event->users->contains(Auth::user()))
        <a class="btn btn-danger btn-block d-flex align-items-center justify-content-center" href="{{ route('events.unbook', [$event->id]) }}" role="button">Cancel booking</a>
        @else
        <a class="btn btn-primary btn-block d-flex align-items-center justify-content-center" href="{{ route('events.book', [$event->id]) }}" role="button">Book</a>
        @endif

        </div>
          <div class="col-4">
            <small class="text-muted">Likes: {{ $event->likers->count() }}</small>
          </div>
      </div>

    </div>
    @endforeach

  </div>
</div>


