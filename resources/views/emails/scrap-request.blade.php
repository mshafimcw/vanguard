<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Scrap Request</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>New Scrap Request</h1>
        </div>

        <div class="email-content">
            <div class="email-field">
                <div class="email-label">Full Name</div>
                <div class="email-value">{{ $scrapRequest->full_name }}</div>
            </div>

            <div class="email-field">
                <div class="email-label">Phone Number</div>
                <div class="email-value">{{ $scrapRequest->phone }}</div>
            </div>

            @if($scrapRequest->email)
            <div class="email-field">
                <div class="email-label">Email</div>
                <div class="email-value">{{ $scrapRequest->email }}</div>
            </div>
            @endif

            <div class="email-field">
                <div class="email-label">Location</div>
                <div class="email-value">{{ $scrapRequest->location }}</div>
            </div>

            <div class="email-field">
                <div class="email-label">Scrap Types</div>
                <div class="email-scrap-items">
                    @foreach(json_decode($scrapRequest->scrap_type) as $scrap)
                        <span class="email-scrap-item">{{ $scrap }}</span>
                    @endforeach
                </div>
            </div>

            @if($scrapRequest->details)
            <div class="email-field">
                <div class="email-label">Additional Details</div>
                <div class="email-value">{{ $scrapRequest->details }}</div>
            </div>
            @endif

            <div class="email-field">
                <div class="email-label">Submitted On</div>
                <div class="email-value">{{ $scrapRequest->created_at->format('F j, Y, g:i a') }}</div>
            </div>
        </div>

        <div class="email-footer">
            <p>This is an automated message from Vanguard Scrap Management System.</p>
            <p>© {{ date('Y') }} Vanguard. All rights reserved.</p>
        </div>
    </div>
</body>
</html>