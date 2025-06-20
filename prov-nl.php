<?php
$base = __DIR__;
define("TITLE", "Daten in");
include $base . '/includes/arr_prov_nl.php';
require_once $base . '/includes/utils.php';
	
$provnl = null;
if(isset($_GET['item'])) {
        $provincie = strip_bad_chars( $_GET['item'] );
        $provincie = preg_replace('/^sexdate-/', '', $provincie);
        $provincie = preg_replace('/-nl$/', '', $provincie);
        if (isset($nl[$provincie])) {
                $provnl = $nl[$provincie];
        }
}

if (!$provnl) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        include $base . '/404.php';
        exit;
}

$metaDescription = $provnl['info'];
include $base . '/includes/header.php';
?>
	
<div class="container">
	<div class="jumbotron my-4">
        <h1 class="text-center"><?php echo $provnl['title']; ?></h1>
        <hr>
        <p><?php echo $provnl['info']; ?></p>
    </div>
    <div class="row" v-cloak>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" id="Slankie" v-for="profile in filtered_profiles">
        <div class="card h-100">
            <a :href="'profile.php?country=nl&id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="profile.name + ' daten in Flevoland'" @error="imgError"></a>
            <div class="card-body">
            	<div class="card-top">
                  <h4 class="card-title">{{ profile.name }}</h4>  
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                    <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                    <li class="list-group-item">Stad: {{ profile.city }}</li>
                    <li class="list-group-item">Provincie: {{ profile.province }}</li>
                </ul>
            </div>
            <a :href="'profile.php?country=nl&id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a></div>
        </div>
        <script>
            var api_url= "<?= api_base('nl'); ?>/profile/province_age/nl/<?= rawurlencode($provnl['name']); ?>/45/99/120/S";
        </script>
    </div><!-- /.row -->
    <!-- Pagination -->
    <nav class="nav-pag" aria-label="Page navigation">
        <ul class="pagination flex-wrap justify-content-center">
            <li class="page-item">
                <a class="page-link" aria-label="Vorige" v-on:click="set_page_number(page-1)" ><span aria-hidden="true">&laquo;</span><span class="sr-only">Vorige</span></a>
            </li>
            <li v-for="page_number in max_page_number"  class="page-item" v-bind:class="{ active: page_number == page }" >
                <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
            </li>
            <li class="page-item">
                <a class="page-link" aria-label="Volgende" v-on:click="set_page_number(page+1)" ><span aria-hidden="true">&raquo;</span><span class="sr-only">Volgende</span></a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div id="footer-banner"></div>
        <div class="jumbotron">
            <?php echo $provnl['tekst']; ?>
        </div>
        <div class="jumbotron text-center">
            <a href="https://oproepjesnederland.nl/dating-<?php echo $provnl['img']; ?>" class="btn btn-primary btn-tips" target="_blank">Dating Advertenties <?php echo $provnl['name']; ?></a>
            <a href="https://sex55.net/sexdate-<?php echo $provnl['img']; ?>" class="btn btn-primary btn-tips" target="_blank">55+ Sexdate <?php echo $provnl['name']; ?></a>
            <a href="https://shemaledaten.net/shemale-<?php echo $provnl['img']; ?>" class="btn btn-primary btn-tips" target="_blank">Shemale sexdate <?php echo $provnl['name']; ?></a>
        </div>
    </div> 
  </div> <!-- container -->
<?php
	include $base . '/includes/footer.php';
?>
