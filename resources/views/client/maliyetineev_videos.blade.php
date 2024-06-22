@extends('client.layouts.master')

@section('content')

<h1>Submitted Videos</h1>
<div class="video-gallery-container">
    <div class="video-gallery">
        @foreach ($videos as $video)
            <div class="video-item">
                <iframe style="width: 100%;height:550px" src="{{ convertToEmbedUrl($video->url) }}" frameborder="0" allowfullscreen></iframe>
            </div>
        @endforeach
    </div>
</div>

@endsection

<style>
.video-gallery-container {
    max-width: 1040px; /* Maksimum genişlik belirleme */
    margin: 80px auto; /* Sayfayı yatayda ortala */
    overflow: hidden; /* İçeriklerin dışarı taşmasını engelle */
}

.video-gallery {
    display: flex;
    flex-direction: column; /* Videoları dikey olarak sırala */
    justify-content: center; /* Dikeyde ortala */
    align-items: center; /* Yatayda ortala */
}

.video-item {
    width: 100%; /* Tam genişlik */
    margin-bottom: 20px; /* Videolar arasına boşluk ekle */
}

/* Küçük ekranlarda */
@media screen and (max-width: 768px) {
    .video-gallery-container {
        max-width: 80%; /* Maksimum genişlik belirleme */
    }
}

/* Ekstra küçük ekranlarda */
@media screen and (max-width: 480px) {
    .video-gallery-container {
        max-width: 90%; /* Maksimum genişlik belirleme */
    }
}
</style>
