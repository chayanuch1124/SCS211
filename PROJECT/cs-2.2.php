<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Webtoon</title>
  <link rel="stylesheet" href="2-2.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>

<body>
  <div class="container">
    <!-- nav -->
    <?php include("layouts/cs-header.php") ?>
    <!-- nav ข้างล่าง -->
    <div id="subtopnav" onmousedown="startscrolling_subtopnav(event)" onmousemove="scrolling_subtopnav(event)" onmouseup="endscrolling_subtopnav(event)" onclick="return pellessii(event)">
      <div id="scroll_left_btn" class="w3-hide-medium w3-hide-small d-lg-none d-md-none d-sm-none" style="display: flex">
        <span onmousedown="scrollmenow(-1)" onmouseup="stopscrollmenow()" onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;❮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
      </div>

      <a href="cs-2.2.php" class="ga-nav subtopnav_firstitem" title="HTML Tutorial">HOME</a>
      <a href="#" class="ga-nav" title="ALL">ALL</a>
      <a href="#" class="ga-nav" title="COMEDY">COMEDY</a>
      <a href="#" class="ga-nav" title="SQL Tutorial">FANTASY</a>
      <a href="#" class="ga-nav" title="ROMANCE">ROMANCE</a>
      <a href="#" class="ga-nav" title="SLICE OF LIFE">SLICE OF LIFE</a>
      <a href="#" class="ga-nav" title="SCI-FI">SCI-FI</a>
      <a href="#" class="ga-nav" title="DRAMA">DRAMA</a>
      <a href="#" class="ga-nav" title="ACTION">ACTION</a>
      <a href="#" class="ga-nav" title="SUPERHERO">SUPERHERO</a>
      <a href="#" class="ga-nav" title="SHORT STORY">SHORT STORY</a>
      <a href="#" class="ga-nav" title="HEARTWOMING">HEARTWOMING</a>
      <a href="#" class="ga-nav" title="THRILLER">THRILLER</a>
      <a href="#" class="ga-nav" title="HORROR">HORROR</a>
      <a href="#" class="ga-nav" title="POST APOCALYPTIC">POST APOCALYPTIC</a>
      <a href="#" class="ga-nav" title="ZOMBIES">ZOMBIES</a>
      <a href="#" class="ga-nav" title="SCHOOL">SCHOOL</a>
      <a href="#" class="ga-nav" title="SUPERNATURAL">SUPERNATURAL</a>
      <a href="#" class="ga-nav" title="ANIMALS">ANIMALS</a>
      <a href="#" class="ga-nav" title="CRIME/MYSTERY">CRIME/MYSTERY</a>
      <a href="#" class="ga-nav" title="HISTORICAL">HISTORICAL</a>
      <a href="#" class="ga-nav" title="ANIMALS">ANIMALS</a>
      <a href="#" class="ga-nav" title="Django Tutorial">INFORMATIVE</a>
      <a href="#" class="ga-nav" title="SPORTS">SPORTS</a>
      <a href="#" class="ga-nav" title="INSPIRATIONAL">INSPIRATIONAL</a>
      <a href="#" class="ga-nav" title="ALL AGE">ALL AGE</a>

      <div id="btn_container_subtopnav">
        <div id="scroll_right_btn" class="w3-hide-medium w3-hide-small d-lg-none d-md-none d-sm-none" style="display: block">
          <span onmousedown="scrollmenow(1)" onmouseup="stopscrollmenow()" onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;❯&nbsp;&nbsp;&nbsp;</span>
        </div>
      </div>
    </div>
    <!-- carousel-->
    <section class="ftco-section">
      <div class="row text-sec">
        <div class="col-6">
          <div>ALL CANCAS</div>
        </div>
        <div class="col-6">
          <a class="button btn-all">
            Sort by Date <i class="bi bi-check-lg"></i></a>
        </div>
      </div>
      <div class="wrapper i">

        <div class="carousel item2">
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20240130_248/1706546918797WdNdl_JPEG/920503bd-d3bf-4381-98d9-06a39d24d46711763134176808944606.jpeg" alt="img" draggable="false" /></a>
            <div class="image-text-1">Romance</div>
            <div class="image-text-1-1">IMMORTAL IDIOT</div>
            <div class="image-text-1-2 bi bi-star-fill">8.74</div>
            <div class="image-text-1-3">spritzypop</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20240109_170/1704733307286Cj5CR_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Erstwhile Fairy Tales</div>
            <div class="image-text-1-2 bi bi-star-fill">8.36</div>
            <div class="image-text-1-3">ginabiggs</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20220403_83/1648954334902wocfm_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Drama</div>
            <div class="image-text-1-1">Hugger Mugger</div>
            <div class="image-text-1-2 bi bi-star-fill">9.54</div>
            <div class="image-text-1-3">Fox and Ros</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230607_48/1686098233472RJpRr_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Romance</div>
            <div class="image-text-1-1">What The Hell?</div>
            <div class="image-text-1-2 bi bi-star-fill">8.44</div>
            <div class="image-text-1-3">Walden Hell Comics</div>
          </div>
          <div class="image-container">
            <a href="#">
              <img src="https://swebtoon-phinf.pstatic.net/20231105_272/1699116884860GvpJk_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Drama</div>
            <div class="image-text-1-1">I'll Be in Your Care</div>
            <div class="image-text-1-2 bi bi-star-fill">9.69</div>
            <div class="image-text-1-3">kazumaro__</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230604_254/1685817304415vDkT9_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Romance</div>
            <div class="image-text-1-1">Summer Autumn ...</div>
            <div class="image-text-1-2 bi bi-star-fill">9.63</div>
            <div class="image-text-1-3">Derppycat.Amaya</div>
          </div>
        </div>

      </div>
    </section>
    <section class="ftco-section">
      <div class="wrapper i">

        <div class="carousel item2">
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20231130_250/17013207677360ieSR_PNG/thumbnail.jpg" alt="img" draggable="false" /></a>
            <div class="image-text-1">Comedy</div>
            <div class="image-text-1-1">SWORDS: The Web...</div>
            <div class="image-text-1-2 bi bi-star-fill">9.47</div>
            <div class="image-text-1-3">Matthew Wills</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230430_203/1682841768677rjbII_PNG/737a365a-2a91-48ec-bd2a-2b409ac745cd7997288121534431789.png" alt="img" draggable="false" /></a>

            <div class="image-text-1">Romance</div>
            <div class="image-text-1-1">Somebody to you</div>
            <div class="image-text-1-2 bi bi-star-fill">9.62</div>
            <div class="image-text-1-3">Ladybox</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230221_2/1676946351918od2oF_JPEG/4572ea9c-c3a5-44d2-8d41-14574df2dc706666411369014894467.jpeg" alt="img" draggable="false" /></a>
            <div class="image-text-1">Supernatural</div>
            <div class="image-text-1-1">The Age of Arrogance</div>
            <div class="image-text-1-2 bi bi-star-fill">9.03</div>
            <div class="image-text-1-3">Akame S.</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20220620_127/1655660679354Hkw5m_JPEG/f5380ed7-074e-4cea-8d7e-8bd723e3f9de.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Slice of life</div>
            <div class="image-text-1-1">Blossyay's Palette</div>
            <div class="image-text-1-2 bi bi-star-fill">9.72</div>
            <div class="image-text-1-3">Blossyay</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230104_282/1672783011806ikWU9_PNG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Sci-fi</div>
            <div class="image-text-1-1">ArtifiSouls</div>
            <div class="image-text-1-2 bi bi-star-fill">9.84</div>
            <div class="image-text-1-3">ArtifiSoap</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20231210_234/1702160174101sbDlh_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Drama</div>
            <div class="image-text-1-1">Fragments</div>
            <div class="image-text-1-2 bi bi-star-fill">9.77</div>
            <div class="image-text-1-3">next_lvl</div>
          </div>


        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="wrapper i">

        <div class="carousel item2">
          <div class="image-container">
            <a href="#"><img src="https://img.comicfury.com/comics/272/57673a1678008172b95232f2101356474.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Comedy</div>
            <div class="image-text-1-1">Big Troubles in ...</div>
            <div class="image-text-1-2 bi bi-star-fill">9.13</div>
            <div class="image-text-1-3">zhenyo</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20210920_225/1632110685631MiKJd_PNG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">INFINITE</div>
            <div class="image-text-1-2 bi bi-star-fill">9.86</div>
            <div class="image-text-1-3">Miritomaki</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20210511_141/1620734385111fTrI5_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Drama</div>
            <div class="image-text-1-1">A Drop of Lifel</div>
            <div class="image-text-1-2 bi bi-star-fill">9.69</div>
            <div class="image-text-1-3">Hyeong Eun , JUDER</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20231104_288/16990391244043gEYj_PNG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Romance</div>
            <div class="image-text-1-1">Dangerous Wish</div>
            <div class="image-text-1-2 bi bi-star-fill">8.93</div>
            <div class="image-text-1-3">Bsl8toons</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20231107_87/1699326757862cE6ym_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Drama</div>
            <div class="image-text-1-1">I LIKE MY BEST...</div>
            <div class="image-text-1-2 bi bi-star-fill">9.73</div>
            <div class="image-text-1-3">Couch_pOTatOEe</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20210626_20/1624639318883Liqqm_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Thriller</div>
            <div class="image-text-1-1">I'm so stupid in love</div>
            <div class="image-text-1-2 bi bi-star-fill">9.40</div>
            <div class="image-text-1-3">k a i r n n</div>
          </div>


        </div>
      </div>
    </section>
    <div class="row page">
      <div class="col">
        <ul class="pagination modal-3">
          <li><a href="#" class="active">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li><a href="#">7</a></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><a href="#">10</a></li>
        </ul>
        <br />
      </div>
    </div>
    <section class="ftco-section">
      <div class="row text-sec">
        <div class="col-6">
          <div>Recommended Series</div>
        </div>
        <div class="col-6">
          <a class="button btn-all1"> MORE </a>
        </div>
      </div>
      <div class="wrapper i">

        <div class="carousel item2">
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230808_276/16914930484934sHQO_JPEG/e7805a78-7adb-41bb-b9fc-4caa608600707035027793737491453.jpeg" alt="img" draggable="false" /></a>
            <div class="image-text-1">Slice of life</div>
            <div class="image-text-1-1">True And Me</div>
            <div class="image-text-1-2 bi bi-star-fill">9.05</div>
            <div class="image-text-1-3">Alen Fey</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20220316_94/1647383400321ULkde_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Bird and Boar</div>
            <div class="image-text-1-2 bi bi-star-fill">9.06</div>
            <div class="image-text-1-3">PlagueBirb</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1644426079i/60380732.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Romance</div>
            <div class="image-text-1-1">Planetarium</div>
            <div class="image-text-1-2 bi bi-star-fill">9.22</div>
            <div class="image-text-1-3">Balce_Arts</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://preview.redd.it/figments-is-up-on-webtoon-canvas-and-tapas-heres-some-v0-6b9y0j8cka2c1.png?width=640&crop=smart&auto=webp&s=f88efd2be1f078265ee55f8e8523e79ad4a14de1" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Figments</div>
            <div class="image-text-1-2 bi bi-star-fill">9.23</div>
            <div class="image-text-1-3">Ayzie Bore</div>
          </div>
          <div class="image-container">
            <a href="#">
              <img src="https://swebtoon-phinf.pstatic.net/20230307_271/1678181372700Ks0Tq_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Heartwarming</div>
            <div class="image-text-1-1">Pink Lemonade</div>
            <div class="image-text-1-2 bi bi-star-fill">9.50</div>
            <div class="image-text-1-3">Derppycat.Amaya</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20220525_115/16534423387636MGXT_PNG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Romance</div>
            <div class="image-text-1-1">Honey Lemonade</div>
            <div class="image-text-1-2 bi bi-star-fill">9.67</div>
            <div class="image-text-1-3">Vodkajuice</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20231222_140/1703197932581RCsP4_JPEG/515ef604-351e-46e6-a05d-5368455d59d88539144145393735180.jpeg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Federsbane [GL]</div>
            <div class="image-text-1-2 bi bi-star-fill">9.36</div>
            <div class="image-text-1-3">Pink_G</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20231130_66/1701309148285rR9hc_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Drama</div>
            <div class="image-text-1-1">Ghost Boy(2023)</div>
            <div class="image-text-1-2 bi bi-star-fill">9.34</div>
            <div class="image-text-1-3">its a ghosty</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://pbs.twimg.com/media/FxEf5n9aEAIcfLE.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Thriller</div>
            <div class="image-text-1-1">Codename: COLORS</div>
            <div class="image-text-1-2 bi bi-star-fill">9.58</div>
            <div class="image-text-1-3">itzzz_tjay</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20211123_11/1637671839513MvqmJ_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Romance</div>
            <div class="image-text-1-1">Boy Girlfriend</div>
            <div class="image-text-1-2 bi bi-star-fill">9.63</div>
            <div class="image-text-1-3">Pastaflavour</div>
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
          <a class="button btn-all1"> MORE </a>
        </div>
      </div>
      <div class="wrapper i">

        <div class="carousel item2">
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20231005_204/16964504795823wD6M_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>
            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">GoofyGodsComics</div>
            <div class="image-text-1-2 bi bi-star-fill">9.72</div>
            <div class="image-text-1-3">GoofyGodsComics</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230514_295/1684051627161eFCaq_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Dagger to the Heart</div>
            <div class="image-text-1-2 bi bi-star-fill">9.83</div>
            <div class="image-text-1-3">oori_</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20220209_152/16443429422582BApK_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Osora</div>
            <div class="image-text-1-2 bi bi-star-fill">9.63</div>
            <div class="image-text-1-3">Toni-Renea Franceschi</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20211103_191/1635938080210NGTX5_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Wild Beast Forest ...</div>
            <div class="image-text-1-2 bi bi-star-fill">9.69</div>
            <div class="image-text-1-3">Inma R.</div>
          </div>
          <div class="image-container">
            <a href="#">
              <img src="https://swebtoon-phinf.pstatic.net/20230328_252/1679976525097R6SYN_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Godchain</div>
            <div class="image-text-1-2 bi bi-star-fill">9.56</div>
            <div class="image-text-1-3">AutumnAdmiral</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20221228_240/1672195988070ySVog_JPEG/ca2c6bf5-d80c-49cd-a90d-fc66ac0c37944401629506654373361.jpeg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Witches & Wine</div>
            <div class="image-text-1-2 bi bi-star-fill">9.78</div>
            <div class="image-text-1-3">atisumuffin ԅ( ˘ʚ˘ԅ)</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230813_80/1691898746002B3D13_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Naikana</div>
            <div class="image-text-1-2 bi bi-star-fill">8.01</div>
            <div class="image-text-1-3">pensandpillows</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230209_88/1675877964065qVl5o_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Stardust</div>
            <div class="image-text-1-2 bi bi-star-fill">9.15</div>
            <div class="image-text-1-3">Silly Studios</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="https://swebtoon-phinf.pstatic.net/20230828_62/1693224362058rjbk9_JPEG/thumbnail.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Raising Hell: A De...</div>
            <div class="image-text-1-2 bi bi-star-fill">9.37</div>
            <div class="image-text-1-3">DoughnutCatDreams</div>
          </div>
          <div class="image-container">
            <a href="#"><img src="images/img-last.jpg" alt="img" draggable="false" /></a>

            <div class="image-text-1">Fantasy</div>
            <div class="image-text-1-1">Parade of the Villains</div>
            <div class="image-text-1-2 bi bi-star-fill">9.25</div>
            <div class="image-text-1-3">XHIOQI</div>
          </div>
        </div>

      </div>
    </section>
    <br />
    <?php include("layouts/cs-footer.php") ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    activate_subtopnav_scroll = 0;
    from_scrollpos = -1;
    current_scrollpos = -1;
    goto_tut = 1;

    function startscrolling_subtopnav(event) {
      event.preventDefault();
      from_scrollpos = event.clientX;
      activate_subtopnav_scroll = 1;
    }

    function scrolling_subtopnav(event) {
      current_scrollpos = event.clientX;
      if (current_scrollpos == from_scrollpos) return false;
      event.preventDefault();
      if (event.buttons == 0) return false;
      var scrollspeed;
      if (activate_subtopnav_scroll == 1) {
        goto_tut = 0;
        scrollspeed = current_scrollpos - from_scrollpos;
        scrollspeed = Math.abs(scrollspeed);
        if (current_scrollpos < from_scrollpos) {
          document.getElementById("scroll_left_btn").style.display = "block";
          document.getElementById("subtopnav").scrollLeft += scrollspeed;
        } else {
          document.getElementById("subtopnav").scrollLeft -= scrollspeed;
        }
        scrollbtn_visible();
        from_scrollpos = current_scrollpos;
      }
    }

    function endscrolling_subtopnav(event) {
      event.preventDefault();
      activate_subtopnav_scroll = 0;
      from_scrollpos = -1;
      current_scrollpos = -1;
    }

    function pellessii(event) {
      if (goto_tut == 0) {
        event.preventDefault();
        goto_tut = 1;
        return false;
      }
    }
    var scrollspeed = 1;
    var scrollinterval;

    function scrollmenow(n) {
      scrollinterval = window.setInterval(function() {
        scrollspeed = scrollspeed * 1.1;
        if (scrollspeed > 10) {
          scrollspeed = 10;
        }
        if (n == 1) {
          document.getElementById("subtopnav").scrollLeft += scrollspeed;
        } else {
          document.getElementById("subtopnav").scrollLeft -= scrollspeed;
        }
        scrollbtn_visible();
      }, 10);
    }

    var p_s_l = 0;
    var x_s_l = 0;

    function scrollbtn_visible() {
      var c_s_l = document.getElementById("subtopnav").scrollLeft;
      if (c_s_l < 1) {
        document.getElementById("scroll_left_btn").style.display = "none";
      } else {
        document.getElementById("scroll_left_btn").style.display = "block";
      }
      if (c_s_l > 1 && c_s_l == p_s_l) {
        x_s_l++;
      } else {
        x_s_l = 0;
      }
      if (x_s_l > 3) {
        document.getElementById("scroll_right_btn").style.display = "none";
      } else {
        document.getElementById("scroll_right_btn").style.display = "block";
      }
      p_s_l = document.getElementById("subtopnav").scrollLeft;
    }

    function stopscrollmenow() {
      scrollspeed = 1;
      window.clearInterval(scrollinterval);
    }

    //window.addEventListener("load", subtopnav_intoview);

    function subtopnav_intoview() {
      var a,
        b,
        c,
        d,
        i = 0;
      a = document.getElementById("subtopnav");
      if (!a || !a.getElementsByClassName) {
        return false;
      }
      var x = a.getElementsByTagName("A");
      b = document.location.pathname;
      if (
        b.indexOf("/python/numpy/") > -1 ||
        b.indexOf("/python/pandas/") > -1 ||
        b.indexOf("/python/scipy/") > -1
      ) {
        for (i = 0; i < x.length; i++) {
          c = x[i].pathname;
          if (
            (b.indexOf("/python/numpy/") > -1 &&
              c == "/python/numpy/default.asp") ||
            (b.indexOf("/python/pandas/") > -1 &&
              c == "/python/pandas/default.asp") ||
            (b.indexOf("/python/scipy/") > -1 &&
              c == "/python/scipy/index.php")
          ) {
            x[i].className += " active";
            break;
          }
        }
      } else {
        for (i = 0; i < x.length; i++) {
          c = x[i].pathname;
          if (
            c.indexOf("void(0)") == -1 &&
            b.substr(0, b.indexOf("/", 1)) == c.substr(0, c.indexOf("/", 1))
          ) {
            x[i].className += " active";
            break;
          }
        }
      }
      d = a.getElementsByClassName("active");
      if (d.length < 1) {
        return false;
      }
      while (!amIIntoView(a, d[0])) {
        i++;
        if (i > 1000) {
          break;
        }
        a.scrollLeft += 10;
      }
      scrollbtn_visible();
    }

    function amIIntoView(x, y) {
      var a = x.scrollLeft;
      var b = a + window.innerWidth;
      var ytop = y.offsetLeft;
      var c = y.offsetWidth;
      var d = 0;
      if (document.getElementById("btn_container_subtopnav"))
        d = document.getElementById("btn_container_subtopnav").offsetWidth;
      var ybottom = ytop + c + d + 20;
      return ybottom <= b && ytop >= a;
    }
  </script>
</body>

</html>