   <div class="container list__container">
        


        	<?php
        		$num = 4;
        		foreach ($subs as $s) {
        			if ($num%4==0){
        				if ($num==4){
        					echo '<div class="row mb-5">';
        				}
        				else{
        					echo '</div>';
        					echo '<div class="row mb-5">';
        				}
        				
        			}
        		 	echo '<div class="col-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-around align-items-center">
                        <img src="',$s["avatar"],'" alt="profile" class="list__img" id="profile">
                        <div class="card-title pt-2">
                            <a href="soc.php?soc=',$s["soc_name"],'"><h4>',$s["soc_name"],'</h4></a>
                            <p>',$s["time"],'</p>
                        </div>
                    </div>
                    <div class="card-body">
                        ',$s["info"],'
                    </div>
                </div>
            </div>';

            $num=$num+1;
        		 } 
        	?>

        </div>
</div>