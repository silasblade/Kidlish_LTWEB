<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="style2.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="/signin/signin2.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="infor.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    
    </head>
    <body style="background-color: rgb(238, 152, 165); margin-left: 30px;">

    




        <table>
            <tr>
                <td>
        <div>
          <img src="assets/picture/admin.png" width="370px">
          <br>
             <h1 style="font-size: 39pt; text-align: center;">Admin</h1>
          <hr style="border: 1pt solid black;">
          <br>
          <br> 
          <div> 
          <a href="admin.php"> <button class="signin-submit">Manage User</button> </a>
            <br>
            <a href="admin2.php"> <button class="signin-submit">Manage Test</button> </a>
            <br>
            <a href="admin3.php"> <button class="signin-submit">Get information</button> </a>
            <br>
            <a href="afterlogin.html"> <button class="signin-submit">Back to home</button> 
        </div>
        </div>
    </td>

        <td style="width: 1200px;">
 <div>   
 <div id="edit-user-form" style="display:none;">
    <h2>Edit User</h2>
    <form action="editquestion.php" method="POST" id="user-form">
        <input type="text" id="id" name="id" required readonly>
        <input type="text" id="qu" name="qu" required>
        <input type="text" id="a1" name="a1" required>
        <input type="text" id="a2" name="a2" required>
        <input type="text" id="a3" name="a3" required>
        <input type="text" id="a4" name="a4" required>
        <input type="text" id="ar" name="ar" required>
        <input type="submit" value="Save Changes">
        <input type="button" value="Cancel" onclick="hideEditForm()">
    </form>
    <script>
function hideEditForm() {
    document.getElementById("edit-user-form").style.display = "none";
}
</script>
</div>          
        <h1 style="font-size: 39pt; text-align: center;">Manage Question Weekly Test</h1>
        <br>
        <br>
        <br>
        <hr>
       
        <div style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        <br>
        <br>
        <br>
        <div class="parentinfor3">
         <div class = "my-div-class">
         <?php include('getdataquestion.php'); ?> 
         <script>
    // Lấy tất cả các button có class là "edit-btn"
    var editBtns = document.querySelectorAll('.edit-btn');
    var editForm = document.getElementById('edit-user-form');

   
    // Gắn sự kiện click cho từng button "Edit"
    editBtns.forEach(function(editBtn) {
        editBtn.addEventListener('click', function() {
            // Lấy id của bản ghi đang được click
            var id = editBtn.getAttribute('data-id');
            editForm.style.display = 'block';

             var qu = editForm.querySelector('#qu');
             var a1 = editForm.querySelector('#a1');
             var a2 = editForm.querySelector('#a2');
             var a3 = editForm.querySelector('#a3');
             var a4 = editForm.querySelector('#a4');
             var ar = editForm.querySelector('#ar');

            
$.ajax({
  url: 'getdataquestion2.php',
  method: 'POST',
  data: { id: id },
  success: function(response) {
    // Xử lý phản hồi từ máy chủ
    
    var testquestion_multichoice = JSON.parse(response);

    qu.value = testquestion_multichoice.question_mc;
    a1.value = testquestion_multichoice.answer_1;
    a2.value = testquestion_multichoice.answer_2;
    a3.value = testquestion_multichoice.answer_3;
    a4.value = testquestion_multichoice.answer_4;
    ar.value = testquestion_multichoice.answer_correct;

    document.querySelector('#id').value = testquestion_multichoice.id_quest;
    input.dispatchEvent(new Event('change'));
    console.log(user);
  },
  error: function(error) {
    var confirmDelete = confirm("Bạn có chắc chắn muốn xóa người dùng này không?" +id);

    // Xử lý lỗi nếu có
    console.log(error);
  }
});
            // Hiện form chỉnh sửa thông tin của bản ghi đó
            // Thực hiện các thao tác chỉnh sửa thông tin và lưu lại vào cơ sở dữ liệu
        });
    });

    // Lấy tất cả các button có class là "delete-btn"
    var deleteBtns = document.querySelectorAll('.delete-btn');

    // Gắn sự kiện click cho từng button "Delete"
    deleteBtns.forEach(function(deleteBtn) {
        deleteBtn.addEventListener('click', function() {
            // Lấy id của bản ghi đang được click
            var id = deleteBtn.getAttribute('data-id');

            // Xác nhận xóa bản ghi đó khỏi cơ sở dữ liệu
            var confirmDelete = confirm("Tạm thời chưa cho phép xóa?");
            
        });
    });
</script>
         </div>
         </div>
         
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        </div>
    </div>
</td>
</tr>
</table>
        <script src="" async defer></script>
    </body>
</html>