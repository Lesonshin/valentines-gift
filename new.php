<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valentine's Day Gift for You! ❤️</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      font-family: 'Arial', sans-serif;
      text-align: center;
      background: linear-gradient(135deg, #ff9a9e, #fad0c4);
      color: #333;
      padding: 50px;
    }
    .slideshow {
      max-width: 600px;
      margin: 30px auto;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
    }
    .slideshow img {
      width: 100%;
      display: none;
    }
    .slideshow img:first-child {
      display: block;
    }
    .button {
      background: #ff6b81;
      padding: 15px 25px;
      border: none;
      color: white;
      font-size: 18px;
      cursor: pointer;
      border-radius: 8px;
      margin-top: 20px;
    }
    .button:hover {
      background: #ff4757;
    }
  </style>
</head>
<body>
  <h1>Happy Valentine's Day, KOKO! 🌹<i class="fa-regular fa-heart"></i></h1>
  <div class="slideshow">
    <?php
        $images = ["https://i.pinimg.com/736x/5a/59/55/5a5955b7b23257b566a20ae646679d31.jpg", "https://i.pinimg.com/736x/bc/2a/fd/bc2afd74c6aeb5bd3aee092d60535f60.jpg", "https://i.pinimg.com/736x/aa/0f/65/aa0f65729cd58b94034d56879168310c.jpg","https://i.pinimg.com/736x/75/d1/9b/75d19b2887fba0c093956358dbea0334.jpg","https://i.pinimg.com/736x/3c/43/3f/3c433f5af891f14da00bc4bd32345d10.jpg"];
        foreach ($images as $image) {
        echo "<img src='$image' alt='Love Image'>";
      }
    ?>
  </div>

  <button class="button" id="playVideo">I Love You KOKO & Click Here ❤️ 🎥</button>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // Slideshow functionality
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slideshow img');

    function showSlides() {
      slides.forEach((slide, index) => {
        slide.style.display = index === slideIndex ? 'block' : 'none';
      });
      slideIndex = (slideIndex + 1) % slides.length;
    }
    setInterval(showSlides, 1000);

    // SweetAlert for Video Click
    document.getElementById('playVideo').addEventListener('click', () => {
  Swal.fire({
    title: 'A Special Video for You ❤️',
    html: '<iframe width="100%" height="315" src="https://www.youtube.com/embed/n-MP_ULuBzg" frameborder="0" allowfullscreen></iframe>',
    width: '80%',
  });
});



  </script>
</body>
</html>
