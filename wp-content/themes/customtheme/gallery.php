<?php /* Template Name: Photo Gallery */ ?>

<?php include "header.php"; ?>

<div class = "container">
	<div class = "row">
		<div class = "col-md-1"></div>
		<div class = "col-md-10" id = "content">
			<div class = "row">
				<div class="col-md-12">
					<h2>Photo Gallery</h2><br/>
					
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/11.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/12.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/3.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/4.jpg"/></a>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/15.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/16.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/7.gif"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/8.jpg"/></a>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/9.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/10.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/21.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/111.jpg"/></a>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/13.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/14.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/5.jpg"/></a>
						</div>
						<div class="col-xs-6 col-md-3">
							<a href="" class="thumbnail"><img class="lightbox" src="http://multipsolar.com/wp-content/uploads/2014/09/16.jpg"/></a>
						</div>
					</div>
					
					
				</div>
			</div>	
		</div>
		<div class = "col-md-1"></div>
	</div>
</div>

<?php include "bottom-widget.php" ?>
<?php include "footer.php"; ?>

<div id = "photo_feed"></div>

<script type = "text/javascript">
	$(document).ready(function(){
		$('.lightbox').click(function(){
			var img = $(this).attr('src');
			$('#photo_feed').hide().fadeIn().html('<span><a href = "" id = "close">Close</a></span><br/><img src = "' + img+ '">');
			
			$('#close').click(function(){
				$('#photo_feed').hide();
			});
			
			return false;
		});
		
	});
</script>