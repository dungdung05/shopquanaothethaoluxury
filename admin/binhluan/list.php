<div class="row frmcontent">
    <div class="row mb10 frmdsloai">
        <table>
            <tr>
                <th></th>
                <th>IDK</th>
                <th>NỘI DUNG BÌNH LUẬN</th>
                <th>Iduser</th>
                <th>Idpro</th>
                <th>NGÀY BÌNH LUẬN</th>
                
                <th></th>
            </tr>

            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($taikhoan);
                $suatk = "index.php?act=suatk&id=" . $id;
                $xoatk = "index.php?act=xoatk&id=" . $id;

                echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $noidung . '</td>
                    <td>' . $iduser . '</td>
                    <td>' . $idpro . '</td>
                    <td>' . $ngaydangluan . '</td>
                  
                    <td>
                        <a href="' . $suabl . '"><input type="button" value="Sửa"></a>
                        <a href="' . $xoabl . '"><input type="button" value="Xóa"></a>
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
        <a href="index.php?act=addtk"><input type="button" value="Nhập thêm"></a>
    </div>
</div>
