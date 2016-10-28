<?php
require 'URL.php';

  $reqPick = "pickup";
  $pickedUp = "pickedup";
  $wareHouse = "atWarehouse";
  $deliv = "delivered";


  $delivered = false;

  if($orderStatus == $reqPick){
    $newStatus = $pickedUp;
  }else if($orderStatus == $pickedUp){
    $newStatus = $wareHouse;
  }else if($orderStatus == $wareHouse){
    $newStatus = $deliv;
    $delivered = true;
  }

  if($orderStatus != $deliv){

    if($delivered == false){
      echo '<a href = "', $mainURL, 'updateOrderStatus.php?newStatus=', $newStatus, '&orderID=', $orderID, '"><input type="button" class = "index_button" value="', $newStatus,'"/></a>';

    }else{
      if($secure == 'yes'){

        echo '<a href = "', $mainURL, 'updateOrderStatus.php?newStatus=', $newStatus, '&orderID=', $orderID, '"><input type="button" class = "index_button" value="delivered with signature"/></a>';

      }else{
        echo '<a href = "', $mainURL, 'updateOrderStatus.php?newStatus=', $newStatus, '&orderID=', $orderID, '"><input type="button" class = "index_button" value="delivered"/></a>';
      }
    }
  }else{
    echo "<br><br>This package has been delivered";
  }

 ?>
