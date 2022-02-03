				<form  action="./_set.update.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="hidden" name="settype" value="partner">
				<input type="hidden" name="position" value="index">
				<div class="partner">
					<div class="row">
						<div class="col-sm-4 mb-5">
							<label>이미지 (테마 내 images/partner 폴더)</label>
							<select class="form-control rounded-0 w-100  border text-dark" name="content[]">
							<?php imgselect('images/partner','');?>
							</select>
						</div>
						<div class="col-sm-4 mb-5">
							<label>제목</label>
							<input type="text" class="form-control rounded-0 w-100  border text-dark" name="content[]">
						</div>
						<div class="col-sm-4 mb-5">
							<label>링크 (http:// 포함)</label>
							<input type="text" class="form-control rounded-0 w-100  border text-dark" name="content[]">
						</div>
					</div>
					<div class="mt-5">
						<button type="submit" class="vbtn vbtn-danger vbtn-square w-100   font-14px mchu">추가</button>
					</div>
				</div>
				</form>

				<div class="mt-5">

					<?php 
					$sql = "select * from snw_theme where theme_code = '$theme_code' and theme_type = 'partner' order by theme_order asc ";
					$result = sql_query($sql);

					for($i=0; $row = sql_fetch_array($result); $i++){
						$mcontent = explode("|", $row['theme_content']);
				?>
						<form  action="./_set.update.php" method="post" enctype="multipart/form-data" autocomplete="off">
						<input type="hidden" name="settype" value="partner">
						<input type="hidden" name="position" value="index">
						<input type="hidden" name="edit" value="w">
						<input type="hidden" name="eid" value="<?php echo $row['id'];?>">
						<div class="row mb-5 pb-5 border-bottom">
							<div class="col-sm-3">
								<div class="text-center mb-3 pt-3">
									<img src="<?php echo $mcontent[0];?>" class="h-20px">
								</div>
								
							</div>
							<div class="col-sm-3">
								<select class="form-control rounded-0 w-100  border text-dark" name="content[]">
									<?php imgselect('images/partner',$mcontent[0]);?>
								</select>
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control rounded-0 w-100  border text-dark" name="content[]" value="<?php echo $mcontent[1];?>">
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control rounded-0 w-100  border text-dark" name="content[]" value="<?php echo $mcontent[2];?>">
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control rounded-0 w-100  border text-dark" name="theme_order" value="<?php echo $row['theme_order'];?>">
							</div>

							<div class="col-sm-12 text-center mt-3">
								<button type="submit" class="vbtn vbtn-xs vbtn-primary vbtn-square mt-2 ">변경</button>
								<a href="<?php echo G5_THEME_URL;?>/_set.update.php?slink=<?php echo $slink?>&del=ok&id=<?php echo $row['id'];?>" class="vbtn vbtn-xs vbtn-danger vbtn-square mt-2 w-50px">삭제</a>
							</div>
						</div>
						</form>
					<?php }?>
					</tbody>
				</table>
			</div>