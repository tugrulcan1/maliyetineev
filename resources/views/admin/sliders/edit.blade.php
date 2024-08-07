@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="card shadow-none border border-300 p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Edit Slider</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label" for="image">Image</label>
                                <div>
                                    <img src="{{ url('uploads/'.$slider->image) }}" alt="Current Image" class="img-fluid mb-2">
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="mobile_image">Mobile Image</label>
                                <div>
                                    <img src="{{ url('uploads/'.$slider->mobile_image) }}" alt="Current Mobile Image" class="img-fluid mb-2">
                                    <input type="file" name="mobile_image" id="mobile_image" class="form-control">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Slider</button>
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
    </script>
    @stack('scripts')
@endsection
