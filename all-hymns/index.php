<?php include '../components/header.php'; ?>

    <title>Asbury Hymn Project</title>
</head>

<body id="page-hymns">

    <?php include '../components/navbar.php'; ?>

    <div id="header" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">All Hymns</h1>
        </div>
    </div>
    <div class="container-fluid pb-4">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card">
                    <h5 class="card-header">Hymns</h5>
                    <ul class="list-group list-group-flush">
                        <?php
                        /*
                            include '../info.php';

                            $sql = "SELECT name FROM Hymns";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<li class='list-group-item'>" . $row["name"]. "</li>";
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close(); */
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">All Hymns</li>
        </ol>
    </nav>
    <?php include '../components/footer.php'; ?>