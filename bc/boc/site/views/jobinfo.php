<?php include_once VIEWS.'inc/head.php'; ?>
<div align='center'><?php echo $rs['title']; ?></div>
<div align='center'>
	<table>
		<tr>
			<td><span>招聘人数:</span><?php echo $rs['amount']<1?'不限':$rs['amount']?></td>
			<td><span>招聘有效期:</span><?php echo date('Y-m-d',$rs['timeline']); ?>-<?php echo date('Y-m-d',$rs['expiretime']); ?></td>
			<td><span>招聘部门:</span><?php echo $rs['department']; ?></td>
		</tr>
		<tr>
			<td><span>工作地区:</span><?php echo $rs['place']; ?></td>
			<td><span>工作经验:</span><?php echo $rs['experience']; ?></td>
			<td><span> </span></td>
		</tr>
		<tr>
			<td colspan="3" class="txt01">
				岗位职责<br><?php echo $rs['content']; ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" class="txt01">
				任职职责<br><?php echo $rs['requirement']; ?>
			</td>
		</tr>
	</table>
	<a href="<?php echo site_url('applyonline/index/'.$rs['id']); ?>" class="btn">我要应聘</a>
</div>
<?php include_once VIEWS.'inc/footer.php'; ?>