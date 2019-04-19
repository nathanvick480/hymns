<?php

    include '../../../info.php';

    $hymn_number = $_GET['number'];

    $sql = "SELECT id, name, topic, tune, meter, score, class, description, scripture_verse, scripture_verse_reference, audio_file_url, score_image_url, score_pdf_url, hymnary_link FROM Hymns WHERE id=$hymn_number";
    $result = $conn->query($sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if ($result->num_rows > 0) {
        $hymn_name = $row["name"];
        $hymn_topic = $row["topic"];
        $hymn_tune = $row["tune"];
        $hymn_meter = $row["meter"];
        $hymn_verse = $row["scripture_verse"];
        $hymn_verse_ref = $row["scripture_verse_reference"];
        $hymn_desc = $row["description"];
        $hymn_audio = $row["audio_file_url"];
        $hymn_score_png = $row["score_image_url"];
        $hymn_score_pdf = $row["score_pdf_url"];
        $hymnary_link = $row["hymnary_link"];

        $hymn_class = $row["class"];
        $hymn_class = ltrim($hymn_class,",");
        $hymn_class = rtrim($hymn_class,",");
        $hymn_class = str_replace(",",", ",$hymn_class);


    include '../../components/header.php';
?>

    <title>Asbury Hymn Project</title>
</head>

<body id="page-hymn">

    <?php include '../../components/navbar.php'; ?>

    <div id="header" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $hymn_name; ?></h1>
        </div>
    </div>
    <div class="container-fluid pt-3 pb-4">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p class="mb-0"><i class="fas fa-quote-left fa-2x fa-pull-left"></i><?php echo $hymn_verse; ?></p>
                            <footer class="blockquote-footer"><?php echo $hymn_verse_ref; ?></footer>
                        </blockquote>
                    </div>
                </div>
                <p><?php echo $hymn_desc; ?></p>
                <p>Topic: <?php echo $hymn_topic; ?></p>
                <p>Meter: <?php echo $hymn_meter; ?></p>
                <p>Tune: <?php echo $hymn_tune; ?> </p>
                <p>Classes: <?php echo $hymn_class; ?></p>
                <p>For more information about this hymn, visit <a href="<?php echo $hymnary_link; ?>" target="_blank">Hymnary.org</a>.</p>
            </div>
            <div class="col-sm-3">
                <audio controls>
                    <source src="<?php echo $hymn_audio; ?>" type="audio/mpeg">
                </audio>
                <div class="card mt-3">
                    <a href="<?php echo $hymn_score_pdf; ?>" target="_blank">
                        <img src="<?php echo $hymn_score_png; ?>" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/hymn-texts/">Hymn Texts</a></li>
            <li class="breadcrumb-item active"><?php echo $hymn_name; ?></li>
        </ol>
    </nav>
    <?php
        include '../../components/footer.php';

            } else {
        header('Location: /hymns');
    }
    $conn->close();
    ?>