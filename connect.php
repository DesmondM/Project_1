$host="ec2-54-217-204-34.eu-west-1.compute.amazonaws.com";
$port="5432";
$dbname="d6gu8v9sgk90nb";
$username="akfxbmybeasbkt";
$password="e1c62ef89e00b904a3508b26c1f9126254285d715301bc202371055bff3ad5d4";
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$username;password=$password";

try{
// creates the PostgreSQL database connection
$conn = new PDO($dsn);

// message if connected to the PostgreSQL successfully
if($conn){
echo "Connected to the $dbname database successfully!";
}
}catch (PDOException $e){
// should there be an error lets get that and show it to the user.
echo $e->getMessage();
}
