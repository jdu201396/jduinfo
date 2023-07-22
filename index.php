<?php require('header.php'); ?>

  <div class="searchbar">
    <form action="./catch.php" method="get">
      <div class="row">
        <input type="text" id="search-box" placeholder="TALABANING ID RAQAMI" name="student-id">
        <button type="submit">
          <img src="./src/search.svg" style="">
        </button>
      </div>
    </form>
  </div>

  <div class="university__container">
    <div class="university__rectors">
      <img src="./src/tokyo_rector.png" title="Prof. Yoichi Muraoka President of Tokyo Online University" alt="image of Prof. Yoichi Muraoka President of Tokyo Online University">
      <img src="./src/otemae_rector.png" title="Prof. HIRANO Mitsutoshi President of Otemae University" alt="image of Prof. HIRANO Mitsutoshi President of Otemae University">
      <img src="./src/jdu_rector.png" title="Ravshanbek Mamajonov President of Japan Digital University" alt="image of Ravshanbek Mamajonov President of Japan Digital University">
      <img src="./src/sanno_rector.png" title="Shunichi Ueno President of SANNO University" alt="image of Shunichi Ueno President of SANNO University">
      <img src="./src/niigata_rector.png" title="Prof.  President of Niigata Sangyou University" alt="image of Prof.  President of Niigata Sangyou University">
    </div>
    <div class="university__list">
      <div class="university__logos">
        <a href="https://www.internet.ac.jp/lang/english/"><img src="./src/tokyo_logo.svg" alt="Tokyo Online University"></a>
        <a href="https://www.otemae.ac.jp/english/"><img src="./src/otemae_logo.svg" alt="Tokyo Online University"></a>
        <a href="https://jdu.uz/" id="jdu_logo"><img src="./src/jdu_logo.svg" alt="Tokyo Online University"></a>
        <a href="https://www.sanno.ac.jp/english/"><img src="./src/sanno_logo.svg" alt="Tokyo Online University"></a>
        <a href="https://www.nsu.ac.jp/language/english/"><img src="./src/niigata_logo.svg" alt="Tokyo Online University"></a>
      </div>
    </div>
    
  </div>

  <script src="./script.js"></script>
<?php require('./footer.php'); ?>