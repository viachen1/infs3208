<div class="col-lg-6">
	<div class="card">
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">shop</h3>
		</div>
		
        <div class="card-body">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Course Name</th>
                        <th>description</th>
                        <th>price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
						$this->load->model('Shop_model');
                        $data = $this->load->Shop_model->shopInfo($this->session->userdata("username"));
                        foreach($data as $row){
                        echo "
                            <tr>
                                <td>$row->id</td>
                                <td>$row->courseName</td>
                                <td>$row->description</td>
                                <td>$row->price</td>
                            </tr>
                        ";
                    }?>		
                </tbody>
            </table>
			
                
		</div>
	</div>
</div>



    <div class="card">
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">cart</h3>
		</div>
		
        <div class="card-body">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
						$this->load->model('Shop_model');
                        $data = $this->load->Shop_model->cartInfo($this->session->userdata("username"));
                        foreach($data as $row){
                        echo "
                            <tr>
                                <td>$row->courseName</td>
                                <td>$row->price</td>
                            </tr>
                        ";
                    }?>	
                </tbody>
                
            </table>
            <h5> In total: <?php 

                $sum = $this->shop_model->sumprice();
                foreach($sum as $row) {
                    $sum = $row;
                }
                echo $sum;
            
            ?></h5>

                <div class="card-header d-flex align-items-center">
                    <?php echo form_open_multipart('shop/doADD');?>
                        <input type="text" name="itemID" placeholder="Inter your Item id">
                        <input type="submit" name="confirm" value="ADD">
                    <?php echo form_close(); ?>

                    <?php echo form_open_multipart('shop/removeAll');?>
                        <input type="text" name="delateBtn" placeholder="Inter delate id">
                        <input type="submit" name="cartRemove" value="delate">
                    <?php echo form_close(); ?>
                    <?php echo form_open_multipart('shop/checkout');?>
                        <input type="submit" name="cartCheckout" value="Checkout">
                    <?php echo form_close(); ?>
                </div>
		</div>
	</div>

    