<?php
 
use \Firebase\JWT\JWT;
use GuzzleHttp\Client;
use  Illuminate\Support\Facades\Auth;
use App\Models\meeting;
use Illuminate\Http\Request;


 //dd($file);
//define('ZOOM_API_KEY', "KwZ1XRbwQsGRvYoeMdPBUw");
//define('ZOOM_SECRET_KEY',"fGS6KqI4HBaDodyFyUINJyTeFKq8weeffpPw");

define('ZOOM_API_KEY', Auth::User()->zoom_api);
define('ZOOM_SECRET_KEY', Auth::User()->zoom_secret);
define('topic', $req->topic);
define('date',  $req->date);
define('time',  $req->time);
define('type',  $req->type);
define('call_url',  $call_url);






function getZoomAccessToken() {
    $key = ZOOM_SECRET_KEY;

    $payload = array(
        "iss" => ZOOM_API_KEY,
        'exp' => time() + 3600,
        
    );
    return JWT::encode($payload,$key);    
}
function createZoomMeeting() {
    try{
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.zoom.us',
    ]);
 
    $topic= topic;
    $date= date;
    $time= time;
    $type= type;
    $call_url=call_url;
  
   




  
    $response = $client->request('POST', '/v2/users/me/meetings', [
   
        "headers" => [
            "Authorization" => "Bearer " . getZoomAccessToken()
        ],
        'json' => [
            "topic" => $topic,
            "type" => 2,
            "duration" => "30", // 30 mins
           
        ],
    ]);
 
    $data = json_decode($response->getBody());
    // echo "Join URL: ". $data->join_url;
    


       $url=$data->join_url;
       $data=new meeting();
       $data->type=$type;
       $data->user_id=Auth::user()->id;
       $data->date=$date;
       $data->time=$time;
       $data->topic=$topic;
       $data->url=$url;
       $data->save();
       }
    catch(Exception $e) {
               echo "<script>window.location='http://127.0.0.1:8000/teacher/meeting?id=error'</script>";

            }
   
      
    
    // echo "Meeting Password: ". $data->password;
    // echo "Meeting Password: ". $name;
}

 

createZoomMeeting();
 
echo "<script>window.location='http://127.0.0.1:8000/teacher/meeting'</script>";

?>
