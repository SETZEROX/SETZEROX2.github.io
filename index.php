<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/main.css" rel="stylesheet">

    <title>NetFlix</title>
  </head>
  <body>
    <div class="app">
      <br>
      <nav class='nav-black'>
            <img alt="Netflix logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/170px-Netflix_2015_logo.svg.png" class="nav-logo">
            <img alt="User logged" src="https://pbs.twimg.com/profile_images/1240119990411550720/hBEe3tdn_400x400.png" class="nav-avatar">
      </nav>

        <header class="banner" style='background-image: url("https://www.img.in.th/images/920660ce4d13431f02198833ede6712e.jpg"); background-position: center; background-size: cover;'>
            <div class="banner-contents">
                <h1 class="banner-title">XD-DEV.NET</h1>
                <div class="banner-buttons">
                    <button class="banner-button play"><PlayArrowIcon />Play</button>
                    <button class="banner-button info"><InfoOutlinedIcon fontSize="small"  paddingRight='20' marginRight='100'/><div className="space"></div> More Information</button>

                </div>

                <h1 class="banner-description">โปรเจคแอพลิเคชั่นติวเตอร์ออนไลน์</h1>
            </div>
            <div class="banner-fadeBottom"/>
        </header>

        <section class="row">
            <h2>รายการยอดนิยม</h2>
            <div class="slider">
                <div class="slider-arrow-left" ><span className="arrow" onClick="document.getElementById(id).scrollLeft-=(window.innerWidth-80)"><ArrowBackIosIcon/></span></div>
                <div class="row-posters">
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                </div>
                <div class="slider-arrow-right" ><span className="arrow" onClick='document.getElementById(id).scrollLeft+=(window.innerWidth-80)'><ArrowForwardIosIcon/></span></div>
            </div>
        </section>
        <section class="row">
            <h2>รายการฟรี</h2>
            <div class="slider">

                <div class="slider-arrow-left" ><span className="arrow" onClick="document.getElementById(id).scrollLeft-=(window.innerWidth-80)"><ArrowBackIosIcon/></span></div>
                <div class="row-posters">
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                    <img class='row-poster' src='https://cdn1.dotesports.com/wp-content/uploads/2020/04/28122855/valorant_jett_duotoned-1-1024x576-1.jpg' loading="lazy"/>
                </div>
                <div class="slider-arrow-right" ><span className="arrow" onClick='document.getElementById(id).scrollLeft+=(window.innerWidth-80)'><ArrowForwardIosIcon/></span></div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
