
    <?php
        $sql_lietke_nguoidung="SELECT * FROM tbl_dangky ORDER BY id_khachhang DESC";
        $result_lietke_nguoidung= mysqli_query($connect,$sql_lietke_nguoidung);
    ?>
    <p>Danh sách người dùng</p>
    <table class="table table-striped" style="margin-bottom: 50px; border-bottom: 2px solid black;">
        <tr>
            <th>ID</th>
            <th>Name </th>
            <th>Account</th>
            <th>Email</th>
            <th>Number phone</th>
            <th>Address</th>
            <th colspan="2"></th>
            <th>Chức vụ</th>
            

            
        </tr>
            <?php
                $i=0;
                while($row=mysqli_fetch_array($result_lietke_nguoidung)){
                $i++;
                
            ?>
        
        <tr>
            <td style="height:100px;"> <?php echo $i ?></td>
            <td style="border: 2px solid black;"> <?php echo $row ['hovaten']?></td>
            <td style="border: 2px solid black;"> <?php echo $row ['taikhoan']?></td>
            <td style="border: 2px solid black;"> <?php echo $row ['email']?></td>
            <td style="border: 2px solid black;"> <?php echo $row ['sodienthoai']?></td>
            <td style="width:100px;"> <?php echo $row ['diachi']?></td>
            <td style="border: 2px solid black;">
                    <a class="btn btn-danger" href="?action=quanlynguoidung&query=sua&idnguoidung=<?php echo $row['id_khachhang'] ?>"> Sửa </a>
            </td>
            <td>
                    <a class="btn btn-warning" href="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $row['id_khachhang']?>">Xóa</a>
            </td>
            <td><?php if($row['chucvu']==1){
                echo "Bán hàng";
         }else{
                echo "Không";
         }?>
         </td>
        </tr>


            <?php
                }
            ?>
    </table>
    