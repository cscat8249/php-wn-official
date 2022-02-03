				<form  action="./_set.update.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="hidden" name="settype" value="mslider">
				<input type="hidden" name="position" value="index">
				<div class="mslider">
					<div class="mb-5">
						<label for="atype" class="mr-5">
							<input type="radio" name="typed" id="atype" value="a" checked>
							<span class="">백그라운드 유튜브 타입</span>
						</label>
						<label for="btype" class="mr-5">
							<input type="radio" name="typed" id="btype" value="b">
							<span class="">백그라운드 이미지 타입</span>
						</label>
					</div>
					<div class="row">
						<div class="col-sm-6 mb-5">
							<label>유튜브 주소</label>
							<input type="text" class="form-control rounded-0 content w-100 border text-dark at  " name="content[]">
						</div>
						<div class="col-sm-6 mb-5">
							<label>이미지 주소 (테마 내 images/bg 폴더, 이미지 크기 가로 500px 최적)</label>
							<select class="form-control rounded-0 content bt w-100 border text-dark" name="content[]">
								<option value="">선택</option>
								<?php imgselect('images/bg','');?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 mb-5">
							<label>텍스트</label>
							<input type="text" class="form-control rounded-0 content  at bt  w-100  border text-dark" name="content[]">
						</div>
						<div class="col-sm-6 mb-5">
							<label>서브텍스트</label>
							<input type="text" class="form-control rounded-0 content  at bt w-100   border text-dark" name="content[]">
						</div>
						<div class="col-sm-6 mb-5">
							<label>버튼</label>
							<input type="text" class="form-control rounded-0 content  at bt w-100 border text-dark" name="content[]">
						</div>
						<div class="col-sm-6 mb-5">
							<label>버튼 링크</label>
							<input type="text" class="form-control rounded-0 content at bt w-100   border text-dark" name="content[]">
						</div>

					</div>
					<div class="mt-5">
						<button type="submit" class="vbtn vbtn-danger vbtn-square w-100   font-14px mchu">추가</button>
					</div>

				</div>
				</form>

				<div class="float-left mt-5 w-100">
					<div class="">

								<?php
								$sql = "select * from snw_theme where theme_code = '$theme_code' and theme_type = 'mslider' order by id asc ";
								$result = sql_query($sql);

								for($i=0; $row = sql_fetch_array($result); $i++){
									$mcontent = explode("|", $row['theme_content']);
									if($row['theme_type2']=='a') $typetitle = '백그라운드영상';
									if($row['theme_type2']=='b') $typetitle = '이미지타입';

							?>
								<div class="pb-10 mb-10 border-bottom">
									<form  action="./_set.update.php" method="post" enctype="multipart/form-data" autocomplete="off">
									<input type="hidden" name="settype" value="mslider">
									<input type="hidden" name="position" value="index">
									<input type="hidden" name="edit" value="w">
									<input type="hidden" name="eid" value="<?php echo $row['id'];?>">
									<input type="hidden" name="typed" value="<?php echo $row['theme_type2'];?>">

									<div class="row">
										<div class="col-sm-4">
											<label class="">
												<?php echo $i+1;?>. <?php echo $typetitle;?>
											</label>
											<?php if($row['theme_type2']=='a'){?>
											<input type="text" class="form-control w-100 rounded-0 border text-dark" name="content[]" value="<?php echo $mcontent[0];?>">
											<input type="hidden" class="form-control w-100 rounded-0 border text-dark" name="content[]">
											<?php }?>
											<?php if($row['theme_type2']=='b'){?>
											<input type="hidden" class="form-control w-100 rounded-0 border text-dark" name="content[]">
											<select class="form-control rounded-0 w-100  border text-dark" name="content[]">
												<?php imgselect('images/bg',$mcontent[1]);?>
											</select>
											<?php }?>
										</div>


										<div class="col-sm-4">
											<label class="">
												텍스트
											</label>
											<input type="text" class="form-control rounded-0 w-100  border text-dark" name="content[]" value="<?php echo htmlspecialchars($mcontent[2]);?>">
										</div>

										<div class="col-sm-4">
											<label class="">
												서브 텍스트 (하단)
											</label>
											<input type="text" class="form-control rounded-0 w-100  border text-dark" name="content[]" value="<?php echo htmlspecialchars($mcontent[3]);?>">
										</div>
									</div>
									<div class="row  mt-3">
										<div class="col-sm-4">
											<label class="">
												버튼이름
											</label>
											<input type="text" class="form-control rounded-0 w-100  border text-dark" name="content[]" value="<?php echo htmlspecialchars($mcontent[4]);?>">
										</div>

										<div class="col-sm-4">
											<label class="">
												버튼 URL
											</label>
											<input type="text" class="form-control rounded-0 w-100  border text-dark" name="content[]" value="<?php echo htmlspecialchars($mcontent[5]);?>">
										</div>
										<div class="col-sm-4">
											<label class="">
												순서
											</label>
											<input type="text" name="theme_order" value="<?php echo $row['theme_order'];?>" class="form-control rounded-0 w-100  border form-control rounded-0-xs">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 text-center mt-3">
											<button type="submit" class="vbtn vbtn-xs vbtn-primary vbtn-square mt-2 w-50px">변경</button>
											<a href="<?php echo G5_THEME_URL;?>/_set.update.php?slink=<?php echo $slink?>&del=ok&id=<?php echo $row['id'];?>" class="vbtn vbtn-xs vbtn-danger vbtn-square mt-2 w-50px">삭제</a>
										</div>

									</div>
									</form>
								</div>
							<?php }?>

					</div>
				</div>
<script>

//$('section.sub-banner').hide();
$(".content").attr("disabled",true);
$(".at").removeAttr("disabled",true);
$('input[type=radio][name=typed]').change(function() {
    if (this.value == 'a') {
        $(".content").attr("disabled",true);
		$(".at").removeAttr("disabled",true);
    }
    else if (this.value == 'b') {
        $(".content").attr("disabled",true);
		$(".bt").removeAttr("disabled",true);
    }
	else if (this.value == 'c') {
        $(".content").attr("disabled",true);
		$(".ct").removeAttr("disabled",true);
    }
});
$('.mchu').click(function(){
	$(".content").removeAttr("disabled",true);
});
</script>