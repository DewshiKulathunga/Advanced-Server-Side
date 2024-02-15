<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinosaurs Periods</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #007bff, #560bad);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            text-align: center;
            max-width: 600px;
            width: 100%;
            animation: pulse 2s infinite alternate;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            100% { transform: scale(1.03); }
        }

        h1 {
            color: #560bad;
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 3rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        li {
            margin: 0 15px;
            animation: slideIn 1s forwards;
        }

        @keyframes slideIn {
            0% { opacity: 0; transform: translateY(-50px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
            padding: 15px 30px;
            border-radius: 30px;
            background-color: #560bad;
            display: inline-block;
            transition: transform 0.2s ease;
        }

        a:hover {
            transform: translateY(-5px);
            background-color: #007bff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dinosaurs Geological Periods</h1>
        <ul>
            <li><a href="<?php echo site_url('Dinosaurs/getinfo/Triassic'); ?>">Triassic</a></li>
            <li><a href="<?php echo site_url('Dinosaurs/getinfo/Jurassic'); ?>">Jurassic</a></li>
            <li><a href="<?php echo site_url('Dinosaurs/getinfo/Cretaceous'); ?>">Cretaceous</a></li>
            <!-- Add more links for other periods as needed -->
        </ul>
    </div>
</body>
</html>
