<?php 
session_start(); 
include_once("functions/config.php");  
$page = 'product';
if(isset($_COOKIE[$cookie_name])){   
   include_once("functions/inc.php");
}else{ 
	include_once("functions/inc.php");
}
if(isset($_GET['productid'])) {
		 $productSlug = mysqli_real_escape_string($db, $_GET['productid']);
		 $productData = $Dot->Dot_GetProductDetails($productSlug);
		 $postMetaTitle = isset($productData['m_product_name']) ? $productData['m_product_name'] : NULL;
		 $postMetaDescription = isset($productData['m_product_description']) ? $productData['m_product_description'] : NULL; 
		 $postProductCategory = $productData['product_category'];
		 $postProductPrice = $productData['product_normal_price'];
		 $productImage = $productData['product_images'];
		 $postProductCurrency = isset($productData['product_currency']) ? $productData['product_currency'] : $theMainCurrency;
		 $postProductPlace = isset($productData['product_place']) ? $productData['product_place'] : NULL;
		 $postProductDiscountPrice = isset($productData['product_discount_price']) ? $productData['product_discount_price'] : NULL;
		 $postProductID = $productData['user_post_id'];
		  
}
include("contents/header.php");
?> 
<div class="section" id="prdct" data-id="<?php echo $postProductID;?>">
<div class="main">
 <div class="container">
      <!--MIDDLE STARTED-->
      <div class="cGcGK">  
			<div id="new_posts">
				<!--Edit product STARTED-->
				<div class="zMhqu white_bg">
				    <div class="editPHeader"><?php echo $page_Lang['edit_product'][$dataUserPageLanguage];?></div>
					<div class="productEditDetails">
						<div class="o_product_editg_text">Product title</div>
						<div class="global_post_box">
							<input type="text" class="product_edit_title" id="title" style="border-bottom:1px solid #eaeaea;" placeholder="Title" value="<?php echo $postMetaTitle;?>">
						</div>
						<div class="o_product_editg_text">Product Description</div>
						<div class="global_post_box">
							<textarea class="description" id="details" placeholder="Your text here" style="overflow: hidden; word-wrap: break-word; height: 80px; border-bottom:1px solid #eaeaea;"><?php echo $postMetaDescription;?></textarea>
						</div>
						<div class="o_product_editg_text">Product Category</div>
						<div class="global_post_box">
							<div class="input-field col s12">
								<select id="ctgry" class="currency">
								<option value="" disabled selected>Choose Category</option>
								<?php 
									if($MarketPlaceCategories){
											foreach($MarketPlaceCategories as $mCategori){
												$cateGoryID  = $mCategori['m_category_id'];
												$cateGoryKey = $mCategori['m_category_key'];
												$thisSelected = $cateGoryID == $postProductCategory ? "selected='selected'":""; 
												echo '<option value="'.$cateGoryID.'" '.$thisSelected.'>'.$page_Lang[$cateGoryKey][$dataUserPageLanguage].'</option>';
											}
									}
									?>  
								</select> 
							</div> 
						</div>
						<div class="global_post_box">
						   <input type="text" class="price_title" id="p_price" onkeyup="this.value = this.value.replace(/[A-Za-z!@#$%^&amp;*()]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Product Price" value="<?php echo $postProductPrice;?>">
						</div>
						<div class="global_post_box">
							<div class="input-field col s12">
								<select id="crncy" class="currency">
								<option value="" disabled selected>Currency</option>
									<?php   
									foreach($currencys as $value => $val) {
									$thisSelected = $value == $postProductCurrency ? "selected='selected'":"";       
									echo '<option value="'.$value.'" '.$thisSelected.'>'.$value.'('.$val.')</option>'; 
									}
								?>
								</select> 
							</div> 
						</div>
						<div class="o_product_editg_text">Address</div>
						<div class="global_post_box">
							<input type="text" class="title_prod" id="place" placeholder="Write Address" value="<?php echo $postProductPlace;?>">
						</div> 
						<div class="global_post_box">
                           <div class="add_new_product_image"> 
								<form id="uploadform" class="options-form" method="post" enctype="multipart/form-data" action="<?php echo $base_url;?>requests/upload.php">  
									<label class="labelImageUpload" for="puploadBtn"><div class="svg_btn"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#8a99a4"><path d="M143.33333,28.66667h-114.66667c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v86c0,7.91917 6.41417,14.33333 14.33333,14.33333h114.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-86c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333zM71.66667,57.33333c3.956,0 7.16667,3.21067 7.16667,7.16667c0,3.956 -3.21067,7.16667 -7.16667,7.16667c-3.956,0 -7.16667,-3.21067 -7.16667,-7.16667c0,-3.956 3.21067,-7.16667 7.16667,-7.16667zM129,121.83333h-85.84233c-2.98133,0 -4.65833,-3.43283 -2.82367,-5.7835l17.845,-22.94767c1.40467,-1.806 4.12083,-1.849 5.58283,-0.086l15.0715,18.13883l22.20233,-28.60933c1.44767,-1.8705 4.2785,-1.84183 5.6975,0.05017l25.1335,33.50417c1.77017,2.365 0.086,5.73333 -2.86667,5.73333z"></path></g></g></svg></div></label><input type="file" name="uploading[]" id="puploadBtn" data-id="pimage" class="upload_image_button" multiple="true">Add New Product Image
								</form>
						   </div>
						</div>
						<div class="global_post_box" id="uploadedNew"> 
							<?php 
							if ($productImage) {
								$s = explode(",", $productImage); // Explode the images string value
								$r = 1;
								$f = count($s);
								$TotalImage = $f - 1; 

								foreach ($s as $a) {
									// Get the uploaded image ids
									$newdata = $Dot->Dot_GetUploadImageID($a);
									if ($newdata) {
										// The path to be parsed 
										if($amazons3UploadStatus == '1'){
											$final_image = 'https://'.$amazons3UploadBucket.'.s3.'.$amazons3UploadRegion.'.amazonaws.com/images/'.$newdata['uploaded_image']; 
										 }else{
											$final_image = $base_url . "uploads/images/" . $newdata['uploaded_image'];
										 }
									   echo '<div class="post-image-preview preview_screen_image UploadedItemNew">
												<div class="preview-body" style="background-image:url('.$final_image.');" id="thepi_'.$a.'>
												    <img src="'.$final_image.'" class="img_post_uploaded pimg">
												</div>
												<div class="btn-small red delete_this_product_image" id="'.$a.'" data-type="deleteImage" style="margin:0px auto;display:block;margin-top:8px;"> 
												   '.$page_Lang['delete'][$dataUserPageLanguage].'
												</div>
											</div>';	
									}
									$r = $r + 1;
								} 
							}
							?>  
							<input type="hidden" id="uploadvalues" value="<?php echo $productImage;?>">
						</div>
						<div class="global_post_box" id="progr"></div>
						<div class="global_post_box">
						    <div class="control right_btn" style="display:inline-block;">
								<div class="share_post_box waves-effect waves-light btn blue save_p_ed" style="float:right;" data-type="productedit">
									<?php echo $page_Lang['post_share'][$dataUserPageLanguage];?>
								</div>
							</div>
						</div>
						<!--FINIsh-->
					</div>
				</div>
				<!--Edit Product FINISHED-->
			</div>    
		</div>
      <!--MIDDLE FINISHED-->
      <!--RIGHT SIDEBAR STARTED-->
      <?php 
         // These areas are the integrated states of all the boxes on the right side.
          include("contents/right_sidebar.php");
      ?>
      <!--RIGHT SIDEBAR FINISHED-->
 </div>
