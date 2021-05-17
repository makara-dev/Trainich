<!-- The mail view used to show in email -->
<h4>Tranich Mail Info</h4>
<h4>From: {{$clientInformation['email']}}</h4>
<h4>To: {{$clientInformation['auth']}}</h4>
<hr>
<p>This Email is an Automated message from input text:</p>
<p>///////////////////</p>
<p> <strong>Name:</strong> {{$clientInformation['fullName']}}</p>
<h4>Email: {{$clientInformation['email']}}</h4>
<h4>Body Message:</h4>
<p>{{$clientInformation['message']}}</p>
<p>///////////////////</p>
<p>This message we created on {{$clientInformation['date']}}. </p>
