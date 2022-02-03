				<form  action="./_set.update.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="hidden" name="settype" value="local">
				<?php if($vid){?>
				<input type="hidden" name="edit" value="w">
				<input type="hidden" name="eid" value="<?php echo $vid;?>">
				<?php }?>
				<div class="setup-default">
					<div class="">
						<div class="float-left w-100 mb-10 pb-10 border-bottom main-c-switcher">
							<h5 class=" ">메인 컬러</h5>
							<?php foreach($colored as $named=>$ccode){?>
							<a class="cursor-pointer <?php echo $named;?> colorc <?php if($vcolor==$ccode) echo 'border border-dark border-3';?>" id="c<?php echo $named;?>" data-color="<?php echo $ccode;?>" data-colorid="<?php echo $named;?>"></a>
							<?php }?>
						</div>
					</div>

					<div class="mb-10  border-bottom">
						<div class="row">
							<div class="col-sm-12 pb-10">
								<h5>로고 (테마 내 images/logo 폴더)</h5>
								<div class=" logo-preview text-center">
								</div>
								<div class="w-100">
									<select name="content[]" id="logoed" class="form-control rounded-0 border">
									<?php imgselect('images/logo',$vlogo);?>
									</select>
								</div>
							</div>
							
						</div>
					</div>

					

					<div class="mb-10  border-bottom">
						<div class="row">
							<div class="col-sm-6 pb-10">
								<h5>상단전화번호</h5>
								<div class="">
									<input type="text" class="form-control rounded-0 w-100 border text-dark" name="content[]" value="<?php echo $vtel;?>">
								</div>
							</div>
							<div class="col-sm-6 pb-10">
								<h5>상단메일</h5>
								<div class="">
									<input type="text" class="form-control rounded-0 w-100 border text-dark" name="content[]" value="<?php echo $vmail;?>">
								</div>
							</div>
						</div>
					</div>


					<div class="mb-10  border-bottom">
						<div class="row">
							<div class="col-sm-3 pb-10">
								<h5>페이스북</h5>
								<div class="">
									<input type="text" class="form-control rounded-0 w-100 border text-dark" name="content[]" value="<?php echo $vsns_f;?>">
								</div>
							</div>
							<div class="col-sm-3 pb-10">
								<h5>인스타그램</h5>
								<div class="">
									<input type="text" class="form-control rounded-0 w-100 border text-dark" name="content[]" value="<?php echo $vsns_i;?>">
								</div>
							</div>
							<div class="col-sm-3 pb-10">
								<h5>트위터</h5>
								<div class="">
									<input type="text" class="form-control rounded-0 w-100 border text-dark" name="content[]" value="<?php echo $vsns_t;?>">
								</div>
							</div>
							<div class="col-sm-3 pb-10">
								<h5>유튜브</h5>
								<div class="">
									<input type="text" class="form-control rounded-0 w-100 border text-dark" name="content[]" value="<?php echo $vsns_y?>">
								</div>
							</div>
						</div>
					</div>

					<div class="mb-10  border-bottom">
						<div class="row">
							<div class="col-sm-12 pb-10">
								<h5>프리로딩 (로딩시 로고)</h5>
								<div class="w-100">
									<input type="checkbox" value="on" name="content[]" <?php if($vloading) echo 'checked';?>>
								</div>
							</div>
						</div>
					</div>

					<div class="text-center mt-5">
						<button type="submit" class="btn btn-small dark-border font-normal w-100 mchu">설정</button>
					</div>
				</div>
				</form>
<script>
jQuery( document ).ready(function( $ ) {
	var logoed = $("#logoed option:selected").val();
	$('.logo-preview').html('<div class=" bg-dark-o-20 p-3"><img src="' + logoed + '" class=h-50px alt="" /></div>');
	$('#logoed').on('change', function() {
		var logoed = $("#logoed option:selected").val();
		$('.logo-preview').html('<div class=" bg-dark-o-20 p-3"><img src="' + logoed + '" class=h-50px alt="" /></div>');
	});
	var darklogoed = $("#darklogoed option:selected").val();
	$('.dark-logo-preview').html('<div class=" bg-dark-o-20 p-3"><img src="' + darklogoed + '" class=h-50px alt="" /></div>');
	$('#darklogoed').on('change', function() {
		var darklogoed = $("#darklogoed option:selected").val();
		$('.dark-logo-preview').html('<div class=" bg-dark-o-20 p-3"><img src="' + darklogoed + '" class=h-50px alt="" /></div>');
	});

	$('.colorc').hover(function(){
		$(this).css("border","3px solid #000");
	}, function(){
	  $(this).css("border", "0px");
	});
});
</script>