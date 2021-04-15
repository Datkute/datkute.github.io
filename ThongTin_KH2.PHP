<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <style>
      .form{
        margin-top: 20px;
        margin-left: 15%;
      }
      .form-KH{
        margin-left: 20%;
        margin-top: 50px;
        font-size: 20px;
        color: #CD853F;
      }
      .table-KH{
        margin-left: 10%;
        margin-top: 50px;
      }
      .form-detail {
  padding-top: 50px;
  display: flex;
  align-items: flex-end;
}

.form-detail .control-custom {
  font-size: 14px;
  color: #868686;
  width: 97%;
}

.form-detail .group { 
  position: relative;
}

.form-detail input {
  display: block;
  padding: 14px 0;
  border: none;
  border-bottom: 1px solid #d8d8d8;
  margin-top: 26px;
}

.form-detail textarea {
  display: block;
  border: none;
  border-bottom: 1px solid #d8d8d8;
}

.form-detail label {
  font-size: 15px;
  color: #868686;
  position: absolute;
  pointer-events: none;
  left: 0;
  top: 10px;
}

input:focus, 
textarea:focus {
  outline: none;
}

.form-detail .bar { 
  position: relative; 
  display: block; 
  width: 97%; 
}

.bar::before,
.bar::after {
  content:'';
  height: 2px; 
  width: 0;
  bottom: 1px; 
  position: absolute;
  background: #2cb680; 
  transition: 0.2s ease all; 
  -moz-transition: 0.2s ease all; 
  -webkit-transition: 0.2s ease all;
}

.bar::before {
  left:50%;
}

.bar::after {
  right:50%; 
}

.form-detail input:focus ~ .bar::before,
.form-detail input:focus ~ .bar::after,
.form-detail textarea:focus ~ .bar::before,
.form-detail textarea:focus ~ .bar::after {
  width:50%;
}
.form-button {
  margin-top: 15px; 
  margin-right: 18%;
}
.form-detail label {
  font-size: 14px;
  color: #868686;
  position: absolute;
  pointer-events: none;
  left: 0;
  top: 16px;
  transition: 0.2s ease all; 
  -moz-transition: 0.2s ease all; 
  -webkit-transition: 0.2s ease all;
}
.form-detail input:focus ~ label, 
.form-detail input:valid ~ label,
.form-detail textarea:focus ~ label,
.form-detail textarea:valid ~ label {
  top: -16px;
  color: #2cb680;
}
.form-KH{
  color: #800000;
  margin-left: 35%;
}
    </style>
<body>

<!----------------------------------------------------->
<form id="form1" name="form1" method="post" action="CapNhat_MuaHang2.PHP" class="form">
    <h2 class="form-KH">Thông Tin Khách Mua Hàng</h2>
    <div class="form-detail">
      <div class="form-info col-md-6 col-xs-12">
        <div class="group">      
          <input class="control-custom" type="text" required="required" name='txtten_kh' id="txtten_kh"/>
          <span class="bar"></span>
          <label>Full name</label>
        </div>
        <div class="group">      
          <input class="control-custom" type="email" required="required" name='txtemail_kh' id="txtemail_kh"/>
          <span class="bar"></span>
          <label>Email</label>
        </div>
        <div class="group">      
          <input class="control-custom" type="text" required="required" name='txtdienthoai_kh' id="txtdienthoai_kh"/>
          <span class="bar"></span>
          <label>Phone</label>
        </div>
        <div class="group">      
          <input class="control-custom" type="text" required="required" name='txtdiachi_kh' id="txtdiachi_kh"/>
          <span class="bar"></span>
          <label>Address</label>
        </div>
      </div>
      <div class="form-message col-md-6 col-xs-12">
        <div class="group">      
          <input type="text" class="control-custom" rows="10" name='txtnoidung_kh' id="txtnoidung_kh" placeholder="Vui Lòng Chọn Hình Thức Thanh Toán! "></input>
          <span class="bar"></span>
          <label>Ghi Chú và Hinh Thức Thanh Toán!
          </label>
        </div>
      </div>
    </div>
    <div class="form-button text-center">
      <button class="btn btn-info" type="submit">Thanh Toán</button>
    </div>
</form>      
</body>
</html>