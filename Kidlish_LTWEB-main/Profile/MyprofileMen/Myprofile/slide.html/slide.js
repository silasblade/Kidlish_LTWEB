// Mỗi slide sẽ có một chỉ số của riêng nó, để đơn giản chúng ta sẽ gán chỉ số mảng cho các slide
var slideIndex = 0;
// Cho ta biết chúng ta đang ở slide nào
var currentSlideIndex = 0;
// Mảng lưu các slide của chúng ta
var slideArray = [];

// Hàm này sẽ giúp chúng ta tạo ra các đối tượng slide
// bao gồm: tiêu đề, mô tả, ảnh, đường dẫn khi nhấp vào button trên slide, 
// và id của mỗi slide
function Slide(title, subtitle, background, link) {
  this.title = title;
  this.subtitle = subtitle;
  this.background = background;
  this.link = link;
  // we need an id to target later using getElementById
  this.id = "slide" + slideIndex;
  // Add one to the index for the next slide number
  slideIndex++;
  // Add this Slide to our array
  slideArray.push(this);
}


// Tạo các đối tượng slide, bạn có thể tạo nhiều hơn

var walkingDead = new Slide(
  "The Walking Dead",
  "A show about fighting zombies",
  "https://acollectivemind.files.wordpress.com/2013/12/season-4-complete-cast-poster-the-walking-dead-the-walking-dead-35777405-2528-670.png",
  "http://www.amc.com/shows/the-walking-dead"
);

var bigBang = new Slide(
  "The Big Bang Theory",
  "A show about Sheldon",
  "https://www.denofgeek.com/wp-content/uploads/2019/02/tbbt_12-15.jpg",
  "http://www.cbs.com/shows/big_bang_theory/"
);

var LastMan = new Slide(
  "The Last Man on Earth",
  "A show about loneliness",
  "https://www.wired.com/wp-content/uploads/2015/02/LMOE-AliveInTuscon_scene44_0028_hires2.jpg",
  "http://www.fox.com/the-last-man-on-earth"
);

// Từ mảng slide đã tạo, ta tiến hành đưa nó vào source HTML
function buildSlider() {
  // A variable to hold all our HTML
  var myHTML;

  // Go through the Array and add the code to our HTML
  for (var i = 0; i < slideArray.length; i++) {
    myHTML +=
      "<div id='" +
      slideArray[i].id +
      "' class='singleSlide' style='background-image:url(" +
      slideArray[i].background +
      ");'>" +
      "<div class='slideOverlay'>" +
      "<h1>" +
      slideArray[i].title +
      "</h1>" +
      "<h4>" +
      slideArray[i].subtitle +
      "</h4>" +
      "<a href='" +
      slideArray[i].link +
      "' target='_blank'>Open Link</a>" +
      "</div>" +
      "</div>";
  }

  // Đưa HTML chúng ta vừa tạo vào id #mySlider
  document.getElementById("mySlider").innerHTML = myHTML;

  // Đồng thời hiển thị slide đầu tiên
  document.getElementById("slide" + currentSlideIndex).style.left = 0;
}

// Gọi hàm thực thi
buildSlider();
// Xử lý bấm nút chuyển slide trước đó
function prevSlide() {
    // Tìm slide trước đó
    var nextSlideIndex;
    // Nếu chỉ số slide là 0, về slide cuối
    if (currentSlideIndex === 0) {
      nextSlideIndex = slideArray.length - 1;
    } else {
      // Nếu không thì giảm chỉ số đi 1
      nextSlideIndex = currentSlideIndex - 1;
    }
  
    // Ẩn slide hiện tại, hiện slide "currentSlideIndex"
    document.getElementById("slide" + nextSlideIndex).style.left = "-100%";
    document.getElementById("slide" + currentSlideIndex).style.left = 0;
  
    // Thêm class để chuyển slide có animation đã định nghĩa ở bước 3
      document
      .getElementById("slide" + nextSlideIndex)
      .setAttribute("class", "singleSlide slideInLeft");
    document
      .getElementById("slide" + currentSlideIndex)
      .setAttribute("class", "singleSlide slideOutRight");
  
    // Cập nhật giá trị slide hiện tại
    currentSlideIndex = nextSlideIndex;
  }
  
  // Xử lý bấm nút chuyển slide tiếp theo
  // Cách xử lý tương tự như prevSlide đã trình bày ở trên
  function nextSlide() {
    var nextSlideIndex;
    if (currentSlideIndex === slideArray.length - 1) {
      nextSlideIndex = 0;
    } else {
      nextSlideIndex = currentSlideIndex + 1;
    }
  
    document.getElementById("slide" + nextSlideIndex).style.left = "100%";
    document.getElementById("slide" + currentSlideIndex).style.left = 0;
  
    document
      .getElementById("slide" + nextSlideIndex)
      .setAttribute("class", "singleSlide slideInRight");
    document
      .getElementById("slide" + currentSlideIndex)
      .setAttribute("class", "singleSlide slideOutLeft");
  
    currentSlideIndex = nextSlideIndex;
  }