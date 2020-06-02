<div class="container">
	<div class="row">
	    <div class="col-sm-8">
	    <h1 class="title-box-post">New Post</h1>
	     <div class="box-new-post">
	     	<div class="container">
		     	<form method="post" action="<?=base_url('Auth/addpost')?>" enctype="multipart/form-data">
		     		<div class="form-group">
			     		<input type="hidden" name="user_id" id="user_id" value="<?=$user['user_id']?>">
		     		</div>
		     		<div class="form-group">
			     		<label for="tema">Tema</label><br>
			     		<input class="form-post" type="text" name="tema" id="tema" value="<?=set_value('tema')?>">
			     		<small class="text-danger"><?=form_error('tema') ?></small>
		     		</div>
		     		<div class="form-group">
			     		<label for="judul">Judul</label><br>
			     		<input class="form-post" type="text" name="judul" id="judul" value="<?=set_value('judul')?>">
			     		<small class="text-danger"><?=form_error('judul') ?></small>
		     		</div>
		     		<div class="form-group">
			     		<labe for="isipuisi">Isi</label><br>
			     		<textarea class="form-post" name="isipuisi" id="isipuisi"></textarea>
		     		</div>
		     		<button type ="submit" class="btn btn-warning btn-add-post"><img class="ic-post" src="<?=base_url()?>/assets/img/send.png"></button>
		     	</form>
	     	</div>
	     </div>
	    </div>
	    <div class="col-sm-4">
	      
	      	<div class="box-ac-newpost">
	      		<div class="container">
		      		<center><h1 class="teks-ac-newpost">Your Account</h1></center>
		      		<table>
				    	<tr>
				    		<td>
				    			Full Name
				    		</td>
				    		<td class="td-profile"> 
				    			<center>:</center>
				    		</td>
				    		<td>
				    			<?=$user['name']?>
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Email
				    		</td>
				    		<td class="td-profile"> 
				    			<center>:</center>
				    		</td>
				    		<td>
				    			<?=$user['email']?>
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Birth Date
				    		</td>
				    		<td class="td-profile"> 
				    			<center>:</center>
				    		</td>
				    		<td>
				    			<?=date('d F Y', strtotime($user['birth_date']));?>
				    		</td>
				    	</tr>
				    </table>
			    </div>
	      	</div>
	     
	    </div>	
  </div>
</div>

<script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js"> </script>

<script type="text/javascript">
  tinyMCE.init({
     // General options
     mode : "textareas",
    // theme : "advanced",
  });
</script>