@extends('home')
@section('content')
    <div class="main-container">
        <h1 class="text-success">Chỉnh sửa sản phẩm </h1>
        <form method="post" action="{{ route('edit.product', $product->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="text-warning">Mã sản phẩm</label>
                    <input type="number" value="{{ $product->id }}" name="id" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" class="text-warning">Tên sản phẩm</label>
                    <input type="name" value="{{ $product->name }}" class="form-control" name="name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="text-warning">Thể loại</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category"
                        value="{{ $product->category }}">
                        <option>Hàng tiêu dùng</option>
                        <option>Hàng trưng bày</option>
                        <option>Hàng sale</option>
                        <option>Hàng nội địa</option>
                        <option>Hàng nhập khẩu</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" class="text-warning">Giá</label>
                    <input type="number" value="{{ $product->price }}" class="form-control" name="price">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="text-warning">Só lượng</label>
                    <input type="text" value="{{ $product->amount }}" class="form-control" name="amount">
                    @error('amount')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="text-warning">Ảnh</label>
                    <input type="file" value="{{ $product->image}}"name="image" class="form-control-file">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date" class="text-warning">Trạng Thái</label>
                    <select class="form-control" value="{{ $product->status}}"id="exampleFormControlSelect1" name="status">
                        <option>Hiển thị</option>
                        <option>Không hiển thị</option>
                    </select>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>


    </div>
@endsection
