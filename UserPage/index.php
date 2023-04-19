<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!--CSS-->
  <link rel="stylesheet" href="home.css">

</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg " id="navbar">
    <div class="container-fluid px-3">
      <a class="navbar-brand textLogo" href="index.php">Don Sak</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="bi bi-list" style="font-size: 30px;color:#fff;"></i></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">

        <ul class="navbar-nav ms-auto">
          <li class="nav-item navMenu">
            <a class="nav-link linkMenu" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item dropdown navMenu ">
            <a class="nav-link  linkMenu dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              VR TOUR
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="VR_attrachome.php">VR Attraction</a></li>
              <li><a class="dropdown-item" href="VR_antiqhome.php">VR Antiquities</a></li>

            </ul>
          </li>

          <li class="nav-item dropdown navMenu">
            <a class="nav-link linkMenu dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              360 TOUR
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="360attraction.php">360 Attraction</a></li>
              <li><a class="dropdown-item" href="360antiq.php">360 Antiquities</a></li>

            </ul>
          </li>

          <li class="nav-item pe-2">
            <a href="../login.php"><button type="button" class="btn px-4 btMenu ">LOGIN</button></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- ------------------------------------End--------------------------------------- -->

  <!-- image BG -->
  <div class="bg d-flex"></div>
  <div class="content text-center textImage ">
    <h2 class="t1"><i class="bi bi-geo-alt me-1 " style="font-size: 45px;"></i>ประเทศไทย</h2>
    <h1 class="t2">อำเภอดอนสัก</h1>
    <h3 class="t3 fs-1">สุราษฎร์ธานี</h3>
  </div>
  <!-- ------------------------------------------------------- -->

  <!--------------------content 1 ------------------------------->
  <div class="container-fluid ">
    <div class="container">
      <div class="pt-4 text-center">
        <h1 class="fw-bold" style="color:#282120">ประวัติศาสตร์</h1>
      </div>
      <div class="con1-border mx-auto"></div>
      <div class="pt-4" >
        <p style="text-align:justify">อำเภอดอนสักเดิมอยู่ในเขตการปกครองของอำเภอกาญจนดิษฐ์ ยกฐานะเป็นกิ่งอำเภอ เมื่อวันที่ 24 มีนาคม 2512 มี 2 ตำบล คือ ตำบลไชยคราม และตำบลดอนสัก และเมื่อวันที่ 1 กันยายน 2512 ได้รับการโอนจาก อำเภอกาญจนดิษฐ์เพิ่มอีก 1 ตำบล คือ ตำบลชลคราม ได้ยกฐานะเป็นอำเภอ ดอนสักเมื่อวันที่ 16 พฤศจิกายน 2514 ต่อมาได้แยกตำบลดอนสัก กับตำบลไชยคราม ออกเป็นตำบลปากแพรก เมื่อวันที่ 14 กรกฎาคม 2521 รวมเป็น 4 ตำบล คือ ตำบลดอนสัก ตำบลปากแพรก ตำบลไชยคราม และตำบลชลคราม
          อำเภอดอนสักตั้งอยู่ทางทิศตะวันออกของจังหวัด ตั้งอยู่บนฝั่งอ่าวไทยตะวันออก หรืออ่าวบ้านดอน ห่างจากจังหวัดสุราษฎร์ธานีไปทางทิศตะวันออก ประมาณ 62 กิโลเมตร และห่างจากกรุงเทพมหานคร ประมาณ 712 กิโลเมตร ที่ว่าการอำเภอตั้งอยู่ริมถนนสายบ้านใน–ขนอม ทางหลวงหมายเลข 4142 อยู่ในเขตพื้นที่ หมู่ที่ 5 ตำบลดอนสัก อำเภอดอนสักมีพื้นที่ประมาณ 458 ตารางกิโลเมตร หรือ 286,250 ไร่ และมีอาณาเขตติดต่อกับเขตการปกครองข้างเคียง
        </p>
      </div>
    </div>
  </div>
  <!-- -------------------------- End ------------------------------>

  <!-- -------------contaent 2 ---------------------------------- -->
  <div class="container-fluid ">
    <div class="container ">
      <div class="text-center pt-4">
        <h1 class="fw-bold" style="color:#282120">แผนที่</h1>
      </div>
      <div class="con2-border mx-auto"></div>
      <div class="text-center pt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24819.56962934962!2d99.68474976912835!3d9.318902995648855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30546f363b99833d%3A0x4ca333ca11abdf1a!2z4Lin4Lix4LiU4LmA4LiC4Liy4Liq4Li44Lin4Lij4Lij4LiT4Lib4Lij4Liw4LiU4Li04Lip4LiQ4LmM!5e0!3m2!1sen!2sth!4v1659163794117!5m2!1sen!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
  <!-- ------------------------------------------------------------- -->

  <!------------------------- footer ------------------------------- -->
  <div class="container-fluid p-0 mt-2 bgfooter text-white">
    <div class="container ">
      <div class="row pt-4">

        <div class="col">
          <div class="fs-3 fw-bold pb-2 "> About Us </div>
          <div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A impedit qui architecto, saepe sint minus voluptas natus perspiciatis aperiam. Iure suscipit totam amet veritatis, veniam ex minus ea tenetur illum!
            </p>
          </div>
        </div>

        <div class="col">
          <div class="text-center fs-3 fw-bold pb-2">Contact</div>
          <div>
            <ul class="footerlist">
              <li>
                <div class="d-flex"><i class="bi bi-telephone-fill"></i>
                  <div class="ps-3">123-1234567</div>
                </div>
              </li>
              <li>
                <div class="d-flex"><i class="bi bi-envelope-fill"></i>
                  <div class="ps-3">5555555555@gmail.com</div>
                </div>
              </li>
              <li>
                <div class="d-flex"><i class="bi bi-geo-alt-fill"></i>
                  <div class="ps-3">117 Lorem ipsum dolorsit amet consectetur adipisicing elit.</div>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class="pt-2">
      <div class="border-top border-1 border-warning">
        <div class="text-center">&copy;
          All Rights Reserved. Designed by Thodsaphon And Wanchaloem.
        </div>
      </div>
    </div>

  </div>



  <!--js-->
  <script src="../js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="../js/panolens.min.js"></script>

</body>

</html>