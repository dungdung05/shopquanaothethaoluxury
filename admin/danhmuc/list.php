<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Danh sách loại hàng</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
    }
    .row.mb10 {
      margin-top: 20px;
    }
    input[type="button"] {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="row mb10">
    <table>
      <tr>
        <th></th>
        <th>MÃ LOẠI</th>
        <th>TÊN LOẠI</th>
        <th></th>
      </tr>
      <?php
      foreach ($listdanhmuc as $danhmuc) {
        extract($danhmuc);
    $suadm="index.php?act=suadm&id=".$id;
    $xoadm="index.php?act=xoadm&id=".$id;
        echo '<tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>'.$id.'</td>
        <td>'.$tenloai.'</td>
        <td> <a href="'.$suadm.'">
          <input type="button" value="Sửa">
          </a>
          <a href="'.$xoadm.'">
          <input type="button" value="Xóa">
          </a>
        </td>
      </tr>';
      }
      ?>
     
    </table>
  </div>

  <div class="row mb10">
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
  </div>
</body>
</html>
