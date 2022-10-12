<?php
$api_url = 'https://628aeca37886bbbb37ad3796.mockapi.io/t_product';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data;

// Cut long data into small & select only first 10 records
$user_data = array_slice($user_data, 0, 9);

// print_r($user_data);
// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($user_data as $user) {
   
    echo 

    '
      <div class="product-small box ">
         <div class="box-image">
            <div class="image-fade_in_back">
               <img width="300" height="300" src='.$user->image.' sizes="(max-width: 300px) 100vw, 300px" />
               <p>'.$user->title.'</p>
            </div>
         </div>
      </div>
    ';
}
