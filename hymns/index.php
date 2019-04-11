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
    <div class="container-fluid pt-3 pb-4">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-body">
                        <p>The following is an alphabetic list of all hymns in the <i>Asbury Hymn Project's</i> collection. Each of these hymns was carefully selected for its beloved status within the Asbury community. Learn more about the selection process on the <a href="/about">About</a> page.</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Class(es)</th>
                                        <th>Tune</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        include '../../info.php';

                                        $sql = "SELECT id,name,tune,class FROM Hymns";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                $class = $row["class"];
                                                $class = ltrim($class,",");
                                                $class = rtrim($class,",");
                                                $class = str_replace(",",", ",$class);

                                                echo "<tr><td><a href='/hymns/hymn?number=" . $row["id"] . "'>" . $row["name"]. "</a></td><td>" . $class . "</td><td>" . $row["tune"] . "</td></tr>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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