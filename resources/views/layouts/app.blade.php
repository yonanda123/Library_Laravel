<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../assets/AdminStyle.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <title>library Admin | Bookshelf</title>
    <style>
        .btn-delete {
            margin: 10px 0;
            width: 50%;
            background-color: #f70707;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    @include('partials.sidebar')
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Library Admin</span>
            </div>
        </nav>
        <div class="home-content">
            @yield('content')
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };

        function myButton() {
            let text = "";
            let pil = confirm("Do you want to delete this data ?");
            if (pil == true) {
                text = "Your data has been deleted";
            } else {
                text = "Your data has not been deleted";
            }
            document.getElementById("demo").innerHTML = text;
        }
    </script>
</body>

</html>
