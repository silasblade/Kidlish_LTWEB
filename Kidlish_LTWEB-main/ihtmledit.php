<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="infor.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
		$(document).ready(function(){
    $.ajax({
        url: "get_data3.php",
        type: "GET",
        dataType: "json",
        success: function(data){
            $("#result").html("");
            $.each(data, function(index, value){
                var fullname = value.fullname_user;
                var words = fullname.split(" ");
                var lastTwoWords = words.slice(-2).join(" ");
                $("#result").append("<div>" + lastTwoWords + "</div>");
            });
        },
        error: function(){
            alert("Lỗi truy vấn dữ liệu");
        }
    });
});

	</script>
    <title>INFORMATION</title>
</head>
<body>
<div class="header">
        <div class="content">
            <div class="logo left">
                <img src="/assets/picture/logo.png" alt="Logo"/>
                <div class="name">
                    <span style="padding-left: 60px; font-family: Minnie;"><strong>KIDLISH</strong></span> 
                    <p style="font-family: Minnie;">English for kids</p>
                </div>
            </div>
            <div class="logo right">
                <div class="contact">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    englishforkids@kidlish.edu.vn
                </div>
                <div class="contact">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                     1900 2211
                </div>
                <div class="btnSigns">
                    <br>
                    <a href ="ihtml.php"><button class="button" type="button"> <div id="result"></div> </button>

                        <button class="button" type="button" onclick="deleteCookie()">LOG OUT</button>

                        <script>
                        function deleteCookie() {
                            document.cookie = "user_id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        }
                        </script>
            
                </div>
            </div>
        </div>
        <div class="navigation">
            <nav>
                <div class="menu">
                    <ul class="menu">
                        <li class="active"><a href="afterlogin.html" class="button"><i class="fa fa-home" aria-hidden="true"></i> HOME</a></li>
                        <li><a href="lnw.html" class="button"><i class="fa fa-headphones" aria-hidden="true"></i> LISTEN ~ WATCH</a>
                            <ul id="submenu">
                                <ul>
                                <li><a href="songs.html"class="button">Songs</a></li>
                                <li><a href="animations.html"class="button">Animations</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li><a href="sns.html" class="button"><i class="fa fa-comments-o" aria-hidden="true"></i> SPEAK ~ SPELL</a>
                            <ul id="submenu1">
                                <ul>
                                <li><a href="speak.html" class="button">Speak</a></li>
                                <li><a href="spell.html" class="button">Spell</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li><a href="rnw.html" class="button"><i class="fa fa-pencil" aria-hidden="true"></i> READ ~ WRITE</a>
                            <ul id="submenu2">
                                <ul>
                                <li><a href="read.html" class="button">Reading Practice</a></li>
                                <li><a href="write.html" class="button">Writing Practice</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li><a href="userPage.php" class="button"><i class="fa fa-gamepad" aria-hidden="true"></i> FUN ~ GAMES</a>
                            <ul id="submenu3">
                                <ul>
                                <li><a href="userPage" class="button">Games</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li><a href="vocabchung.html" class="button"><i class="fa fa-book" aria-hidden="true"></i> VOCABULARY</a>
                            <ul id="submenu4">
                                <ul>
                                <li><a href="vocab.html" class="button">Lesson 1</a></li>
                                <li><a href="vocab1.html" class="button">Lesson 2</a></li>
                                <li><a href="vocab2.html" class="button">Lesson 3</a></li>
                                <li><a href="vocab3.html" class="button">Lesson 4</a></li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<br>
<br>
    <h1 class="title">USER INFORMATION</h1>
    <div class="infor">
    <div id="parentinfor" class="parentinfor">
        <form action="edit_user_n.php" method="POST" autocomplete="off">
            <h1 style="font-family: Minie; font-size: 30px;">Parent Information</h1>
            <label for="name" class="label">Full Name</label>
            <input type="text" id="fullname" name="fullname" class="form" placeholder="Eg: Kidlish" >
            <label for="phone" class="label">Phone number</label>
            <input type="phone" id="phone" name="phone" class="form" placeholder="Eg: +84 123456789" >
            <label for="adr" class="label">Address</label>
            <input type="adr" id="adr" name="adr" class="form" placeholder="Eg: 280 An Dương Vương" >
            <label for="rela" class="label">Email</label>
            <input type="rela" id="rela" name="rela" class="form" placeholder="Eg: Mother/Father" >
            <label for="pss" class="label">Password</label>
            <input type="Password" id="acc" name="acc" class="form">
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button type="submit" class="button1" style="width: 270px; margin:auto; ">Save change</button>

          </form>
          <script>
            $(document).ready(function() {
  $.ajax({
    url: 'get_data3.php',
    type: 'GET',
    success: function(response) {
      var user = JSON.parse(response)[0];
      $('#fullname').val(user.fullname_user);
      $('#phone').val(user.phone_number);
      $('#adr').val(user.address);
      $('#rela').val(user.email);
      $('#acc').val(user.account_type);
    },
    error: function(xhr, status, error) {
      console.log(xhr.responseText);
    }
  });
});

          </script>

    
 
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 


    <div class="childreninfor">
        <form action="" class="signup-form" autocomplete="off">
            <h1 style="font-family: Minie; font-size: 30px;">Children Information</h1>
            <label for="name" class="label">Full Name</label>
            <input type="text" id="name" name="name" class="form" placeholder="Eg: Kidlish" readonly>
            <label for="name" class="label">Nick Name</label>
            <input type="nickname" id="nickname" class="form" placeholder="Eg: Kidlish" readonly>
            <label for="date" class="label">Date of Birth</label>
            <input type="date" id="date" class="form" placeholder="Eg: 01/01/2023" readonly>

          </form>
          <script>
            $(document).ready(function() {
  $.ajax({
    url: 'getdatachildren.php',
    type: 'GET',
    success: function(response) {
      var user = JSON.parse(response)[0];
      $('#name').val(user.children_name);
      $('#nickname').val(user.children_nickname);
      $('#date').val(user.children_date);
    },
    error: function(xhr, status, error) {
      console.log(xhr.responseText);
    }
  });
});

          </script>
    </div>
    </div>
    <br>
    <button class="button1" style="margin-left: 300px;">Edit Parent Info</button> &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="buyvipaccount.html"> <button class="button2">Upgrade Account</button></a> &nbsp; &nbsp; &nbsp; &nbsp;
    <button class="button3">Edit Children Info</button>
</body>
</html>