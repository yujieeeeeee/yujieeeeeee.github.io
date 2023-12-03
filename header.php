<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">C111196104</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" style="font-size: 20px;"id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/www111-2/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://ccet.nkust.edu.tw/">不分系</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rate.php">匯率換算</a>

                <li class="nav-item">
                    <a class="nav-link" href="/www111-2/wp">Wordpress</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        所有功能
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="bmi.php">BMI計算</a></li>
                        <li><a class="dropdown-item" href="lotto.php">樂透預測</a></li>
                        <li><a class="dropdown-item" href="bodyinfo.php">健康管理</a></li>
                        <li><a class="dropdown-item" href="js-examples/index.html">Javascript練習</a></li>
                        <li><a class="dropdown-item" href="js-examples/tv.php">電視選台器</a></li>
                        <li><a class="dropdown-item" href="tvlist.php">編輯電視台</a></li>
                    </ul>
                </li>
                <?php
                if ($_SESSION["user"] == "administrator") {
                ?>
                <li class="nav-item">
                
                    <a href="logout.php" class="btn btn-danger">登出</a>
                    
                    
                </li>
                <?php } ?>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>