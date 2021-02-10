<!-- PC、SPメインイメージ取得-->
<?php
$PC_PATH = get_field('main_image_pc');
$SP_PATH = get_field('main_image_sp');
?>

<!-- resizeイベントでpc sp画像切り替え-->
<script>
let $main_image= "";
let PC_PATH= ""; 
let SP_PATH= ""; 
	
document.addEventListener('DOMContentLoaded', function(){
         $main_image = document.querySelector('.area-img');
         PC_PATH = "<?php echo $PC_PATH; ?>";
         SP_PATH =  "<?php echo $SP_PATH; ?>";
		 setBgImage();
});

window.addEventListener( 'resize', function() {
	setBgImage();
}, false );
	
function setBgImage(){
	let w = window.innerWidth;
	if(w < 768){
		$main_image.style.backgroundImage = "url( " + SP_PATH + ")";
	} else {
		$main_image.style.backgroundImage = "url( " + PC_PATH + " )";
	}
}
</script>