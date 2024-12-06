<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aey's - Resume</title>
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
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Navoa, Aey Lizette</h1>
            <p> <?php echo e($data ['email']); ?> | <?php echo e($data ['contact']); ?> | <?php echo e($data ['address']); ?></p>
        </header>

        <!-- Summary Section -->
        <div class="section">
            <div class="section-title">Summary</div>
            <p><?php echo e($data ['summary']); ?></p>
        </div>

        <!-- Experience Section -->
        

        <!-- Education Section -->
        <div class="section">
            <div class="section-title">Education</div>
            <ul>
                <li>
                    <span class="job-title">Bachelor of Science in Information Technology</span> - <span class="company">Baliwag Polytechnic College</span>
                    <div class="dates">July 2022</div>
                </li>
            </ul>
        </div>

        <!-- Skills Section -->
        <div class="section">
            <div class="section-title">Skills</div>
            <ul>
                <li><?php echo e($data ['skills1']); ?></li>
                <li><?php echo e($data ['skills2']); ?></li>
                <li><?php echo e($data ['skills3']); ?></li>
                <li><?php echo e($data ['skills4']); ?></li>
            </ul>
        </div>

        <!-- Certifications Section -->
        <div class="section">
            <div class="section-title">Certifications</div>
            <ul>
                <li><?php echo e($data ['certifications1']); ?></li>
                <li><?php echo e($data ['certifications2']); ?></li>
            </ul>
        </div>

        <!-- Contact Section -->
        <footer>
            <p><strong>Contact Info:</strong> Email: aeynavoa8@gmail.com | Phone: (63) 9123-678900</p>
        </footer>
    </div>
</body>
<?php /**PATH C:\Users\Administrator\group-cv-dashboard\resources\views/welcome.blade.php ENDPATH**/ ?>