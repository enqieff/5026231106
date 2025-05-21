<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar Bootstrap 4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #042331;
            color: white;
            transition: all 0.3s;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #063146;
        }
        .sidebar .sidebar-header {
            padding: 20px;
            background: #063146;
            text-align: center;
            font-size: 1.2em;
        }
        .content {
            width: 100%;
            padding: 20px;
        }
        #sidebarCollapse {
            background: #042331;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        #sidebarCollapse:hover {
            background: #063146;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar">
        <div class="sidebar-header">
            <h4>Helperfind</h4>
        </div>
        <ul class="list-unstyled components">
            <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Helperlog</a></li>
            <li><a href="#"><i class="fas fa-search"></i> Helperfind</a></li>
            <li><a href="#"><i class="fas fa-hands-helping"></i> Helperassist</a></li>
            <li><a href="#" class="text-danger"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="content">
        <button id="sidebarCollapse" class="btn btn-primary">
            <i class="fas fa-bars"></i> Toggle Sidebar
        </button>
        <h2 class="mt-3">Dashboard Helperfind</h2>
        <p>Konten utama berada di sini.</p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
            $(".sidebar").toggleClass("d-none");
        });
    });
</script>

</body>
</html>
