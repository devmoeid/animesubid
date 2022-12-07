<?php
function getSearch($url) {
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  return json_decode($response, true);
}
$query = $_GET['s'];

$url = "https://scraping-2wepigvexa-et.a.run.app/api/ssearch/$query";
    $response = getSearch($url);
    
    $komik_list = $response['data'];
    $len = count($komik_list);

    if ($len > 0): ?>
<div class="row" id="manga-list">
  <div class="col-md-12">
    <hr>
    <h2 class="text-center"> Hasil Pencarian: </h3>
    <hr>
  </div>
  <?php foreach ($komik_list as $value):
  $thumb = $value['thumbnail'];
  $title = $value['title'];
  $endpoint = $value['id'];
  ?>
  <div class="col-md-3">
    <div class="card mb-3" style="width: auto;">
      <img src=<?php echo $thumb ?> class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><?php echo $title ?></h5>
        <a class="btn btn-dark btn-sm btn-block see-detail" href="/anime/<?php echo $endpoint ?>"><?php echo $title ?></a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php else :
// echo "<script>alert('Manga tidak ditemukan!')</script>";
endif; ?>