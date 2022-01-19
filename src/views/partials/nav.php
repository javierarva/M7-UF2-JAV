<div class="nav">
    <h1 class="title">SCHOOL</h1>
    <nav>
        <ul>
            <?php if (isset($_SESSION['logged'])): ?>
            <li>
                <button><a href="/pages/logout">Logout</a></button>
            </li>
            <?php else: ?>
            <li>
                <button><a href="/pages/login">Login</a></button>
            </li>
            <?php endif;?>
            <li>
                <button><a href="/pages/register">Register</a></button>
            </li>
            <li>
                <button><a href="/pages/index">Home</a></button>
            </li>
        </ul>
    </nav>
</div>