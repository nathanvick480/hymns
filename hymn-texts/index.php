<?php include '../components/header.php'; ?>

    <title>Hymn Texts | Asbury Hymn Project</title>
</head>

<body id="page-hymntexts">

    <?php include '../components/navbar.php'; ?>

    <div id="header" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Hymn Texts</h1>
        </div>
    </div>
    <div class="container-fluid pt-3 pb-4">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-body">
                        <p>Have you ever wondered why hymns so often rhyme? Hymn texts (or lyrics) are actualy poems which are meant to be sung. Each verse of the hymn is a stanza of the poem, and the poem as a whole follows a specific meter. This means that it's possible to sing any hymn text to any tune which follows the same meter! As you'll learn on the <a href="/about/">About</a> page, this makes it much easier for congregations to learn new hymns&mdash;they may already know the tune and just need to pair different words with it.</p>

                        <p>The following is an alphabetic list of all hymn texts in the <i>Asbury Hymn Project's</i> collection. Not every hymn text in this list has been chosen as a class hymn, but all texts listed below have a special status within the Asbury community. Learn more about the selection process on the <a href="/about">About</a> page.</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Topic</th>
                                        <th>Meter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        include '../../info.php';

                                        $sql = "SELECT id,name,topic,meter FROM Hymns";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {

                                                echo "<tr><td><a href='/hymn-texts/text?number=" . $row["id"] . "'>" . $row["name"]. "</a></td><td>" . $row["topic"] . "</td><td>" . $row["meter"] . "</td></tr>";
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
            <li class="breadcrumb-item active">Hymn Texts</li>
        </ol>
    </nav>
    <?php include '../components/footer.php'; ?>