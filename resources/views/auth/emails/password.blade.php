<h3>Hello from our blog</h3>
<p>You requested for resetting you password.</p>
<p>Please click the link below to reset you password.</p>
<p>Thanks for staying with us no matter what!</p>
<br>
<a href="{{$link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset())}}">{{$link}}</a>