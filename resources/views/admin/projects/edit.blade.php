@extends('admin.layouts.master')

@section('content')
<div class="content">
    <div class="row">
        <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
            <div class="card-header border-bottom border-300 bg-soft">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Edit project</h4>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="p-4 code-to-copy">
                    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST"
                    enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="project_title">project Title</label>
                            <input class="form-control" id="project_title" name="project_title" type="text"
                                value="{{ $project->project_title }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">project Content</label>
                            <textarea id="editor" name="description">{{ $project->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">project Konum</label> <br>
                            <input type="text" class="mt-3 form-control" name="slug" value="{{ $project->slug }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">İmage</label><br>
                            <img src="{{ url('uploads/' . $project->image) }}" alt=""
                                style="width:150px;height:150px;"><br>
                            <input type="file" class="mt-3" name="image" id="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Galeri</label><br>
                            @foreach ($project->galleries as $gallery)
                                <div class="mb-3 gallery-item">
                                    <img src="{{ url('uploads/' . $gallery->image) }}" alt=""
                                        style="width:150px;height:150px;">
                                    <button type="button" class="btn btn-danger delete-gallery"
                                        data-gallery-id="{{ $gallery->id }}">Delete</button>
                                </div>
                            @endforeach

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $('.delete-gallery').click(function () {
                                        var galleryId = $(this).data('gallery-id');

                                        $.ajax({
                                            url: '/admin/delete-gallery/' + galleryId,
                                            type: 'DELETE',
                                            headers: {
                                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                            },
                                            success: function (response) {
                                                $('.gallery-item[data-gallery-id="' + galleryId + '"]').remove();
                                                alert('Gallery image deleted successfully');
                                                location.reload();
                                            },
                                            error: function (xhr, status, error) {
                                                console.error('Error deleting gallery image:', error);
                                                alert('Failed to delete gallery image');
                                            }
                                        });
                                    });
                                });
                            </script>   


                            <br>
                            <input type="file" class="mt-3" name="gallery[]" id="" multiple>
                        </div>


                        <button type="submit" class="btn btn-primary">Update project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor2');

</script>
@stack('scripts')
@endsection