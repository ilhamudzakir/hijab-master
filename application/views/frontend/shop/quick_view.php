<div class="product-details-area">
		<div class="col-md-12">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5">
					<div class="single-pro-tab">
					  <!-- Tab panes -->
					  <div class="tab-content">
					  <?php $no=0; foreach ($detail->image as $key) {
					  	$no++;
						
						?>
						<div role="tabpanel" class="tab-pane <?php if($no==1){ echo"active"; } ?>" id="home<?php echo $no ?>">
							<img class="zoom_01" src="assets/uploads/product/<?php echo $detail->id ?>/<?php echo $key->photo ?>" data-zoom-image="assets/uploads/product/<?php echo $detail->id ?>/<?php echo $key->photo ?>" alt=""/></div>
						
						<?php } ?>
					  </div>
					 
					  <!-- Nav tabs -->
					  <ul class="pro-show-tab " role="tablist">
					  <?php $no=0; foreach ($detail->image as $key) {
								$no++;
								?>
						<li role="presentation" class="<?php if($no==1) echo"active"; ?>"><a href="#home<?php echo $no ?>" aria-controls="<?php echo $no ?>" role="tab" data-toggle="tab">
							<img src="assets/uploads/product/<?php echo $detail->id ?>/<?php echo $key->photo ?>" alt=""/></a>
						</li>
						<?php } ?>
					  </ul>
					</div>	
				</div>
				<div class=" col-lg-7 col-md-7 col-sm-7">
				<form id="form-product-detail" method="post" action="cart/add_to_cart" enctype="multipart/form-data">
					<div class="product-details pro-right fashion">
						<h1><?php echo $detail->name_product?></h1>
						<div class="price-star">
							
							<label> Product code : <?php echo $detail->id?> </label>
							<input type="hidden" name="id_product" value="<?php echo $detail->id ?>">
							<div class="price fix">
								<div class="low-price special-price floatleft">
									<h4><span><?php echo $detail->price?></span></h4>
								</div>
								<div class="availability floatright">
									<label>Availability:</label> <span id="availability" class="stock"><?php echo $detail->stock; ?></span>
								</div>
							</div>
						</div>
						<div class="product-size">
										
								<div class="input-box">
									<h4>Color <span>*</span></h4>							
									<select id="select-color" name="color">
										<?php foreach ($detail->color->result() as $list_color) { ?>
										<option value="<?php echo $list_color->color_id?>" selected><?php echo $list_color->color->name?></option>
										<?php } ?>
									</select>							
								</div>
								<div class="input-box">
									<h4>Size <span>*</span></h4>
									<div class="input-box">
									
										<select id="select-size" name="size">
										<?php foreach ($detail->size->result() as $list_size) { ?>
											<option value="<?php echo $list_size->size_id;?>"><?php echo $list_size->size->name.' ('.$list_size->stock.' Left)'?></option>
										<?php } ?>
										</select>								
									</div>
									
								</div>				
						</div>

						<div class="actions">
							<div class="plus-minus">
								<div class="quantity detail-plus-minus">
									<input class="text" name="qty" type="text" value="<?php echo $detail->default_qty ?>"/>
								</div>							
							</div>	
							<button type="submit" class="btn">Add To Cart</button>
							<ul class="add-to-link">
<!--								<li><a data-toggle="tooltip" title="Quick View" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>-->
<!--								<li><a data-toggle="tooltip" title="Add to Compare" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>-->
							<li></a><?php echo $detail->wishlist_true ?></li>
							</ul>
						</div>
						<p class="msg-status red"></p>
					</div>	
					</form>
				</div>
			</div>
		</div>
	</div>