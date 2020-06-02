  <div class="row">
    <div class="col-sm">
	    <div class="container">
	    	<br>
	    	<center><h1>Profile</h1></center>
		     <div class="box-profile">
				<center>
				  <img src="<?=base_url()?>/assets/img/external-content.duckduckgo.com.png" class="card-img-top img-card-profile" alt="...">
				 </center>
				 <div class=box-text>
				 	<center><h5 class="usrnm-profile"><?=$user['username'] ?></h5></center>
					 <div class="container">
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
					    <br><br>
					    <div class="container">
					    	<div class="row-profile">
					    		<center>
					    			<form action="<?=base_url('Auth/newpost')?>">
					    				<button class="btn btn-primary button-profile">Post</button>
					    			</form>
					    			<form>
					    				<button class="btn btn-warning button-profile">Edit Profile</button>
					    			</form>
					    			<form>
					    				<button class="btn btn-danger button-profile">Delete Account</button>
					    			</form>
					    			<form action="<?=base_url('Home/logout')?>">
					    				<button class="btn btn-secondary button-profile">Logout</button>
					    			</form>
				    			</center>
					    	</div>
					    </div>
				  </div>
			 </div>
		</div>
	</div>
</div>
    <div class="col-sm bg-post">
     <div class="content-row">
     	<br>
	    	<center><h1>Post</h1></center>
	        <div class="row m-4 masonry" data-target=.item data-col-sm="12" data-col-md="6" data-col-lg="3">
	            <div class="col-sm-12 col-md-6 customPadding">
	                <div class="card item flex-fill">
	                    <div class="card-header bg-card">
	                        <a href="#" class="text-white">Fauzul Ichwan</a>
	                    </div>
	                    <div class="card-body">
	                        <h5 class="card-title text-center">Time</h5>
	                        <p class="card-text text-center">Tick tock...tick tock... <br>
	                            Life is counting down on your internal clock. <br>
	                            Memories that feel as if they occurred yesterday turn to flashes of moments that seem to fade away.</p>
	                        <div class="d-flex justify-content-start">
	                            <a href="#">#classic</a>
	                            <a href="#">#nature</a>
	                        </div>
	                        <a class="d-flex justify-content-end" href="#"><img src="icons8-love-50.png" alt="" class="fav"></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-sm-12 col-md-6 customPadding">
	                <div class="card item flex-fill">
	                    <div class="card-header bg-card">
	                        <a href="#" class="text-white">Fauzul Ichwan</a>
	                    </div>
	                    <div class="card-body">
	                        <h5 class="card-title text-center">Time</h5>
	                        <p class="card-text text-center">Tick tock...tick tock... <br>
	                            Life is counting down on your internal clock. <br>
	                            Memories that feel as if they occurred yesterday turn to flashes of moments that seem to fade away.</p>
	                        <div class="d-flex justify-content-start">
	                            <a href="#">#classic</a>
	                            <a href="#">#nature</a>
	                        </div>
	                        <a class="d-flex justify-content-end" href="#"><img src="icons8-love-50.png" alt="" class="fav"></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-sm-12 col-md-6 customPadding">
	                <div class="card item flex-fill">
	                    <div class="card-header bg-card">
	                        <a href="#" class="text-white">Fauzul Ichwan</a>
	                    </div>
	                    <div class="card-body">
	                        <h5 class="card-title text-center">Time</h5>
	                        <p class="card-text text-center">Tick tock...tick tock... <br>
	                            Life is counting down on your internal clock. <br>
	                            Memories that feel as if they occurred yesterday turn to flashes of moments that seem to fade away.</p>
	                        <div class="d-flex justify-content-start">
	                            <a href="#">#classic</a>
	                            <a href="#">#nature</a>
	                        </div>
	                        <a class="d-flex justify-content-end" href="#"><img src="icons8-love-50.png" alt="" class="fav"></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-sm-12 col-md-6 customPadding">
	                <div class="card item flex-fill">
	                    <div class="card-header bg-card">
	                        <a href="#" class="text-white">Fauzul Ichwan</a>
	                    </div>
	                    <div class="card-body">
	                        <h5 class="card-title text-center">Time</h5>
	                        <p class="card-text text-center">Tick tock...tick tock... <br>
	                            Life is counting down on your internal clock. <br>
	                            Memories that feel as if they occurred yesterday turn to flashes of moments that seem to fade away.</p>
	                        <div class="d-flex justify-content-start">
	                            <a href="#">#classic</a>
	                            <a href="#">#nature</a>
	                        </div>
	                        <a class="d-flex justify-content-end" href="#"><img src="icons8-love-50.png" alt="" class="fav"></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
    </div>
  </div>
