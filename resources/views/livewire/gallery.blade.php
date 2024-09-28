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
            <div class="row properties-box1" >
                @if(!empty($galleries))
                    @foreach($galleries as $gallery)
                        @if($gallery->type === 'image')
                            <div class="col-lg-4 col-md-6 align-self-center mb-30 ">
                                <div class="item" style="padding: 5px 10px 20px 10px !important; background-color: white">
                                    <a href="uploads/gallery/{{$gallery->image_path}}">
                                        <img src="uploads/gallery/thumbnails/{{convertImageName($gallery->image_path)}}" alt="{{$gallery->title}}">
                                        @if(!empty($gallery->title))
                                            <div class="caption" style="text-align:center">{{$gallery->title}}</div>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
            @php
                $hasVideo = $galleries->contains(function ($item) {
                    return $item->type === 'video';
                });
            @endphp
            @if($hasVideo)
                <div class="row">
                    <div class="section-heading my-4">
                        <h6>| Videos</h6>
                    </div>
                </div>
            @endif

            <div class="row">
                @if(!empty($galleries))
                    @foreach($galleries as $gallery)
                        @if($gallery->type === 'video')
                            <div class="col-lg-4 col-md-6 align-self-center mb-3">
                                <div class="video-frame " id="video-container-gv-{{$gallery->id}}" style="position: relative;">
                                    <video src="{{asset('uploads/gallery/'.$gallery->image_path)}}#t=5" id="video-thumbnail-gv-{{$gallery->id}}" style="width: 100%; cursor: pointer;"></video>
                                    <a href="javascript:void(0);" id="play-button-gv-{{$gallery->id}}" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        <i class="fa fa-play" style="font-size: 48px; color: white;"></i>
                                    </a>
                                </div>
                                @if(!empty($gallery->title))
                                    <div class="caption mb-2" style="left: 0; bottom: 0;position: relative; width: 100%; position: relative; text-align:center">{{$gallery->title}}</div>
                                @endif
                                <script>
                                    document.getElementById('video-thumbnail-gv-{{$gallery->id}}').addEventListener('click', function () {
                                        const videoContainer = document.getElementById('video-container-gv-{{$gallery->id}}');
                                        let divHeight =  document.getElementById('video-container-gv-{{$gallery->id}}').offsetHeight - 2;
                                        videoContainer.innerHTML = '<iframe width="100%" height="'+divHeight+'" src="{{asset('uploads/gallery/'.$gallery->image_path)}}?autoplay=1"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                    });
                                    document.getElementById('play-button-gv-{{$gallery->id}}').addEventListener('click', function () {
                                        const videoContainer = document.getElementById('video-container-gv-{{$gallery->id}}');
                                        let divHeight =  document.getElementById('video-container-gv-{{$gallery->id}}').offsetHeight - 2;
                                        videoContainer.innerHTML = '<iframe width="100%" height="'+divHeight+'" src="{{asset('uploads/gallery/'.$gallery->image_path)}}?autoplay=1"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                    });
                                </script>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</main>
@script
<script>
    $(window).on('load', function() {
        // Ensure all images are loaded before initializing Magnific Popup
        $('.properties-box1').magnificPopup({
            delegate: 'a',
            preloader: false,
            gallery: {
                enabled: true,
                preload: [0, 1]
            },
            callbacks: {
                elementParse: function(item) {
                    if (item.el.attr('data-type') === 'video') {
                        item.type = 'iframe';
                    } else {
                        item.type = 'image';
                    }
                }
            },
            image: {
                titleSrc: function(item) {
                    return item.el.find('.caption').text();
                }
            },
            removalDelay: 1600,
            iframe: {
                patterns: {
                    video: {
                        index: '', // Regular expression used to determine if the link is a video
                        id: function(url) {
                            return url;
                        },
                        src: '%id%' // URL with %id% replaced by the captured group from the id function
                    }
                }
            }
        });
    });
</script>
@endscript

