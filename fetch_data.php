<?php

include('connection/connect.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM cars  WHERE NOT ID = 0
	";
	if(isset($_POST["vehicleType"]))
	{
		$brand_filter = implode("','", $_POST["vehicleType"]);
		$query .= "
		 AND vehicleType IN('".$brand_filter."')
		";
	}
    
    $result = $dbc->query($query);

    $count = $result->num_rows;

	$output = '';
	if($count > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$output .= '
			<div class="myDIV">
            
            <form action = "userAll/userCar.php" ><div class="card text-center mt-4 ">
                <div class="card-header text-primary h3 text-uppercase ">' .
                    $row["title"] . '
                </div>
                <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
                <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
                <div class="card-body ">
                    <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["type"] . '</h5>
    
                        <img src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" class=" img-fluid" alt="skijanje " width="400" style="float:left; max-height: 300px" />
    
    
    
                    <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
    
    
                <ul class="list-group list-group-flush tourPlans2 col-12" style="width:390px; border:none; ">
                    <li class="list-group-item text-warning mt-4 " style="border:none; ">
                        <p class="card-text " style="float:left; ">
                            <i class="fas fa-users "></i>
                            <span class="ml-2 ">Max People: ' . $row["people"] . '</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text " style="float:left; ">
                            <i class="fas fa-calendar-alt "></i>
                            <span class="ml-3 ">Model Year: ' . $row["year"] . '</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text " style="float:left; ">
                            <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . ' per day</p>
                    </li>
                    <li class="list-group-item text-warning ">
                      <p class="card-text " style="float:left; ">
                          <i class="fas fa-user mr-4"></i> ' . $row["driver"] . '</p>
                  </li>
                </ul>
    			<ul class="navbar-nav ml-auto selectTour" style="float:right; margin-top:-100px;">
                    <li class="list-group-item" style="border:none;">
                    <a href="#" data-toggle="modal" data-target="#dateSelection' . $row["ID"] . '"> 
                        <button class="btn btn-primary " style="width:125px;color:white " >Select</button>
                    </a>
                    </li>
                    <li class="list-group-item" style="border:none;">
                    <a href="#" data-toggle="collapse" data-target="#carFeedbackCollapse' . $row["ID"] . '" id="carFeedback' . $row["ID"] . '">
                        <button class="btn btn-primary "style="width:150px; color:white" >Leave Feedback</button>
                    </a>
                    </li>
                </ul>
    
                <div class="modal fade" id="dateSelection' . $row["ID"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Visit date</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control arrival" placeholder="Date of arrival" name="arrival" id="arrival' . $row["ID"] . '" onchange="date(this.id)">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input type="text" class="form-control departure" placeholder="Date of departure" name="departure" id="departure' . $row["ID"] . '" onchange="date(this.id)">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <p>Driver (+40$)</p>
                                        <input type="text" id="driverPrice" name="driverPrice" hidden>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="driver">Yes</label>
                                                <input type="radio" class="form-control" name="driver" id="driver">
                                            </div>
                                            <div class="col-6">
                                                <label for="noDriver">No</label>
                                                <input type="radio" class="form-control" name="driver" id="noDriver">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="select" id="select' . $row["ID"] . '" class="btn btn-primary">Continue</button>
                        </div>
                        </div>
                    </div>
                </div>
                            <div class="collapse feedCollapse mt-4 mr-4 ml-4" id="carFeedbackCollapse' . $row["ID"] . '">
                    <textarea cols="40" id="offerFeedback' . $row["ID"] . '" rows="10" class="form-control" style="resize: none;" placeholder="Your opinion about this tour..." onchange="feed(this.id)" onkeydown="feed(this.id)" onkeyup="feed(this.id)"></textarea>
                
                    <input type="button" onclick="feedClick(id)" class="btn btn-success mt-3 mb-3" value="Send" id="carFeedbackSend' . $row["ID"] . '" >         
                </div>
    
                </div>
                </div>
            </form>
            
            </div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>