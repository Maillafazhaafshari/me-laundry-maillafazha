{{-- Banner --}}

    <!-- begin container -->
    <div class="container">
        <a href="{{route('login')}}">Masuk</a>
        <h3>Lacak Status Laundry</h3>
        <div class="input-group m-b-20">
            <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
            </span>
        </div>
        @include('frontend.modal')
    </div>
{{-- End Header --}}
