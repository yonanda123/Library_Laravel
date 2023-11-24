<div class="sidebar">
    <div class="logo-details">
        <img src="../assets/image/logolibrary2.png" class="logo_name" alt="" />
    </div>
    <ul class="nav-links">
        <li>
            <a href="../admin.php" class="active">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('bookshelf') }}" class="{{ request()->Is('bookshelf*') ? 'active' : '' }}">
                <i class="bx bx-box"></i>
                <span class="links_name">Bookshelf</span>
            </a>
        </li>
        <li>
            <a href="{{ route('book') }}" class="{{ request()->Is('bookshelf*') ? 'active' : '' }}">
                <i class="bx bx-list-ul"></i>
                <span class="links_name">Book</span>
            </a>
        </li>
        <li>
            <a href="logout.php">
                <i class="bx bx-log-out"></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>
