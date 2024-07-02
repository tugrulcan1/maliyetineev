@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="pb-5">
            <div class="row g-4">
               <h5>Kat Planı Ekle</h5>

               <div>
                    <form action="{{route('admin.add.floor.plan')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3 col-md-9">
                            <label for="exampleInputEmail1" class="form-label">Kat Planı</label>
                            <select class="form-select" aria-label="Default select example" name="floor_plan">
                                <option selected>Seç</option>
                                <option value="1+1">1+1</option>
                                <option value="2+1">2+1</option>
                                <option value="2+2">2+2</option>
                                <option value="3+1">3+1</option>
                                <option value="4+1">4+1</option>
                                <option value="5+1">5+1</option>
                                <option value="3+2">3+2</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-9">
                            <label for="exampleInputPassword1" class="form-label">Görsel Ekle</label>
                            <div class="mb-3">
                                <!-- <label for="formFile" class="form-label">Görsel Ekle</label> -->
                                <input class="form-control" type="file" id="formFile" name="file">
                            </div>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </form>
               </div>
               
            </div>
        </div>
   
    </div>
@endsection
