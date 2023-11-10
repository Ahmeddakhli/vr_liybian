<section class="about-page py-5">
    
    <style>
        /* Default styles */
        .media {
            display: flex;
            flex-direction: row;
        }

@media screen and (max-width: 767px) {
    .media {
        flex-direction: column !important;
    }
     .media img,
    .media video {
        height: auto !important;
    }
    .text-container {
        position: relative !important;
        bottom: auto !important;
        width: 100% !important;
        padding: 1rem !important;
          margin-top: 100% !important;
        text-align: center !important;
    }
}

        /* Full width image and video on screens 992px wide and up */
        @media screen and (min-width: 992px) {
            .media {
                flex-direction: row;
            }
            .media img,
            .media video {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                z-index: -1;
            }
        }

        /* Custom backgrounds for each row */
        /*.row-1 {*/

        /*    min-height: 600px;*/
        /*}*/

        /*.row-2 {*/
        /*    min-height: 600px;*/
        /*    position: relative;*/
        /*}*/

        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            overflow: hidden;
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .text-container {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 50%;
            padding: 2rem;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
        }
    </style>
            <div class="container"  style="  max-width: 97.5%;
        margin-left:  1.25%;
        margin-right: 1.25%;
        padding-left: 0;
        padding-right: 0;
                overflow: hidden; /* This hides any content that overflows the container */
">

        @foreach ($abouts as $i => $about)
            @if (!empty($about->title))
                <div class="section-title text-center" id="about{{ $about->id }}">
                    <h2 class="title">{{ $about->title }}</h2>
                </div>
            @endif
            @if ($about->video_url)
                <div class="row align-items-center" style="        min-height: 600px;
            position: relative;">
                    <div class="  col-md-6 mb-5">
<div class="video-container">                            {{-- show the published post --}}
                            <video class="elementor-background-video-hosted elementor-html5-video" autoplay=""
                                muted="" playsinline="" loop=""
                                src="{{ $about->video_url }}"
                                style="width: 100%; height: auto; border-radius: 10px;"></video>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="text-container col-lg-6 d-flex justify-content-center align-items-center">
                                @if (!empty($about->description))
                                    <div class="desc">
                                        {!! $about->description !!}
                                    </div>
                                @endif
                            </div>
                            <!-- /.desc -->
                    </div>
                </div>
            @elseif($about->image) 
                <div class="row align-items-center " style="        min-height: 600px;
            position: relative;">
                    <div class="col-md-6 mb-5">
<div class="video-container">                         

                                                                <img src="{{ $about->image }}" alt="{{ $about->title }}" class="" height="100%" />

                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <!--<div class="text">-->
                            <div class="text-container col-lg-6 d-flex justify-content-center align-items-center">
                                @if (!empty($about->description))
                                    <div class="desc">
                                        {!! $about->description !!}
                                    </div>
                                @endif
                            </div>
                            <!-- /.desc -->
                        <!--</div>-->
                    </div>
                </div>
            @else
                <div class="text">
                    <div class="desc">
                        @if (!empty($about->description))
                            <div class="desc">
                                {!! $about->description !!}
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        @endforeach
                        </div>

</section>
