<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#btnUpload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : '/biblioteca/javascript/jquery/upload/uploadify.v3.2.1/uploadify.swf',
				'uploader' : 'index.php/upload/upload',
				'buttonImage': '/biblioteca/layout/imagens/btnAnexar.gif',
				'fileTypeExts'	 : '*.csv',
				'fileTypeDesc' : 'Arquivos csv',
				//'fileSizeLimit':'50000KB',
				'auto':true,
				'multi': true,
				//'hideButton': true,
				'width'    : 122,
				'height'   : 23
			});
		});
	</script>
