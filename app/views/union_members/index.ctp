    <?php echo $html->script(array('jquery')); ?>
    <?php
		$paginator->options(array(
			'update' => '#content', 
			'evalScripts' => true,
			'before' => $js->get('#content')->effect('fadeOut', array('buffer' => false)),
			'success' => $js->get('#content')->effect('fadeIn', array('buffer' => false))
		)); 
		
	?>
	<div class="content-box">
	<div class="box-body">
	<div class="box-header clear">
	<ul class="tabs clear">
		<li><a href="#d">Xuất Excel</a></li>
		<li><a href="qldv-form.html">Thêm</a></li>
		<li><a href="qldv-Xoa.html">Xóa</a></li>
		<li><a href="qldv-ChuyenTrangThai.html">Chuyển trạng thái</a></li>
	</ul>
	
	<h2>Quản lý đoàn viên</h2>
	</div>
	
	<div class="box-wrap clear"><!-- TABLE -->
	<div id="table">
	<div class="bt-space10"><select>
		<option value="1" selected="selected">Hệ thống thông tin 02</option>
		<option value="1">Công nghệ phần mềm 02</option>
		<option value="1">Cử nhân tài năng 02</option>
		<option value="1">Khoa học máy tính 02</option>
		<option value="1">Mạng máy tính và truyền thông 02</option>
	</select></div>
	
	<form method="post" action="#">
	<table class="style1">
		<thead>
			<tr>
				<th><input type="checkbox" class="checkbox select-all" /></th>
				<th>MSSV</th>
				<th>Họ tên</th>
				<th>Chức vụ</th>
				<th>Phái</th>
				<th>Ngày sinh</th>
				<th>Trạng thái</th>
				<th>Quản lý</th>
			</tr>
		</thead>
	
		<tbody>
			<?php foreach ($members as $member) {
			?>
			<tr>
				<td><input type="checkbox" class="checkbox" /></td>
				<td><a href="qldv - TTDoanVien.html"><?php echo $member['UnionMember']['id'] ?></a></td>
				<td><?php echo $member['UnionMember']['name'] ?></td>
				<td><?php echo $member['Position']['position'] ?></td>
				<td><?php echo $member['UnionMemberDetail']['sex'] ?></td>
				<td><?php echo $member['UnionMemberDetail']['birthday'] ?></td>
				<td><?php echo $member['Status']['status'] ?></td>
				<td><a href="qldv-form.html"><img src="img/admin/ico_edit_16.png"
					class="icon16 fl-space2" alt="" title="edit" /></a> <a href="#"><img
					src="img/admin/ico_delete_16.png" class="icon16 fl-space2" alt=""
					title="delete" /></a> <a href="#"><img
					src="img/admin/ico_settings_16.png" class="icon16 fl-space2" alt=""
					title="settings" /></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<div class="tab-footer clear">
	<div class="fl"><select name="dropdown" class="fl-space">
		<option value="option1">Thao tác...</option>
		<option value="option2">Chuyển trạng thái</option>
		<option value="option3">Xóa</option>
	</select> <input type="submit" value="Đồng ý" id="submit2"
		class="button fl-space" /></div>
	<?php echo $this->element('paginator'); ?>
	
	</div>
	</form>
	</div>
	<!-- /#table --></div>
	<!-- end of box-wrap --></div>
	<!-- end of box-body --></div>
	<!-- end of content-box -->
	
<?php echo $js->writeBuffer(); ?>