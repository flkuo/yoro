<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>社區養老 YORO</title>
  <meta name="description" content="サイトの説明文">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- スタイルシートはここから -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/queries.css">
</head>

<body>

<form method="GET" action="test.php">
  name: <input type="text" name="name"/>
  age: <input type="text" name="age"/>
  <input type="submit"/>
</form>


  <header>
    <div class="container d-none d-lg-block">
      <div class="text-center mx-auto my-3"><a href="../index.html"><img src="../img/yoro_logo7.png" alt="yoro_logo7"  width="560" height="81.7"></a></div>
      <h1 class="text-center h6">社區高齡行動照護資訊網頁</h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light mb-3">
      <div class="container-fluid">
        <a class="navbar-brand d-inline-block d-lg-none w-75" href="/"><img src="img/logo.png" alt="Clinic Name" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-3"><a href="../index.html#notice" class="nav-link">首頁</a></li>
            <li class="nav-item px-3"><a href="../index.html#list" class="nav-link">研究招募</a></li>
            <li class="nav-item px-3"><a href="../index.html#message" class="nav-link">雲嘉長照機構</a></li>
            <li class="nav-item px-3"><a href="../index.html#chara" class="nav-link">行動功能衛教</a></li>
            <li class="nav-item px-3"><a href="../index.html#blog" class="nav-link">工作機會</a></li>
            <li class="nav-item right px-3"><a href="../index.html#access" class="nav-link">連絡方式與地點</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-fluid bg-warning mb-5 pt-3">
    <h2 class="text-center font-weight-bolder pb-3">研究參與預約及意見交流</h2>
  </div>

  <article class="container">

    <section class="py-5">

      <h3 class="text-center font-weight-bold mb-5" id="net-reservation">留言板</h3>

      <ul>
        <li>＊必填項目</li>
      </ul>

      <form class="border p-3 p-md-5 mb-5">

        <div class="mb-3 row align-items-center">
          <label for="Subject" class="col-sm-2 col-form-label">目的＊</label>
          <div class="col-sm-10">
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
              <label class="form-check-label" for="inlineRadio1">研究參與預約</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
              <label class="form-check-label" for="inlineRadio2">意見表達</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="inlineRadioOptions" id="inlineRadio3" value="option3" required>
              <label class="form-check-label" for="inlineRadio3">其他</label>
            </div>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="Name" class="col-sm-2 col-form-label">姓名/稱呼＊</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Named" placeholder="請填入姓名或稱呼" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="Email" class="col-sm-2 col-form-label">電子信箱</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Email" value="">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="Tel" class="col-sm-2 col-form-label">聯絡電話＊</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="Tel" placeholder="您的電話號碼" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="Date" class="col-sm-2 col-form-label">研究參與預約日期</label>
          <div class="col-sm-10">
            <div class="row align-items-center mb-3">
              <div class="col">第一順位</div>
              <div class="col-10"><input type="date" class="form-control d-inline-block" id="Date" value="" required>
              </div>
            </div>
            <div class="row align-items-center mb-3">
              <div class="col">第二順位</div>
              <div class="col-10"><input type="date" class="form-control d-inline-block" id="Date" value="">
              </div>
            </div>
            <div class="row align-items-center mb-3">
              <div class="col">第三順位</div>
              <div class="col-10"><input type="date" class="form-control d-inline-block" id="Date" value="">
              </div>
            </div>
          </div>
        </div>

        <div class="mb-3 row align-items-center">
          <label for="Subject" class="col-sm-2 col-form-label">連絡您的方法＊</label>
          <div class="col-sm-10">
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="Radios1" id="exampleRadio1" value="option4" >
              <label class="form-check-label" for="exampleRadio1">電子信箱</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="Radios2" id="exampleRadio2" value="option5" >
              <label class="form-check-label" for="exampleRadio2">電話</label>
            </div>
          </div>
        </div>

        <div class="mb-5 row align-items-center">
          <label for="Subject" class="col-sm-2 col-form-label">留言</label>
          <div class="col-sm-10">
            <div class="form-floating">
              <textarea class="form-control" placeholder="ここにコメントを残す" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">請寫下您的提問或意見</label>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center mb-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              同意網頁使用規定
            </label>
          </div>
        </div>
        <div class="col-12 text-center">
          <button type=" submit" class="btn btn-primary">送出</button>
        </div>
      </form>

      <div class="text-center">
        <a href="mailto:fanlink@gmail.com" class="border btn btn-light p-4 fw-bolder col-md-8">
          您也可寄信至 fanlink@gmail.com<br>
          <span class="fw-normal">※ 將開啟預設信件程式</span>
        </a>
      </div>
	  <br>
	   <div class="text-center">
        <a class="border btn btn-light p-4 fw-bolder col-md-8">
          您也可電話預約研究參與事宜 <br>05-6325-080 分機 26<br> 研究助理 廖小姐<br>
           </a>
      </div>

    </section>

    

    <section class="pb-5">
      <div class="d-lg-flex justify-content-between align-items-center">
        <div class="col-lg-4 text-center mb-3">
          <img src="../img/yoro_logo7.png" alt="yoro_logo7"  width="560" height="81.7" class="img-fluid">
        </div>
        <div class="col-lg-4 text-center mb-3">
          <h4>國衛院高齡醫學暨福祉研究中心 <br>郭方琳博士研究團隊</h4>
          <h4 class="h3">TEL:05-6325-080</h4>
          <p class="mb-0">632 雲林縣虎尾鎮學府西路8號&ensp;<br class="d-block d-md-none">2F</p>
        </div>
      </div>
    </section>

  </article>

  <footer class="bg-secondary py-5 position-relative">
    <nav class="navbar navbar-expand navbar-light px-4">
      <!--メニュー項目-->
      <div class="collapse navbar-collapse px-3">
        <ul class="navbar-nav mx-auto footer">
          <li class="nav-item px-2 border-after"><a href="../index.html#notice" class="nav-link text-white">首頁</a></li>
          <li class="nav-item px-2 border-after"><a href="../index.html#list" class="nav-link text-white">研究招募</a></li>
          <li class="nav-item px-2 border-after"><a href="../index.html#message" class="nav-link text-white">雲嘉長照機構</a></li>
          <li class="nav-item px-2 border-after"><a href="../index.html#chara" class="nav-link text-white">行動功能衛教</a></li>
          <li class="nav-item px-2 border-after"><a href="../index.html#blog" class="nav-link text-white">工作機會</a></li>
          <li class="nav-item right px-2 border-after"><a href="../index.html#access" class="nav-link text-white">連絡方式與地點</a></li>
        </ul>
      </div>
    </nav>
    <div class="text-center mt-4">
      <small class="mb-5 text-white">&copy;2021 Fang-Lin Kuo</small>
    </div>

    <div class="totop">
      <i class="far fa-arrow-alt-circle-up fa-3x"></i>
    </div>
  </footer>



  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>
