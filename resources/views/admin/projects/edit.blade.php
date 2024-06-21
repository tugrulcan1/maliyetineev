@extends('admin.layouts.master')

@section('content')
<div class="content">
    <div class="row">
        <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
            <div class="card-header border-bottom border-300 bg-soft">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Projeyi Düzenle</h4>
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
                            <label class="form-label" for="project_title">Proje Başlığı</label>
                            <input class="form-control" id="project_title" name="project_title" type="text"
                                value="{{ $project->project_title }}">
                        </div>
                        <div class="col-md-12">
                            <label for="form-label" for="project__sub_title">Alt Başlık</label>
                            <input type="text" class="form-control" name="project_sub_title" value="{{$project->project_sub_title}}" required>
                        </div>

                        <div class="col-md-12">
                            <label for="form-label" for="project__sub_title">Proje Türü</label>
                            <select name="project_type" class="form-control">
                                <option value="">Seçiniz</option>
                                <option value="Topraktan Projeler" {{ $project->project_type == 'Topraktan Projeler' ? 'selected' : '' }}>Topraktan Projeler</option>
                                <option value="Devam Eden Projeler" {{ $project->project_type == 'Devam Eden Projeler' ? 'selected' : '' }}>Devam Eden Projeler</option>
                                <option value="Bitmiş Projeler" {{ $project->project_type == 'Bitmiş Projeler' ? 'selected' : '' }}>Bitmiş Projeler</option>
                            </select>
                        </div>

                        {{-- <div class="col-md-12">
                            <label for="form-label" for="project__sub_title">Proje Türü</label>
                            <select name="project_type" class="form-cntrol">
                                <option value="">Seçiniz</option>
                                <option value="Topraktan Projeler">Topraktan Projeler</option>
                                <option value="Devam Eden Projeler">Devam Eden Projeler</option>
                                <option value="Bitmiş Projeler">Bitmiş Projeler</option>
                            </select>
                        </div> --}}

                        <div class="mb-3">
                            <label class="form-label" for="description">Proje Açıklaması</label>
                            <textarea id="editor" name="description">{{ $project->description }}</textarea>
                        </div>
                            <?php
                                $details = json_decode($project->details, true); 
                            ?>  

                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="project_title">Proje 1.Detay Başlığı</label>
                            <input name="project_detail_title1" class="form-control mb-2" type="text"  value="{{ $details[0]['title'] ?? '' }}">
                            <textarea class="form-control" id="editor2" name="detail_description1" rows="3">{{ $details[0]['description'] ?? '' }} </textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="project_title">Proje 2.Detay Başlığı</label>
                            <input name="project_detail_title2" class="form-control mb-2" type="text"  value="{{ $details[1]['title'] ?? '' }}">
                            <textarea class="form-control" id="editor3" name="detail_description2" rows="3">{{ $details[1]['description'] ?? '' }} </textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="project_title">Proje 3.Detay Başlığı</label>
                            <input name="project_detail_title3" class="form-control mb-2" type="text"  value="{{ $details[2]['title'] ?? '' }}">
                            <textarea class="form-control" id="editor4" name="detail_description3" rows="3">{{ $details[2]['description'] ?? '' }} </textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="project_title">Proje 4.Detay Başlığı</label>
                            <input name="project_detail_title4" class="form-control mb-2" type="text"  value="{{ $details[3]['title'] ?? '' }}">
                            <textarea class="form-control" id="editor5" name="detail_description4" rows="3">{{ $details[3]['description'] ?? '' }} </textarea>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="description">Slug</label> <br>
                            <input type="text" class="mt-3 form-control" name="slug" value="{{ $project->slug }}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="image">Konum</label>
                            <textarea class="form-control"  name="konum" rows="3">{{ $project->konum ?? '' }} </textarea>
                        </div>

                        @php 
                            $floorPlans = DB::table('floor_plans')->where('project_id',$project->id)->get();
                        @endphp
                        
                        @if($floorPlans->count() > 0)
                            <div class="col-md-2 mb-3">
                                <label class="form-label" for="image">Kat Planları</label>   
                                    @foreach($floorPlans as $floorPlan)
                                            <input type="text" class="form-control mb-2" name="floor_plans[{{ $floorPlan->id }}]" value="{{ $floorPlan->floor_plan ?? '' }}">
                                    @endforeach            
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label" for="image">Kapak Görseli</label><br>
                            <img src="{{ url('projects_cover_image/' . $project->cover_image) }}" alt=""
                                style="width:150px;height:150px;"><br>
                            <input type="file" class="mt-3" name="cover_image" id="">
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
    // CKEDITOR.replace('editor2');

    CKEDITOR.replace('editor2', {
        filebrowserUploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form',
        extraPlugins: 'image',
        toolbar: [
            { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] },
            { name: 'tools', items: ['Maximize', 'ShowBlocks'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-'] },
            { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak'] },
            '/',
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'about', items: ['About'] }
        ],
        height: 300
    });

    CKEDITOR.replace('editor3', {
        filebrowserUploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form',
        extraPlugins: 'image',
        toolbar: [
            { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] },
            { name: 'tools', items: ['Maximize', 'ShowBlocks'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-'] },
            { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak'] },
            '/',
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'about', items: ['About'] }
        ],
        height: 300
    });

    CKEDITOR.replace('editor4', {
        filebrowserUploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form',
        extraPlugins: 'image',
        toolbar: [
            { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] },
            { name: 'tools', items: ['Maximize', 'ShowBlocks'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-'] },
            { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak'] },
            '/',
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'about', items: ['About'] }
        ],
        height: 300
    });

    CKEDITOR.replace('editor5', {
        filebrowserUploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form',
        extraPlugins: 'image',
        toolbar: [
            { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] },
            { name: 'tools', items: ['Maximize', 'ShowBlocks'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-'] },
            { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak'] },
            '/',
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'about', items: ['About'] }
        ],
        height: 300
    });

</script>
@stack('scripts')
@endsection