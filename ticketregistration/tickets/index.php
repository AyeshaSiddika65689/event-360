<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Events 360 | Event Registration </title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>


<div class="wrapper">
    <div class="title">
     Event Registration
    </div>
    <form id="form-submit" action="index.php" method="post">
      <div class="row">
          <div class="col-md-6">
              <fieldset>
                  <label for="from">WHAT ARE YOU LOOKING FOR?</label>
                  <select required name='eventdiscover' >
                      <option value="">Discover</option>
                      <option value="Dj_party">Dj_party</option>
                      <option value="Wedding">Wedding</option>
                      <option value="Virtual Event">Virtual Event</option>
                      <option value="Tech Event">Tech Event</option>
                      <option value="Conference">Conference</option>
                      <option value="Music Festival">Music Festival</option>
                      <option value="BrandExecution">BrandExecution</option>
                      <option value="Sponsorships">Sponsorships</option>
                      <option value="Networking sessions">Networking sessions</option>
                      <option value="Workshops">Workshops </option>
                  </select>
              </fieldset>
          </div>
          <div class="col-md-6">
              <fieldset>
                  <label for="to">COUNTRY</label>
                  <select required name='country'>
                    <option value="">LOCATION</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Hong Kong">Hong Kong</option> 
                    <option value="India">India</option>
                    <option value="Japan">Japan</option>
                    <option value="Korea">Korea</option>
                    <option value="Laos">Laos</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Vietnam">Vietnam</option>

                  </select>
              </fieldset>
          </div>
          <div class="col-md-6">
            <fieldset>
                <label for="to">STATE</label>
                <select required name='state' >
                    <option value="Kaoh Kong">Kaoh Kong</option>
                    <option value="Kracheh">Kracheh</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Tsuen Wan">Tsuen Wan</option>
                    <option value="Kowloon City">Kowloon City</option>
                    <option value="Myanmar"> Kachin State</option>
                    <option value="Singapore">Woodlands</option>
                    <option value="Thailand">Phuket</option>
                    <option value="Vietnam">Ho Chi Minh City</option>
                </select>
            </fieldset>
        </div>
        <div class="col-md-6">
              <div class="radio-select">
                  <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <label >Mode Of Event</label>
                           <select required name="mode">
                            <option  value="nil">Select</option>
                            <option  value="offline">Offline</option>
                            <option  value="online">online</option>
                           </select>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <fieldset>
                  <label for="date">DATE</label>
                  <input name="date" value="" type="date" class="form-control date" id="date" placeholder="Select date" required="">
              </fieldset>
          </div>
         
      </div>
      <div class="inputfield">
      <button name="save" class="btn" >SAVE</button>
      </div>
      </div>
      <div class="inputfield">
     
     <button name="" class="btn" ><a href="../index.php">NEXT</a></button>
    </div>
  </form> 

  <?php
$server_name="localhost";
$eventdiscover="root";
$country="";
$database_name="events_360";


$conn=mysqli_connect($server_name,$eventdiscover,$country,$database_name);
//now check the connection
if(!$conn)
{
die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
$eventdiscover = $_POST['eventdiscover'];
$country = $_POST['country'];
$state = $_POST['state'];
$mode = $_POST['mode'];
$date=$_POST['date'];


$sql_query = "INSERT INTO `eventregistration`(`eventdiscover`,`country`,`state`,`mode`,`date`)
VALUES ('$eventdiscover','$country','$state','$mode','$date')";

if (mysqli_query($conn, $sql_query))
{
    echo "Saved";
}
else
     {
     echo "Error: " . $sql . "" . mysqli_error($conn);
     }
mysqli_close($conn);
}
?>

      
    </div>
</div>	
</body>
</html>