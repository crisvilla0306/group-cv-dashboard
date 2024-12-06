<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            margin: 0;
            padding-bottom: 10px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            background: #333;
            color: #fff;
            padding: 10px;
            text-transform: uppercase;
            font-weight: bold;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .job-title {
            font-weight: bold;
        }
        .company {
            font-style: italic;
        }
        .dates {
            color: #666;
        }

        .back-btn {
            text-decoration: none;
            padding: .5rem;
            background: #666;
            color: white;
            border-radius: .25rem;
        }
    </style>
</head>
<body>
    <a href="{{ route('dashboard') }}" class="back-btn">Back</a>
    <div class="container">

        <header>
            <h1>{{ucwords($resume->name)}}</h1>
            <p> {{$resume->email}} | {{$resume->contact}} | {{$resume->address}}
                @if ($resume->status)
                | {{$resume->status}}
                @endif
                </p>
        </header>

        <!-- Summary Section -->
        <div class="section">
            <div class="section-title">Summary</div>
            <p>{{$resume->summary}}</p>
        </div>
        <!-- Education Section -->
        <div class="section">
            <div class="section-title">Education</div>
            <ul>
                <li>
                    <span class="job-title">{{$resume->course}}</span> - <span class="company">{{$resume->schoolName}}</span>
                    <div class="dates">{{$resume->schoolYear}}</div>
                </li>
            </ul>
        </div>

        <!-- Skills Section -->
        <div class="section">
            <div class="section-title">Skills</div>
            <ul>
                <li>{{$resume->skills1}}</li>
                <li>{{$resume->skills2}}</li>
                <li>{{$resume->skills3}}</li>
                <li>{{$resume->skills4}}</li>
            </ul>
        </div>

        <!-- Certifications Section -->
        <div class="section">
            <div class="section-title">Certifications</div>
            <ul>
                <li>{{$resume->certifications1}}</li>
                <li>{{$resume->certifications2}}</li>
            </ul>
        </div>

        <!-- Contact Section -->
        <footer>
            <p><strong>Contact Info:</strong> Email: {{$resume->email}} | Phone: (63) {{$resume->contact}}</p>
        </footer>
    </div>
</body>
