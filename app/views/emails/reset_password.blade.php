<h1>Hi, {{ $email }}!</h1>
 
<p>Click this link to reset your password.</p>

<h3>http://127.0.0.1/lipzo/mat-khau/{{ $email }}/{{ $resetCode }}</h3>

<p>your new password: <strong>{{$newPassword}}</strong></p>