<?php
    include('dbhelper.php');
    $sql = 'SELECT * FROM images';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    if (isset($_GET['hinhanh']))
    {
        $s_hinhanh = trim(addslashes(htmlspecialchars($_GET['hinhanh'])));
    }
    else
    {
        $s_hinhanh = '';
    }
  
  
    // Nếu có tham số ac
    if ($s_hinhanh != '') 
    {
        // Trang upload hình ảnh
        if ($s_hinhanh == 'hinhanh')
        {
            // Dãy nút của upload hình ảnh
            echo
            '
                <a href="' . $s_hinhanh . 'photos" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a> 
            ';
  
            // Content upload hình ảnh
            echo
            '
                <p class="form-up-img">
                <div class="alert alert-info">Mỗi lần upload tối đa 20 file ảnh. Mỗi file có dung lượng không vượt quá 5MB và có đuôi định dạng là .jpg, .png.gif., </div>
                <form action="' . $s_hinhanh . 'photos.php"method="POST" id="formUpImg" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="form-group">
                        <label>Chọn hình ảnh</label>
                        <input type="file" class="form-control" accept="image/*" name="img_up[]" multiple="true" id="img_up" onchange="preUpImg();">
                    </div>
                    <div class="form-group box-pre-img hidden">
                        <p><strong>Ảnh xem trước</strong></p>
                    </div>
                    <div class="form-group hidden box-progress-bar">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Upload</button>
                        <button class="btn btn-default" type="reset">Chọn lại</button>
                    </div>
                    <div class="alert alert-danger hidden"></div>
                </form>
                </p>
            ';
 
        } 
         
    }
    // Ngược lại không có tham số ac
    // Trang danh sách hình ảnh
    else
    {
        // Dãy nút của danh sách hình ảnh
        echo
        '
            <a href="' . $s_hinhanh . 'photos/add" class="btn btn-default">
                <span class="glyphicon glyphicon-plus"></span> Thêm
            </a> 
            <a href="' . $s_hinhanh . 'photos" class="btn btn-default">
                <span class="glyphicon glyphicon-repeat"></span> Reload
            </a> 
            <a class="btn btn-danger" id="del_img_list">
                <span class="glyphicon glyphicon-trash"></span> Xoá
            </a> 
        ';
  
        // Content danh sách hình ảnh
    }  
?>
</body>
</html>