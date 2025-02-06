<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send WhatsApp Message</title>
</head>
<body>
    <h1>Send WhatsApp Message</h1>
    
    <form action="{{ url('/sendWhatsAppMessage') }}" method="POST">
        @csrf
        <label for="to">Recipient (Phone number with WhatsApp prefix, e.g. +1234567890):</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Send Message</button>
    </form>
</body>
</html>
