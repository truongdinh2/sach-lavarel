<html>

<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="mx-auto mt-5" style="width:75%">
        <div style="width:100%" class="mx-auto">
            <button type="button" class="btn btn-primary btn-add">Thêm</button>
        </div>
        <div class="card form-ctn mt-3">
            <div class="card-header text-center font-weight-bold">
                Thêm
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleInputEmail1">Tên</label>
                            <input type="text" id="title" name="title" class="form-control" required="">
                        </div>
                        <div class="col-6">
                            <label for="exampleInputEmail1">Giá</label>
                            <input type="text" id="title" name="title" class="form-control" required="">
                        </div>
                        <div class="col mt-2">
                            <label for="exampleInputEmail1">Số lượng</label>
                            <input type="text" id="title" name="title" class="form-control" required="">
                        </div>
                        <div class="col mt-2">
                            <label for="exampleInputEmail1">Ảnh</label>
                            <input type="text" id="title" name="title" class="form-control" required="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
        <table class="table mx-auto mt-3" style="width:100%; text-align:center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width:35%">Tên</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col" style="width:15%">Ảnh</th>
                    <th scope="col" style="min-width:135px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <th scope="row">1</th>
                        <td class="text-left"><?php echo $product->name; ?></td>
                        <td><?php echo $product->price; ?></td>
                        <td><?php echo $product->amount; ?></td>
                        <td>
                            <div>
                                <?php echo $product->img_link; ?><br />
                                <img 
                                    class="mt-2"
                                    style="width: 50%;"
                                    src="{{ asset('assets')}}/<?php echo $product->img_link; ?>" 
                                />
                            </div>
                        </td>
                        <td>
                            <div>
                                <button type="button" class="btn btn-info">Sửa</button>
                                <button type="button" class="btn btn-danger">Xóa</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    $('.form-ctn').css('display', 'none');
    $('.btn-add').on('click', function() {
        $(".form-ctn").toggle();
    })
</script>

</html>