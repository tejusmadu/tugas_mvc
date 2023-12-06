<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h2 {
            animation: fadeInUp 1s ease-out;
        }

        .info {
            animation: moveInRight 1s ease-out 0.5s; /* Delay the animation */
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes moveInRight {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
    <title>Animated Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>
<div class="info">Selamat datang Ryan Sukandi</div>

</body>
</html>
