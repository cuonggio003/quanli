@extends('home')
@section('content')
    <div class="main-container">
        <section class="get-in-touch">
            <h1 class="text-success">Thêm mới </h1>
            <form method="post" action="{{ route('store.product') }}" enctype="multipart/form-data" required>
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="text-warning">Mã sản phẩm</label>
                        <strong class="text-danger">*</strong>
                        <input type="number" class="form-control" id="input" name="id">
                        @error('id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="text-warning">Tên sản phẩm</label>
                        <strong class="text-danger">*</strong>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="text-warning">Danh mục</label>
                        <strong class="text-danger">*</strong>
                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option>Hàng tiêu dùng</option>
                            <option>Hàng trưng bày</option>
                            <option>Hàng sale</option>
                            <option>Hàng nội địa</option>
                            <option>Hàng nhập khẩu</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="text-warning">Giá</label>
                        <strong class="text-danger">*</strong>
                        <input type="number" class="form-control" id="price" name="price">
                        @error('price')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="text-warning">Số lượng</label>
                        <strong class="text-danger">*</strong>
                        <input type="number" class="form-control" id="amount" name="amount">
                        @error('amount')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh</label>
                    <strong class="text-danger">*</strong>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="text-warning">Trạng Thái</label>
                        <strong class="text-danger">*</strong>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option>Hiển thị</option>
                            <option>Không hiển thị</option>
                        </select>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Lưu</button>
                <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </section>

    </div>
@endsection
