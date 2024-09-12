
<?php 
    include("connection.php");

    @$code = $_GET['oid1'];
    @$g1  = $_GET['name'];
    @$g2 = $_GET['mid'];
    @$g3 =$_GET['img'];
    @$g4 = $_GET['cont'];


    @$query_in = "INSERT into tb_maid_alloc(maid_id,maid_name,contact,maid_img,order_id) values('$g2','$g1','$g4','$g3','$code')";
    
    
    $select_m = "select * from tb_maid_alloc where order_id = '$code'";
    
    $run1 = @mysqli_query($conn,$select_m);
    
    while($val = @mysqli_fetch_array($run1))
    {
         echo $val['maid_name'];}
        ?>

      				<!--<table class='table table-striped cart-list'>
                        <html><table>
						<thead>
                            <tr>
								<td>
								<h4><b>&nbsp;&nbsp;&nbsp;Order no </b> : <?php //echo $val['order_id'];?></h4>
								</td>
                            </tr>
							<tr>
                                <td>    
                                <h4><b>&nbsp;&nbsp;&nbsp;Order no </b> : <?php //echo $val['maid_name'];?></h4>
								</td>
							</tr>
                            <tr>
                                <td>    
                                <h4><b>&nbsp;&nbsp;&nbsp;Order no </b> : <?php //echo $val['contact'];?></h4>
								</td>
							</tr>
                            <tr>
                                <td>    
                                <h4><b>&nbsp;&nbsp;&nbsp;Order no </b> : <?php// echo $val['maid_img'];?></h4>
								</td>
							</tr>

						</thead>
                        </table>
                        <?php //} ?>
    </html>-->

       
    


