<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-40 col-lg-8">
            <div class="title text-center">
                <h1 class="mb-10">Destinations</h1>
            </div>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-warning" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        @if($hotels)
            @forelse($hotels as $hotel)
                <div class="col-lg-4">
                    <div class="single-destinations">
                        <div class="thumb">
                            <img src="{{ asset('img/hotels/'.$hotel->image) }}" alt="{{ $hotel->name }}">
                        </div>
                        <div class="details">
                            <h4 class="d-flex justify-content-between">
                                <span>{{ $hotel->name }}</span>
                                <div class="star">
                                    @for($i = 0; $i < $hotel->stars; $i++)
                                        <span class="fa fa-star checked"></span>
                                    @endfor
                                </div>
                            </h4>
                            <p>
                                View on map   |   {{ $hotel->reviews}} Reviews
                            </p>
                            <form action="{{ route('reserve') }}" method="post">
                                @csrf
                                <ul class="package-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Wi-fi</span>
                                        @if($hotel->wifi)
                                            <span>Yes</span>
                                        @else
                                            <span>No</span>
                                        @endif
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Room Service</span>
                                        @if($hotel->service)
                                            <span>Yes</span>
                                        @else
                                            <span>No</span>
                                        @endif
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Air Condition</span>
                                        @if($hotel->condition)
                                            <span>Yes</span>
                                        @else
                                            <span>No</span>
                                        @endif
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Restaurant</span>
                                        @if($hotel->restaurant)
                                            <span>Yes</span>
                                        @else
                                            <span>No</span>
                                        @endif
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Floor</span>
                                        <span>
                                                <select name="floor" id="floor">
                                                    @foreach($hotel->options as $k=>$option)
                                                        <option value="{{ $option['id'] }}">{{$option['floor']}}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Price per night</span>
                                        <a href="#" class="price-btn">${{ $hotel->price }}</a>
                                    </li>
                                </ul>
                                @if($hotel->available)
                                    <button type="submit" class="btn btn-outline-warning">Reserve</button>
                                @else
                                    <button type="submit" class="btn btn-outline-warning" disabled>Reserve</button>
                                @endif
                                <input type="hidden" name="hotel" value="{{ $hotel->id }}">
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <h4>No one hotel</h4>
            @endforelse
        @endif
    </div>
</div>