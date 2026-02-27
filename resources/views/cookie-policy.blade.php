@extends('layouts.main')

@section('content')
<div class="container">
    <div class="cookie-alert">

        <h1>Cookie Policy</h1>

        <p>
            We use cookies that are necessary to make our site work.
            We may also use additional cookies to analyze, improve,
            and personalize our content and your digital experience.
        </p>

        <h4>Necessary Cookies</h4>
        <p>
            These cookies are essential for website functionality
            and cannot be disabled.
        </p>

        <h4>Analytics Cookies</h4>
        <p>
            These cookies help us understand how visitors interact
            with our website so we can improve performance.
        </p>

        <h4>Managing Cookies</h4>
        <p>
            You can change your cookie preferences at any time.
        </p>

        <div class="cookie-actions">
            <button class="btn-accept" onclick="acceptCookies('/')">
                Accept All Cookies
            </button>

            <button class="btn-customize" onclick="openCookieSettings()">
                Customize Cookies
            </button>
        </div>

    </div>
</div>
@endsection