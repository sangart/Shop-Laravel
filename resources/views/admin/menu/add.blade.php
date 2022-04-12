@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
<form>
    <div class="card-body">

      <div class="form-group">
        <label>Tên danh mục</label>
        <input type="text" name="menu" class="form-control" id="menu" placeholder="Enter name">
      </div>

      <div class="form-group">
        <label>Danh mục</label>
        <select name="parent_id" class="form-control">
            <option value="0"> Danh mục cha </option>
        </select>
      </div>

      <div class="form-group">
        <label>Mô tả ngắn</label>
        <textarea name="description" class="form-control">
        </textarea>
      </div>

      <div class="form-group">
        <label for="menu">Mô tả chi tiết</label>
        <textarea name="content" id="content" class="form-control">
        </textarea>
      </div>

      <div class="form-group">
        <label>Kích hoạt</label>
        <div class="form-check">
          <input class="form-check-input" value="1" id="active" type="radio" name="active" checked="">
          <label for="active" class="form-check-label">Có</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" value="0" type="radio" id="no_active" name="no_active" >
          <label for="no_active" class="form-check-label">Không</label>
        </div>
      </div>
      
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Tạo danh mục</button>
    </div>
  </form>
@endsection 

@section('footer')
    <script>
            CKEDITOR.replace('content');
    </script>
@endsection