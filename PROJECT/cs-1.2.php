<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webtoon</title>
    <link rel="stylesheet" href="1-2.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
  </head>
  <?php
$newtoon_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/chayanuch1124/SCS211/main/newtoon.json"), true);
$newtoon = $newtoon_obj["newtoon"];
?>

  <body>
    <div class="container">
      <!-- nav -->
      <?php include("layouts/cs-header.php") ?> 
     
      <!-- casuolๆ   -->
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="images/pic-head1.png"
              class="img_rsponsive"
              alt="Back From Black"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/pic-head2.png"
              class="img_rsponsive"
              alt="My In-Laws are
              Obsessed with Me"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/pic-head3.png"
              class="img_rsponsive"
              alt="Fathoms of Atonement"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/pic-head4.png"
              class="img_rsponsive"
              alt="Snuggle up with these romance favorites!"
            />
          </div>

          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- casuol-->
      <section class="ftco-section">
        <div class="row text-sec">
          <div class="col-6">
            <div>New & Trending</div>
          </div>
          <div class="col-6">
            <a class="button btn-all">MORE </a>
          </div>
        </div>
        <div class="wrapper i">
          
          <div class="carousel item2">
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.1" alt="img" draggable="false"
              /></a>
              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">Bailin and Li Yun</div>
              <div class="image-text-1-2 bi bi-star-fill">9.50</div>
              <div class="image-text-1-3">Jayessart</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC1.2" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">Surviving a Harem</div>
              <div class="image-text-1-2 bi bi-star-fill">9.29</div>
              <div class="image-text-1-3">Jeonboon</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.3" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Drama</div>
              <div class="image-text-1-1">The Seductive Wife</div>
              <div class="image-text-1-2 bi bi-star-fill">9.56</div>
              <div class="image-text-1-3">Yoon Soda , RedpeachStudio</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.4.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Action</div>
              <div class="image-text-1-1">Weapon Creator</div>
              <div class="image-text-1-2 bi bi-star-fill">9.29</div>
              <div class="image-text-1-3">Seo Tae rang , gangjae</div>
            </div>
            <div class="image-container">
              <a href="#">
                <img src="images/PIC-1.5.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Action</div>
              <div class="image-text-1-1">The Stellar Swordmaster</div>
              <div class="image-text-1-2 bi bi-star-fill">9.67</div>
              <div class="image-text-1-3">Hong Dae Ui , juno</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.6.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">Bailin and Li Yun</div>
              <div class="image-text-1-2 bi bi-star-fill">9.50</div>
              <div class="image-text-1-3">Jayessart</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.7.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Action</div>
              <div class="image-text-1-1">Steel-Eating Player</div>
              <div class="image-text-1-2 bi bi-star-fill">9.36</div>
              <div class="image-text-1-3">Director9 , JJJ</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.8.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Supernatural</div>
              <div class="image-text-1-1">Trace Keeper</div>
              <div class="image-text-1-2 bi bi-star-fill">9.25</div>
              <div class="image-text-1-3">KAYRAA</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.9.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Thriller</div>
              <div class="image-text-1-1">The Guy Upstairs</div>
              <div class="image-text-1-2 bi bi-star-fill">9.67</div>
              <div class="image-text-1-3">Hanza Art</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.10.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Slice of life</div>
              <div class="image-text-1-1">Kidults</div>
              <div class="image-text-1-2 bi bi-star-fill">9.44</div>
              <div class="image-text-1-3">Hahim</div>
            </div>
          </div>
          
        </div>
      </section>
      <br />
      <hr />
      <section class="ftco-section">
        <div class="row text-sec">
          <div class="col-6">
            <div>Romance Top</div>
          </div>
          <div class="col-6">
            <a class="button btn-all"> MORE </a>
          </div>
        </div>
        <div class="wrapper i">
        
          <div class="carousel item2">
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.11.jpg" alt="img" draggable="false"
              /></a>
              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">Operation: True Love</div>
              <div class="image-text-1-2 bi bi-star-fill">9.78</div>
              <div class="image-text-1-3">kkokkalee , Dledumb</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.12.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">The Mafia Nanny</div>
              <div class="image-text-1-2 bi bi-star-fill">9.75</div>
              <div class="image-text-1-3">sh00 , Violet Matter</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.13.jpg" alt="img" draggable="false"
              /></a>
              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">The Age of Arrogance</div>
              <div class="image-text-1-2 bi bi-star-fill">9.70</div>
              <div class="image-text-1-3">SOY MEDIA , Hansol</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.14.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">I Am the Villain</div>
              <div class="image-text-1-2 bi bi-star-fill">9.71</div>
              <div class="image-text-1-3">Sejji</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.15.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">THello Baby</div>
              <div class="image-text-1-2 bi bi-star-fill">9.38</div>
              <div class="image-text-1-3">Enjelicious</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.16.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">Villain with a Crush</div>
              <div class="image-text-1-2 bi bi-star-fill">9.73</div>
              <div class="image-text-1-3">seyoon</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.17.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">Obsidian Bride</div>
              <div class="image-text-1-2 bi bi-star-fill">9.48</div>
              <div class="image-text-1-3">V0RA , Chung purm</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.18.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">Couple Breaker</div>
              <div class="image-text-1-2 bi bi-star-fill">9.63</div>
              <div class="image-text-1-3">Maenggi Ki , Taegeon</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.19.webp" alt="img" draggable="false"
              /></a>
              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">Wished You Were Dead</div>
              <div class="image-text-1-2 bi bi-star-fill">9.05</div>
              <div class="image-text-1-3">SEOCHEONG , ARAN</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.20.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Romance</div>
              <div class="image-text-1-1">Locked Onto You</div>
              <div class="image-text-1-2 bi bi-star-fill">9.07</div>
              <div class="image-text-1-3">Lee dala , Jeong Hyejin</div>
            </div>
          </div>
          
        </div>
      </section>
      <br />
      <hr />
      <section class="ftco-section">
        <div class="row text-sec">
          <div class="col-6">
            <select id="selectbox" data-selected="aa">
              <option value="" selected="selected" disabled="disabled">
                Fantasy Top
              </option>
              <option value="1">Action Top</option>
              <option value="2">Drama Top</option>
              <option value="3">Comedy Top</option>
              <option value="4">Thriller Top</option>
              <option value="5">Slice of life Top</option>
              <option value="5">Supernatural Top</option>
              <option value="5">Sci-fi Top</option>
              <option value="5">Horror Top</option>
            </select>
          </div>
          <div class="col-6">
            <a class="button btn-all"> MORE </a>
          </div>
        </div>
        <div class="wrapper i">
          
          <div class="carousel item2">
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.21.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">Bailin and Li Yun</div>
              <div class="image-text-1-2 bi bi-star-fill">9.50</div>
              <div class="image-text-1-3">Jayessart</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.22.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">Lore Olympus</div>
              <div class="image-text-1-2 bi bi-star-fill">9.61</div>
              <div class="image-text-1-3">Rachel Smythe</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.23.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">Jungle Juice</div>
              <div class="image-text-1-2 bi bi-star-fill">9.78</div>
              <div class="image-text-1-3">Hyeong Eun , JUDER</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.24.png" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">I'm the Queen in This Life</div>
              <div class="image-text-1-2 bi bi-star-fill">9.63</div>
              <div class="image-text-1-3">Themis , Omin</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.25.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">Eleceed</div>
              <div class="image-text-1-2 bi bi-star-fill">9.94</div>
              <div class="image-text-1-3">Jeho Son , ZHENA</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.26.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">Doom Breaker</div>
              <div class="image-text-1-2 bi bi-star-fill">9.80</div>
              <div class="image-text-1-3">Blue-Deep</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.27.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">Baby Tyrant</div>
              <div class="image-text-1-2 bi bi-star-fill">9.67</div>
              <div class="image-text-1-3">Lee Huin , Awon</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.28.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">From a Knight to a Lady</div>
              <div class="image-text-1-2 bi bi-star-fill">9.72</div>
              <div class="image-text-1-3">Ink. , Hyerim Sung</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.29.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">I Was the Final Boss</div>
              <div class="image-text-1-2 bi bi-star-fill">9.61</div>
              <div class="image-text-1-3">LuckS</div>
            </div>
            <div class="image-container">
              <a href="#"
                ><img src="images/PIC-1.30.jpg" alt="img" draggable="false"
              /></a>

              <div class="image-text-1">Fantasy</div>
              <div class="image-text-1-1">Omniscient Reader</div>
              <div class="image-text-1-2 bi bi-star-fill">9.90</div>
              <div class="image-text-1-3">singNsong , UMI</div>
            </div>
          </div>
       
        </div>
      </section>
      <br />
      <hr />
      <div class="row canvas">
        <div class="col-lg-4 text-casvas">
          <div>WEBTOON CANVAS</div>
          <p class="text">
            Have a story to tell?<br />
            Share it on WEBTOON CANVAS.<br />
            Find everything you need to get it published.
          </p>
          <div class="text-findout">
            <a href="cs-2.2.php" class="botton findout"
              ><i class="bi bi-journal-text"> </i> Find out more
            </a>
          </div>
        </div>
        <div class="col-lg-8">
          <br />
          <section class="ftco-section">
            <div class="carousel item2">
              <div class="image-container">
                <a href="#"
                  ><img
                    src="https://swebtoon-phinf.pstatic.net/20221209_127/1670561516042dGTeq_JPEG/thumbnail.jpg"
                    alt="img"
                    draggable="false"
                /></a>

                <div class="image-text-1">Fantasy</div>
                <div class="image-text-1-1">Daemons of Lorasne</div>
                <div class="image-text-1-2 bi bi-star-fill">9.90</div>
                <div class="image-text-1-3">MyaOctopus</div>
              </div>
              <div class="image-container">
                <a href="#"
                  ><img
                    src="https://swebtoon-phinf.pstatic.net/20230416_88/16816545936322Qi63_JPEG/thumbnail.jpg"
                    alt="img"
                    draggable="false"
                /></a>

                <div class="image-text-1">Romance</div>
                <div class="image-text-1-1">RUTHLESS (GL)</div>
                <div class="image-text-1-2 bi bi-star-fill">9.77</div>
                <div class="image-text-1-3">DUMPLONE</div>
              </div>
              <div class="image-container">
                <a href="#"
                  ><img
                    src="https://swebtoon-phinf.pstatic.net/20210516_156/1621092039288a5s4d_PNG/thumbnail.jpg"
                    alt="img"
                    draggable="false"
                /></a>

                <div class="image-text-1">Comedy</div>
                <div class="image-text-1-1">Nerd and Jock</div>
                <div class="image-text-1-2 bi bi-star-fill">9.73</div>
                <div class="image-text-1-3">Marko R</div>
              </div>
              <div class="image-container">
                <a href="#"
                  ><img
                    src="https://swebtoon-phinf.pstatic.net/20220609_242/1654725443198i4N0c_PNG/thumbnail.jpg"
                    alt="img"
                    draggable="false"
                /></a>

                <div class="image-text-1">Comedy</div>
                <div class="image-text-1-1">Monsters and Girls</div>
                <div class="image-text-1-2 bi bi-star-fill">9.32</div>
                <div class="image-text-1-3">Quill</div>
              </div>
              <div class="image-container">
                <a href="#"
                  ><img
                    src="https://swebtoon-phinf.pstatic.net/20210512_221/1620803524068sbgtd_JPEG/thumbnail.jpg"
                    alt="img"
                    draggable="false"
                /></a>

                <div class="image-text-1">Comedy</div>
                <div class="image-text-1-1">The Little Trashmaid</div>
                <div class="image-text-1-2 bi bi-star-fill">9.78</div>
                <div class="image-text-1-3">s0s2</div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="row">
        <section class="ftco-section">
          <div class="carousel item4">
          <?php foreach ($newtoon as $row) { ?>
            <div class="image-container">
              <a href="#"
                ><img
                  src="<?= $row["image"] ?>"
                  alt="img"
                  draggable="false"
              /></a>
              <div class="image-text-1"><?= $row["writer"] ?></div>
              <div class="image-text-1-1"><?= $row["name"] ?></div>
              <div class="image-text-4-2 bi bi-star-fill"><?= $row["rate"] ?></div>
              <div class="image-text-1-3"><?= $row["writer"] ?></div>
            </div>
            <?php } ?>
            
          </div>
        </section>
      </div>
      <!-- Site footer -->
       <?php include("layouts/cs-footer.php") ?> 
      
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript เพื่อควบคุมการแสดงผลของ popup -->
    <script>
      function openLoginPopup() {
        $("#overlay").fadeIn();
        $("#login-popup").fadeIn();
      }

      function closeLoginPopup() {
        $("#overlay").fadeOut();
        $("#login-popup").fadeOut();
      }
    </script>
    <script>
      function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if (username == "" || password == "") {
          alert("Please fill out all fields");
          return false; // ไม่ส่งฟอร์มถ้ามีฟิลด์ว่าง
        }
      }
    </script>
  </body>
</html>
