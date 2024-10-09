<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRICK TECH</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; margin: 0 auto; max-width: 600px;">
       
        <div>
            <p>Company Name : {{ $mailData['companyname'] }}</p>
            <p>Name : {{ $mailData['name'] }}</p>
            <p>Mobile : {{ $mailData['phone'] }}</p>
            <p>Email : {{ $mailData['email'] }}</p>
            <p>Message : {{ $mailData['message'] }}</p>
        </div>
        <footer style="background-color: #f0f0f0; padding: 20px; text-align: center;">
            &copy; {{ date('Y') }} Your Brick Technlogies. All rights reserved.
        </footer>
    </div>
</body>
</html>
