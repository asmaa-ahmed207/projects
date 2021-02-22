$(document).ready(function(){
		// when the user clicks on like
		$('.like').on('click', function(){
			var post_id = $(this).attr('id');
			// alert("aaaaaaaaaaaaaaa" + post_id);
			$.ajax({
              url: 'posts.php',
			  type: 'post',
              async: false ,
               data : {
               	'liked' : 1 ,
               	'post_id' : post_id
               },
               success : function(response){
                 $post.parent().find('span.likes_count').text(response + " likes");
					$post.addClass('hide');
					$post.siblings().removeClass('hide');
               }

			});

		});
			// when the user clicks on unlike
		$('.unlike').on('click', function(){
			var post_id = $(this).attr('id');
		    $post = $(this);

			$.ajax({
				url: 'posts.php',
				type: 'post',
				data: {
					'unliked': 1,
					'post_id': post_id
				},
				success: function(response){
				$post.parent().find('span.likes_count').text(response + " likes");
					$post.addClass('hide');
					$post.siblings().removeClass('hide');
				}
			});
		});
	});