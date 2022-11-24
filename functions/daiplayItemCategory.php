<?php
 
require("../controllers/item_controller.php");
// Get all brand in a drop down function


function getAllItemCatgory()
{
    $data = getAllFromCategory_ctr();
    $catId = NULL;
    $catName = NULL;
    echo "
    <select class='custom-select' name='category_name' id='mybrand' >
    ";
    foreach ($data as $award) {
        $catId = $award['cat_id'];
        $catName = $award['cat_name'];
        myawards( $catId, $catName);
    }
    echo "</select>";
}

function  myawards( $catId, $catName)
{
    echo "
    <option value='$catId'>$catName</option>
    ";
}


// Get All item Category in a table for
  function showrandCTable_fnc()
{
    $data = getAllFromCategory_ctr();

    echo "<table class='table'>
    <thead class='table-warning'>
      <tr>
        <th scope='col'>Catgory Name</th>
        <th scope='col'>Delete</th>
        <th scope='col'>Edit</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($data as $award) {
        $catId = $award['cat_id'];
        $catName = $award['cat_name'];
        showCategoryRow_fnc( $catId, $catName);
    }
    echo "
    </tbody>
</table>";
}


function showCategoryRow_fnc( $catId, $catName)
{
    echo "
    <tr>
      <td>$catName</td>
      <td>
      <a href = './../actions/items_action/delete_category.php?id=$catId' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
      </td>
      <td>
      <a href = '?id=$catId&brName=$catName' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
      </td>
    </tr>
    ";
}

// Get All food Category in a table for
//function getAllfoodTable_fnc($item_cat){
//   $data = allAnItemCatgeory_ctr($item_cat);

function getAllfoodTable_fnc($cat_name){
  $data=getAllItemCatgeory($cat_name);

    echo "<table class='table'>
    <thead class='table-warning'>
      <tr>
        <th scope='col'>Image</th>
        <th scope='col'>Food Name</th>
        <th scope='col'>Food Price</th>
        <th scope='col'>Food Descrption</th>
        <th scope='col'>Delete</th>
        <th scope='col'>Edit</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($data as $item) {
        $itemId = $item['item_id'];
        $itemName = $item['item_name'];
        $itemPrice = $item['item_price'];
        $itemDescription = $item['item_description'];
        $item_image = $item['item_image'];
        $item_keyword = $item['item_keyword'];
        getAllFoodTablerow_fnc($itemId,$itemName,$itemPrice, $itemDescription, $item_image, $item_keyword);

       
    }
    echo "
    </tbody>
</table>";

}
function  getAllFoodTablerow_fnc($itemId,$itemName,$itemPrice, $itemDescription, $item_image, $item_keyword){
  echo "
  <tr>
    <td><img src='$item_image' width='50' height='50' ></td>
    <td>$itemName</td>
    <td>$itemPrice</td>
    <td>$itemDescription</td>
    <td>
    <a href = '../actions/items_action/deleteItem_ctr.php?item_id=$itemId' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
    </td>
    <td>
    <a href = '?item_id=$itemId&itemName=$itemName&itemPrice=$itemPrice&itemdescription=$itemDescription&item_image=$item_image&item_keywords=$item_keyword' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
    </td>
  </tr>
  ";

}


// Get All transport Category in a table for
function getAllTransportTable_fnc($cat_name){
  $data = getAllItemCatgeory($cat_name);

    echo "<table class='table'>
    <thead class='table-warning'>
      <tr>
      <th scope='col'>Image</th>
        <th scope='col'>Transport Name</th>
        <th scope='col'>Transport Price</th>
        <th scope='col'>Transport Descrption</th>
        <th scope='col'>Delete</th>
        <th scope='col'>Edit</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($data as $item) {
        $itemId = $item['item_id'];
        $itemName = $item['item_name'];
        $itemPrice = $item['item_price'];
        $itemDescription = $item['item_description'];
        $item_image = $item['item_image'];
        $item_keyword = $item['item_keyword'];
        getAllFoodTablerow_fnc($itemId,$itemName,$itemPrice, $itemDescription, $item_image, $item_keyword);
    }
    echo "
    </tbody>
</table>";

}
function  getAllTransportTablerow_fnc($itemId,$itemName,$itemPrice, $itemDescription, $item_image){
  echo "
  <tr>
    <td><img src='$item_image' width = '50' height ='50' ></td>
    <td>$itemName</td>
    <td>$itemPrice</td>
    <td>$itemDescription</td>
    <td>
    <a href = '?item_id=$itemId' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
    </td>
    <td>
    <a href = '?item_id=$itemId&itemName=$itemName&itemPrice=$itemPrice&itemdescription=$itemDescription' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
    </td>
  </tr>
  ";

}



?>