</div>
</div> 
<?php 
// Here is some javascript codes
include("contents/javascripts_vars.php");   
?>  
<script type="text/javascript">
$(document).ready(function() {
	$('.currency').formSelect(); 
	function sizeDescription(){
     autosize(document.querySelectorAll('textarea'));
   }
   sizeDescription(); 
   $("body").on("click",".save_p_ed", function(){
	  var type = $(this).attr("data-type");
	  var newTitle = $("#title").val();
	  var newDetail = $("#details").val();
	  var newType = $("select#crncy option").filter(":selected").val();
	  var newCategory = $("select#ctgry option").filter(":selected").val();
	  var newPrice = $("#p_price").val();
	  var newPlace = $("#place").val();
	  var newTumbnails = $("#uploadvalues").val();
	  var product = $("#prdct").attr("data-id");

	  var data = 'f='+type+'&title='+encodeURIComponent(newTitle)+'&detail='+encodeURIComponent(newDetail)+'&categories='+newCategory+'&price='+newPrice+'&place='+newPlace+'&tumbs='+encodeURIComponent(newTumbnails)+'&newCurren='+newType+'&pr='+product;

	  $.ajax({
		  type: "POST",
		  url: requestUrl + "requests/activity",
		  data: data,
		  dataType: "json",
		  cache: false,
		  beforeSend: function() {
			 $("#progr").append('<div class="prelo"><span class="progress"><span class="indeterminate"></span></span></div>');
		  },
		  success: function(response) { 
			  $(".prelo").remove();
			  var stat = response.status;
			  var resultNote = response.note;
			  var pageRedirect = response.redirect;
			  var isDone = response.done;
			   if(isDone == 'ok'){
				  alert('1');
			   }else{
			  	  M.toast({html: resultNote});
			   }
			   
			   
			  
		  }
		});
   });
   // Delete Image before post Wall
	$("body").on("click",".delete_this_product_image", function(){
		var ID = $(this).attr("id");
		var input = $('#uploadvalues');
		var type = $(this).attr("data-type");
		var data = 'image=' + ID + '&f='+type;
		$.ajax({
		  type: 'POST',
		  url: requestUrl + 'requests/activity', 
		  data: data,
		  cache: false,
		  beforeSend: function() {  },
		  success: function(response) {  
				 // After Delete
				input.val(function(_, value){
				   return value.split(',').filter(function(val){ // split the value
					 return val !== ID; // filter to return other values
				   }).join(','); // join them to create a new string.
				});
				$("#thepi_"+ID).remove(); 
		  }
		}); 
	});
	 // Uploading Music, Video and Image
	 $("body").on("change", "#puploadBtn", function(e) {
    e.preventDefault();
    var values = $("#uploadvalues").val();
	var id = $("#puploadBtn").attr("data-id");
	var data = { t: id  };
    $("#uploadform").ajaxForm({
		 type: "POST",
         data: data,
		 delegation: true,
        //target: '#uploadedNew',
		cache: false,
        beforeSubmit: function() {   
		  $('#progr').append('<div class="cssProgress"><div class="progress3"><div class="cssProgress-bar cssProgress-warning cssProgress-active"  style="" role="progressbar"></div></div><div class="cssProgress-label2 cssProgress-label2-right"></div></div>'); 
        }, uploadProgress: function(e, position, total, percentageComplete)  {
		  $('.cssProgress-bar').width(percentageComplete + '%' );
		  $('.cssProgress-label2-right').html(percentageComplete + '%'); 
		},
        success: function(response) {  
		 var codes = ["invalidmusic", "invalidvideo", "invalidimage"]; 
				  $(".cssProgress").remove();  
				  $(".newUpload").hide();  
				  $('#uploadedNew').append(response);
				  //var K = $(".UploadedItemNew:last-child").attr("id");
				  var K = $('.UploadedItemNew').map(function(){ return this.id }).toArray();
				  var T = K + "," + values;
					  if (T != "undefined,") {
						$("#uploadvalues").val(T); 
						$('.vdShr').show();
					  }
					 if ($("#puploadBtn").hasClass("upload_image_button")) { 
						$(".file_label").removeClass('disabled');
					 }  
					  
        },
        error: function() {}
      }).submit();
  });
}); 
</script> 
</body>
</html>

