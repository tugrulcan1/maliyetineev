@extends('client.layouts.master')

@section('content')

<h1>Submitted Videos</h1>
<div class="video-gallery">
    @foreach ($videos as $video)
        <div class="video-item">
            <iframe width="920" height="440" src="{{ convertToEmbedUrl($video->url) }}" frameborder="0" allowfullscreen></iframe>
        </div>
    @endforeach
</div>

@endsection

<style>
.video-gallery {
    display: block;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin: 100px 500px
}

.video-item {
    margin:30px 10px;
}
</style>
