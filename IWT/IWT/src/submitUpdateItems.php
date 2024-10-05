<?php
    include_once'config.php';
?>
<?php
    if($_GET['submit']){
        $item_id=$_GET['id'];
        $item_name=$_GET['name'];
        $description = $_GET['des'];
        $price = $_GET['price'];
        $quantity = $_GET['qty'];
        $item_code = $_GET['code'];
        
        $query = "	UPDATE item 
					SET
						Item_name='$item_name',
						Item_description='$description',
						Price='$price',
						Quantity='$quantity',
						Item_Code='$item_code' 
					WHERE Item_id='$item_id'";
        
        $data=mysqli_query($conn,$query);
        
        if($data){
            echo "<script>alert('Record Updated!!')</script>";
        }else{
            echo "<script>alert('Error in Update')</script>";
        }
    }
    mysqli_close($conn);

?>
