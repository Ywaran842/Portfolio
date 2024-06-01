<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="portfolio" />
        <meta name="author" content="yokeshwaran" />
        <title>portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f8f9fa; /* Background color similar to wrapper */
            z-index: -1; /* Place the background behind other content */
        }
        .progress-container {
            position: relative; /* Ensure relative positioning for the progress bars */
            overflow: hidden; /* Hide overflow content */
        }
        .progress-bar-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh; /* Full viewport height */
            width: 8px; /* Adjust width as needed */
            background-color: #f8f9fa; /* Background color similar to wrapper */
            z-index: 0; /* Ensure it's behind other content */
        }
        .progress-bar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; /* Fill entire width */
            height: 0; /* Initially hidden */
            background-color: #007bff; /* Progress bar color */
            transition: height 0.3s; /* Smooth transition */
            z-index: 1; /* Ensure it's above the background */
        }
    </style>
    </head>