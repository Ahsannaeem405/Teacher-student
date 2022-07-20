<?php
 
use \Firebase\JWT\JWT;
use GuzzleHttp\Client;
use  Illuminate\Support\Facades\Auth;
use App\Models\event;
use Illuminate\Http\Request;

 //dd($file);
define('ZOOM_API_KEY', "KwZ1XRbwQsGRvYoeMdPBUw");
define('ZOOM_SECRET_KEY',"fGS6KqI4HBaDodyFyUINJyTeFKq8weeffpPw");
define('event_name', 'test');
define('date',  date('Y-m-d'));
define('time',  date('H:i'));



function getZoomAccessToken() {
    $key = ZOOM_SECRET_KEY;

    $payload = array(
        "iss" => ZOOM_API_KEY,
        'exp' => time() + 3600,
        
    );
    return JWT::encode($payload,$key);    
}
function createZoomMeeting() {
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.zoom.us',
    ]);
 
    $event_name= event_name;
  
   

   


  
    $response = $client->request('POST', '/v2/users/me/meetings', [
   
        "headers" => [
            "Authorization" => "Bearer " . getZoomAccessToken()
        ],
        'json' => [
            "topic" => $event_name,
            "type" => 2,
            "duration" => "30", // 30 mins
           
        ],
    ]);
 
    $data = json_decode($response->getBody());
    // echo "Join URL: ". $data->join_url;
    dd($data->join_url);
   
      
    
    // echo "Meeting Password: ". $data->password;
    // echo "Meeting Password: ". $name;
}

 

createZoomMeeting();
if(Auth::user()->role=='vip')

            {
echo "<script>window.location='/vip/event'</script>";
}
else if(Auth::user()->role=='admin')

            {
echo "<script>window.location='/admin/event'</script>";
}
else
{
 echo "<script>window.location='/user/event'</script>";
 
}

?>
