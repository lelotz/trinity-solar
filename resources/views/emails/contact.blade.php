<!-- resources/views/emails/contact.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>New Contact Us Message</title>
</head>
<body>
    <h2>Contact Us Message</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
