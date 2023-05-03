<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.2.1
 */

/**
 * Database `food_order`
 */

/* `food_order`.`tbl_admin` */
$tbl_admin = array(
  array('id' => '2','full_name' => 'Sahana.S.N','username' => 'sahana','password' => 'b8873a156dc35dc99b69d0f93ebe22fc'),
  array('id' => '3','full_name' => 'Niranjan.S.T.','username' => 'niranjan','password' => '81dc9bdb52d04dc20036dbd8313ed055'),
  array('id' => '4','full_name' => 'Manjula.H.N','username' => 'manjula','password' => '698d51a19d8a121ce581499d7b701668')
);

/* `food_order`.`tbl_category` */
$tbl_category = array(
  array('id' => '1','title' => 'momo','image_name' => 'Food_Category_6036.jpg','featured' => 'Yes','active' => 'Yes'),
  array('id' => '2','title' => 'fish meal','image_name' => 'Food_Category_7335.jpg','featured' => 'No','active' => 'Yes'),
  array('id' => '3','title' => 'juice','image_name' => 'Food_Category_4925.jpg','featured' => 'Yes','active' => 'Yes'),
  array('id' => '4','title' => 'pizza','image_name' => 'Food_Category_6602.jpg','featured' => 'Yes','active' => 'Yes'),
  array('id' => '5','title' => 'coffee','image_name' => 'Food_Category_5545.jpg','featured' => 'No','active' => 'No'),
  array('id' => '6','title' => 'noodles','image_name' => 'Food_Category_8923.jpg','featured' => 'Yes','active' => 'No'),
  array('id' => '7','title' => 'cake','image_name' => 'Food_Category_5124.jpg','featured' => 'Yes','active' => 'No'),
  array('id' => '8','title' => 'ice cream','image_name' => 'Food_Category_6270.jpg','featured' => 'No','active' => 'Yes')
);

/* `food_order`.`tbl_food` */
$tbl_food = array(
  array('id' => '1','title' => 'Chicken Momo','description' => 'The savory veggie filling has a balanced taste and is lightly spiced','price' => '120.00','image_name' => 'Food_Name_480.jpg','category_id' => '0','featured' => 'Yes','active' => 'Yes'),
  array('id' => '2','title' => 'Veg momo','description' => 'An delicious and tasty momo packed with healthy veggies like carrots and cabbage','price' => '100.00','image_name' => 'Food-Name1712.jpg','category_id' => '1','featured' => 'Yes','active' => 'Yes'),
  array('id' => '3','title' => 'Chicken pizza','description' => 'One pound boneless skiness chicken with  the perfect blend of mild indian masalas','price' => '350.00','image_name' => 'Food-Name2732.jpg','category_id' => '4','featured' => 'Yes','active' => 'Yes'),
  array('id' => '4','title' => 'creamy coke','description' => 'an chocolate  cake ','price' => '85.00','image_name' => 'Food-Name9183.jpg','category_id' => '1','featured' => 'Yes','active' => 'Yes'),
  array('id' => '5','title' => 'Cappuccino','description' => 'an cold cofee','price' => '150.00','image_name' => 'Food-Name5677.jpg','category_id' => '5','featured' => 'Yes','active' => 'Yes'),
  array('id' => '6','title' => 'An ice-cream ','description' => 'an delicious ice-cream milk with chocolate flavour','price' => '200.00','image_name' => 'Food-Name3954.jpg','category_id' => '8','featured' => 'Yes','active' => 'Yes')
);

/* `food_order`.`tbl_order` */
$tbl_order = array(
  array('id' => '1','food' => 'Chicken pizza','price' => '350.00','qty' => '1','total' => '350.00','order_date' => '2023-04-13 07:14:12','status' => 'Cancelled','customer_name' => 'niranjan ','customer_contact' => '9902999647 ','customer_email' => 'niranjan@gmail.com ','customer_address' => '393 E 3
Radhakrishnan Nagara Avargere '),
  array('id' => '2','food' => 'Chicken Momo','price' => '120.00','qty' => '1','total' => '120.00','order_date' => '2023-04-13 07:15:19','status' => 'Delivered','customer_name' => 'manjula ','customer_contact' => '9874563211 ','customer_email' => 'manju111@gmail.com ','customer_address' => '#393 E 3
Radhakrishnan Nagara  bangalore '),
  array('id' => '3','food' => 'Cappuccino','price' => '150.00','qty' => '1','total' => '150.00','order_date' => '2023-04-13 07:18:51','status' => 'On Delivery','customer_name' => 'sahana ','customer_contact' => '1234567899 ','customer_email' => 'sana44@gmail.com ','customer_address' => '#1213 F 66
kempegowda street,malleswaram,bengaluru '),
  array('id' => '4','food' => 'creamy coke','price' => '85.00','qty' => '2','total' => '170.00','order_date' => '2023-04-13 07:28:30','status' => 'Ordered','customer_name' => 'sanju ','customer_contact' => '9874563211 ','customer_email' => 'sanju12@gmail.com ','customer_address' => '393 E 3
Radhakrishnan Nagara Avargere,davangere ')
);
