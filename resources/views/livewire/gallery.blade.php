<main>
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="{{route('front.index')}}" wire:navigate>Home</a> / Gallery</span>
                    <h3>Gallery</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section properties">
        <div class="container">
            <div class="row properties-box">
                @if(!empty($galleries))
                    @foreach($galleries as $gallery)
                        @if($gallery->type === 'video')
                            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items">
                                <div class="item video-thumbnail">
                                    <a href="{{ asset('client/assets/gallery/video/Lily_Pond.mp4') }}"  data-type="video">
                                        <img src="{{ asset('client/assets/gallery/image/thumb/Lily_Pond.png') }}" alt="Lily Pond">
                                        <div class="caption">Lily Pond</div>
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items">
                                <div class="item">
                                    <a href="uploads/gallery/{{$gallery->image_path}}">
                                        <img src="uploads/gallery/thumbnails/{{convertImageName($gallery->image_path)}}" alt="{{$gallery->title}}">
                                        <div class="caption">{{$gallery->title}}</div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</main>
