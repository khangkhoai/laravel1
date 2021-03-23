@extends('main')
@section('content')

<div class="container">
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="">Mô tả ngắn</label>
            <textarea class="form-control" name="desc" id="" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea class="form-control" name="content" id="" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="">Loại</label>
            <select class="form-control" name="category" id="">
                <option value="1">Volvo</option>
                <option value="2">Saab</option>
                <option value="3">VW</option>
                <option value="4" selected>Audi</option>
            </select>
        </div>
        <div class="form-check">
            <label for="">public</label><br>
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="public" id="" value="0" checked>
            Ẩn
          </label>
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="public" id="" value="1" >
            Hiện
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection