<!doctype
 <html>  
      <head>  
           <title>JSON</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br>  
           <div class="container" style="width:500px;">  
                <h3 align="">FETCH DATA FROM JSON</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th style="font-family: ">Menu</th>  
                          </tr>  
                          <?php  
                          $data = file_get_contents("37327.json");  
                          $data = json_decode($data, true);
                          $dateToDayId = $data["calendar"]["dateToDayId"];
                          $dishIdToMealId = $data["calendar"]["dishIdToMealId"];
                          $daysWithDetails = $data["calendar"]["daysWithDetails"];

// array_search($dateId, array_column($daysWithDetails, "mealId"));;
                          //var_dump($data);

                          foreach($dateToDayId as $day => $dayId)  
                          {   
                            
                            var_dump($dateToDayId, $dishIdToMealId);
                            //var_dump($dayId, $day, $daysWithDetails[$dayId]);
                            //die();
                           // echo '<tr><td>'.$day.'</td><td>'.$daysWithDetails[$dayId].'</td></tr>'; 

                          } 

                 
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html> 