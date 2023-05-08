
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="infor.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Form Trắc Nghiệm</title>
    <style>
      .question {
        border-bottom: 1px solid black;
        padding: 10px 0;
        width: 75%;
        font-size: 19px;
      }

      .button2{
        border: none;
        font-size: 100px;
      }
    </style>
  </head>
  <body style="font-family: 'Times New Roman', Times, serif;">
    <div style="margin-top: 50px;">
      <div class="infor">
    <div class="multichoice">
    <h1 style="font-size: 70px;"> &nbsp &nbsp Weekly multiple choice</h1>
    <h1 style="font-size: 70px;"> &nbsp &nbsp Test: Speak and Spell </h1>
    <form action="process-form.php" method="post">








    
      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q1" name="q1" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question1" value="A" required>
          <input type="text" id="q1a" name="q1a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question1" value="B">
          <input type="text" id="q1b" name="q1b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question1" value="C">
          <input type="text" id="q1c" name="q1c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question1" value="D">
          <input type="text" id="q1d" name="q1d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc1.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q1').val(testquestion_multichoice.question_mc);
  $('#q1a').val(testquestion_multichoice.answer_1);
  $('#q1b').val(testquestion_multichoice.answer_2);
  $('#q1c').val(testquestion_multichoice.answer_3);
  $('#q1d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div>  


      
      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q2" name="q2" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question2" value="A" required>
          <input type="text" id="q2a" name="q2a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question2" value="B">
          <input type="text" id="q2b" name="q2b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question2" value="C">
          <input type="text" id="q2c" name="q2c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question2" value="D">
          <input type="text" id="q2d" name="q2d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc2.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q2').val(testquestion_multichoice.question_mc);
  $('#q2a').val(testquestion_multichoice.answer_1);
  $('#q2b').val(testquestion_multichoice.answer_2);
  $('#q2c').val(testquestion_multichoice.answer_3);
  $('#q2d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div>  

      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q3" name="q3" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question3" value="A" required>
          <input type="text" id="q3a" name="q3a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question3" value="B">
          <input type="text" id="q3b" name="q3b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question3" value="C">
          <input type="text" id="q3c" name="q3c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question3" value="D">
          <input type="text" id="q3d" name="q3d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc3.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q3').val(testquestion_multichoice.question_mc);
  $('#q3a').val(testquestion_multichoice.answer_1);
  $('#q3b').val(testquestion_multichoice.answer_2);
  $('#q3c').val(testquestion_multichoice.answer_3);
  $('#q3d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div>  

      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q4" name="q4" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question4" value="A" required>
          <input type="text" id="q4a" name="q4a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question4" value="B">
          <input type="text" id="q4b" name="q4b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question4" value="C">
          <input type="text" id="q4c" name="q4c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question4" value="D">
          <input type="text" id="q4d" name="q4d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc4.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q4').val(testquestion_multichoice.question_mc);
  $('#q4a').val(testquestion_multichoice.answer_1);
  $('#q4b').val(testquestion_multichoice.answer_2);
  $('#q4c').val(testquestion_multichoice.answer_3);
  $('#q4d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div> 
      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q5" name="q5" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question5" value="A" required>
          <input type="text" id="q5a" name="q5a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question5" value="B">
          <input type="text" id="q5b" name="q5b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question5" value="C">
          <input type="text" id="q5c" name="q5c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question5" value="D">
          <input type="text" id="q5d" name="q5d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc5.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q5').val(testquestion_multichoice.question_mc);
  $('#q5a').val(testquestion_multichoice.answer_1);
  $('#q5b').val(testquestion_multichoice.answer_2);
  $('#q5c').val(testquestion_multichoice.answer_3);
  $('#q5d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div>   

      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q6" name="q6" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question6" value="A" required>
          <input type="text" id="q6a" name="q6a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question6" value="B">
          <input type="text" id="q6b" name="q6b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question6" value="C">
          <input type="text" id="q6c" name="q6c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question6" value="D">
          <input type="text" id="q6d" name="q6d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc6.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q6').val(testquestion_multichoice.question_mc);
  $('#q6a').val(testquestion_multichoice.answer_1);
  $('#q6b').val(testquestion_multichoice.answer_2);
  $('#q6c').val(testquestion_multichoice.answer_3);
  $('#q6d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div>  

      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q7" name="q7" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question7" value="A" required>
          <input type="text" id="q7a" name="q7a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question7" value="B">
          <input type="text" id="q7b" name="q7b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question7" value="C">
          <input type="text" id="q7c" name="q7c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question7" value="D">
          <input type="text" id="q7d" name="q7d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc7.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q7').val(testquestion_multichoice.question_mc);
  $('#q7a').val(testquestion_multichoice.answer_1);
  $('#q7b').val(testquestion_multichoice.answer_2);
  $('#q7c').val(testquestion_multichoice.answer_3);
  $('#q7d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div>  

      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q8" name="q8" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question8" value="A" required>
          <input type="text" id="q8a" name="q8a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question8" value="B">
          <input type="text" id="q8b" name="q8b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question8" value="C">
          <input type="text" id="q8c" name="q8c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question8" value="D">
          <input type="text" id="q8d" name="q8d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc8.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q8').val(testquestion_multichoice.question_mc);
  $('#q8a').val(testquestion_multichoice.answer_1);
  $('#q8b').val(testquestion_multichoice.answer_2);
  $('#q8c').val(testquestion_multichoice.answer_3);
  $('#q8d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div>  

      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q9" name="q9" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question9" value="A" required>
          <input type="text" id="q9a" name="q9a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question9" value="B">
          <input type="text" id="q9b" name="q9b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question9" value="C">
          <input type="text" id="q9c" name="q9c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question9" value="D">
          <input type="text" id="q9d" name="q9d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc9.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q9').val(testquestion_multichoice.question_mc);
  $('#q9a').val(testquestion_multichoice.answer_1);
  $('#q9b').val(testquestion_multichoice.answer_2);
  $('#q9c').val(testquestion_multichoice.answer_3);
  $('#q9d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div>  

      <div class="question">
        <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" id="q10" name="q10" style="border: none; width: 500px;" readonly>
        </h2>
        <br>
        <div style="margin-left: 100px;">
        <label>
          <input type="radio"  name="question10" value="A" required>
          <input type="text" id="q10a" name="q10a" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question10" value="B">
          <input type="text" id="q10b" name="q10b" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question10" value="C">
          <input type="text" id="q10c" name="q10c" style="border: none;" readonly>
        </label>
        <br>
        <label>
          <input type="radio" name="question10" value="D">
          <input type="text" id="q10d" name="q10d" style="border: none;" readonly>
        </label>
      </div>
      <script>
        $(document).ready(function() {
$.ajax({
url: 'getquestion_mc10.php',
type: 'GET',
success: function(response) {
  var testquestion_multichoice = JSON.parse(response)[0];
  $('#q10').val(testquestion_multichoice.question_mc);
  $('#q10a').val(testquestion_multichoice.answer_1);
  $('#q10b').val(testquestion_multichoice.answer_2);
  $('#q10c').val(testquestion_multichoice.answer_3);
  $('#q10d').val(testquestion_multichoice.answer_4);
},
error: function(xhr, status, error) {
  console.log(xhr.responseText);
}
});
});
      </script>
      </div>  
      



      </ol>
      <br>
      <input class="button" style="margin-left: 300px;" type="submit" value="Submit">
      <script>
var submitButton = document.querySelector('.button');
submitButton.addEventListener('click', function() {
  alert('Nộp bài thành công!');
  window.location.href = 'afterlogin.html';
});
      </script>
      
      <a href="afterlogin.html"> <input class="button" type="cancle" value="Quit"></a>
    </form>

  </div>
  <div class="time">
    <h> ...Time left: </h>
    <div id="countdown"></div> 
  </div>
  <div class="time" id="countdown"></div>

<script>
// Thiết lập thời gian bắt đầu và thời gian kết thúc
var startTime = new Date().getTime();
var endTime = startTime + (20 * 60 * 1000); // Thời gian kết thúc là 20 phút sau thời gian bắt đầu

// Lấy thẻ div và cập nhật nội dung sau mỗi giây
var countdown = document.getElementById('countdown');
var timer = setInterval(function() {
  var now = new Date().getTime();
  var remainingTime = endTime - now;
  
  // Tính toán số giờ, phút, giây còn lại
  var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
  
  // Cập nhật nội dung của thẻ div
  countdown.innerHTML = minutes + ' minutes ' + seconds + ' seconds';
  
  // Kiểm tra nếu thời gian đã hết thì dừng đồng hồ
  if (remainingTime < 0) {
    clearInterval(timer);
    countdown.innerHTML = 'Hết giờ';
  }
}, 1000); // Cập nhật nội dung sau mỗi giây
</script>

</div>


  </div>
  </body>
</html>
