<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Inquiry From Swajan</title>
</head>
<body>
<h1>{{isset($data['type']) ? 'Visit' : 'Contact'}} Inquiry</h1>
<p>You have received a new message from your website contact form.</p>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
@if(isset($data['type']))
    <p><strong>Date:</strong> {{ $data['date'] }}</p>
@else
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
@endif
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>

<p>Thank you,<br>
    Swajan</p>
</body>
</html>
