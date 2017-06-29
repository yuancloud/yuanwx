<?php defined('IN_IA') or exit('Access Denied');?>	<script type="text/javascript">
		require(['bootstrap']);
		$('.js-clip').each(function(){
			util.clip(this, $(this).attr('data-url'));
		});
	</script>
	<div class="container-fluid footer" role="footer">
		<div class="page-header"></div>
		<span class="pull-left">
			<p><?php  if(empty($_W['setting']['copyright']['footerleft'])) { ?><a target="_blank" href="http://www.yuancloud.cn"><b>www.yuancloud.cn</b></a><?php  } else { ?><?php  echo $_W['setting']['copyright']['footerleft'];?><?php  } ?></p>
		</span>
		<span class="pull-right">
			<p><?php  if(empty($_W['setting']['copyright']['footerright'])) { ?><a href="http://www.yuancloud.cn" target="_blank"><b>专注中小企业信息化和互联网+</b></a><?php  } else { ?><?php  echo $_W['setting']['copyright']['footerright'];?><?php  } ?><?php  if(!empty($_W['setting']['copyright']['statcode'])) { ?>&nbsp; &nbsp; <?php  echo $_W['setting']['copyright']['statcode'];?><?php  } ?></p>
		</span>
	</div>
	<?php  if(!empty($_W['setting']['copyright']['statcode'])) { ?><?php  echo $_W['setting']['copyright']['statcode'];?><?php  } ?>
</body>
</html>
