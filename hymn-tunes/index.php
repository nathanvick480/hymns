<?php include '../components/header.php'; ?>

    <title>Hymn Tunes | Asbury Hymn Project</title>
</head>

<body id="page-hymntunes">

    <?php include '../components/navbar.php'; ?>

    <div id="header" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Hymn Tunes</h1>
        </div>
    </div>
    <div class="container-fluid pt-3 pb-4">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-body">
                        <p>When we speak of a hymn, we're most often referring to the hymn text: "And Can It Be," Great Is Thy Faithfulness," etc. Each of these texts, is most often sung to a particular tune. Each tune has its own name (spelled in capital letters to distinguish tunes from texts). Fascinatingly, a hymn text can be sung to any tune which matches its meter. The reason for this is that hymns are intended to be sung by congregations, not all of whom may be musically inclined. If a new hymn text is paired with a tune the congregation already knows, they will pick it up much more quickly than if they had to learn a new tune as well.</p>

                        <p>The following is an alphabetic list of all hymn tunes in the <i>Asbury Hymn Project's</i> collection. Because this collection is relatively small and specific (there are thousands of hymns in existence), most tunes in this list are not associated with multiple hymns. Additionally, more recent hymns may not have traditional hymn tune names. In these cases, the author's name has been substituted for the tune name.</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tune Name</th>
                                        <th>Text Name</th>
                                        <th>Meter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        include '../../info.php';

                                        $sql = "SELECT id, name, meter, tune FROM Hymns ORDER BY tune ASC";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {

                                                echo "<tr><td>" . $row["tune"]. "</td><td><a href='/hymn-texts/text?number=" . $row["id"] . "'>" . $row["name"] . "</td><td>" . $row["meter"] . "</td></tr>";
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
            <li class="breadcrumb-item active">Hymn Tunes</li>
        </ol>
    </nav>
    <?php include '../components/footer.php'; ?>