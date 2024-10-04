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
    @php
        $settings = \App\Models\Settings::all()->pluck('value', 'key');
    @endphp
    <div class="contact-page section">
        <div class="container">
            <div class="row">
                @if($type === 'brochure')
                    <embed src="../uploads/brochure/{{$settings->get('brochure_path')}}#view=FitH" width="100%" height="900" type="application/pdf">
                @elseif($type === 'inaugural-offer')
                    <embed src="{{asset('RENTAL SWAJAN INAUGURAL OFFER VILLA & APT.pdf')}}#view=FitH" width="100%" height="900" type="application/pdf">
                @elseif($type === 'rera-certificate')
                    <embed src="{{asset('RERA-Certificate-Swajan.pdf')}}#view=FitH" width="100%" height="900" type="application/pdf">
                @else
                    <h1 class="text-center">Not Found. Something is wrong.</h1>
                @endif
            </div>
        </div>
    </div>
</main>
