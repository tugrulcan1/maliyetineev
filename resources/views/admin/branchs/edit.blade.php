@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Edit branch</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <form action="{{ route('admin.branchs.update', $branch->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="title">branch Title</label>
                                <input class="form-control" id="title" name="title" type="text"
                                    value="{{ $branch->title }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">branch Content</label>
                                <textarea id="editor" name="description">{{ $branch->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="phone">branch phone</label>
                                <input class="form-control" id="phone" name="phone" type="text"
                                    value="{{ $branch->phone }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="image">İmage</label>
                                <img src="{{ url('uploads/'.$branch->image) }}" alt="">
                                <input type="file" name="image" id="">
                            </div>

                            <button type="submit" class="btn btn-primary">Update branch</button>
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
