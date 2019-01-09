<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-40 col-lg-8">
            <div class="title text-center">
                <h1 class="mb-10">Add hotel</h1>
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('hotelAdd') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Hotel name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                    <small id="emailHelp" class="form-text text-muted">Type hotel name.</small>
                </div>
                <div class="custom-file">
                    <label for="customFile">Hotel image</label>
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="form-group">
                    <label for="hotelStars">Hotel stars</label>
                    <select class="custom-select" name="stars" id="hotelStars">
                        <option selected>Hotel Stars</option>
                        <option value="1">★</option>
                        <option value="2">★★</option>
                        <option value="3">★★★</option>
                        <option value="4">★★★★</option>
                        <option value="5">★★★★★</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hotelPrice">Hotel price</label>
                    <input class="form-control" name="price" type="number" placeholder="Price" id="hotelPrice">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="condition">Air Condition</label>
                            <select class="custom-select" name="condition" id="condition">
                                <option selected>Air Condition</option>
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="wifi">Wi-fi</label>
                            <select class="custom-select" name="wifi" id="wifi">
                                <option selected>Wi-fi</option>
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="roomService">Room Service</label>
                            <select class="custom-select" name="service" id="roomService">
                                <option selected>Room Service</option>
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="restaurant">Restaurant</label>
                            <select class="custom-select" name="restaurant" id="restaurant">
                                <option selected>Restaurant</option>
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hotelFloor">Select floor</label>
                    <select multiple class="form-control" name="floor[]" id="hotelFloor">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hotelStars">Hotel available</label>
                    <select class="custom-select" name="available" id="hotelStars">
                        <option selected>Hotel Stars</option>
                        <option value="1">available</option>
                        <option value="0">not available</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>