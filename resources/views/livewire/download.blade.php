<main>
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="{{route('front.index')}}" wire:navigate>Home</a>  /  Download / {{$type}}</span>
                    <h3>{{$type}}</h3>
                </div>
            </div>
        </div>
    </div>
    <style>
        .embed-responsive {
            position: relative;
            display: block;
            height: 0;
            padding: 0;
            overflow: hidden;
        }
    </style>
    @php
        $settings = \App\Models\Settings::all()->pluck('value', 'key');
    @endphp
    <div class="contact-page section">
        <div class="container">
            <div class="row">
                @if($type === 'swajan-brochure')
                    <div class="section-heading my-4 px-1">
                        <h6>
                            | SWAJAN BROCHURE
                            <a href="../uploads/brochure/{{$settings->get('brochure_path')}}" download>
                                <span class="float-end downloadBtn" style="color: #767676">Download &nbsp;&nbsp;<i class="fa fa-download"></i> </span>
                            </a>
                        </h6>
                    </div>
                    <div style="border: 2px solid #b5b5b5; padding: 0">
                        <embed src="../uploads/brochure/{{$settings->get('brochure_path')}}#view=FitH&navpanes=0&scrollbar=0" width="100%" height="900" type="application/pdf">
                    </div>
                @elseif($type === 'inaugural-offer')
                    <div class="section-heading my-4 px-1">
                        <h6>
                            | INAUGURAL OFFER
                            <a href="{{asset('RENTAL SWAJAN INAUGURAL OFFER VILLA & APT.pdf')}}" download>
                                <span class="float-end downloadBtn" style="color: #767676">Download &nbsp;&nbsp;<i class="fa fa-download"></i> </span>
                            </a>
                        </h6>
                    </div>
                    <div style="margin: 20px 10px">
                        <img src="{{asset('client/assets/images/Offer-1.svg')}}">
                    </div>
                    <div style="margin: 20px 10px">
                        <img src="{{asset('client/assets/images/Offer-2.svg')}}">
                    </div>
                @elseif($type === 'rera-certificate')
                    <div class="section-heading my-4 px-1">
                        <h6>
                            | RERA Certificate
                            <a href="{{asset('RERA-Certificate-Swajan.pdf')}}" download>
                                <span class="float-end downloadBtn" style="color: #767676">Download &nbsp;&nbsp;<i class="fa fa-download"></i> </span>
                            </a>
                        </h6>
                    </div>
                    <div style="border: 2px solid #b5b5b5; padding: 0">
                        <embed src="{{asset('RERA-Certificate-Swajan.pdf')}}#view=FitH&navpanes=0&scrollbar=0" style="padding: 0" width="100%" height="900" type="application/pdf">
                    </div>
                @else
                    <h1 class="text-center">Not Found. Something is wrong.</h1>
                @endif
            </div>
        </div>
    </div>
</main>
