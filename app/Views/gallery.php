<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style>
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }
  html, body {
    background: #fff;
    padding: 0px;
  }
  img {
    max-width: 100%;
    height: auto;
    vertical-align: middle;
    display: inline-block;
  }
  .grid-warpper > div {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .grid-wrapper > div > img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 5px;
  }
  .grid-wrapper{
    display: grid;
    grid-gap: 10px;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-auto-rows: 200px;
    grid-auto-flow: dense;
  }
  .grid-wrapper .wide {
    grid-column: span 2;
  }
  .grid-wrapper .tall {
    grid-row: span 2;
  }
  .grid-wrapper .big {
    grid-column: span 2;
    grid-row: span 2;
  }
</style>
  
  <a href="<?= base_url('/home/tambah_f/')?>"><button class="btn btn-success">Upload</button></a>
<body>
  <div class="grid-wrapper">
    <!-- <div class="img">  -->
    <div>
      <img src="<?= base_url('images/prewed.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/2.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/4.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/5.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/6.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/7.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/8.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/9.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/10.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/11.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/12.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/13.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/14.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/15.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/16.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/17.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/18.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/19.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/20.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/21.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/22.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/23.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/24.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/25.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/26.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/27.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/28.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/29.jpg') ?>">
    </div>
    <div>
      <img src="<?= base_url('images/30.jpg') ?>">
    </div>
  </div>
</body>
</html>