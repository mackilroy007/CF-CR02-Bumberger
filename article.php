<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>CodeChallenge 2 main page</title>
</head>

<body>
    <header>
        <img src="img/logo-newspaper-cf.png" alt="Logo" class="logo-header1">
        <div class="hide-phone, hide-tablet">
            <!--header2 needs to be in a div for it to become hidden-->
            <img src="/img/banner-1.png" alt="Advertisment" id="logo-ad" class="hide-phone, hide-tablet, logo-header2">
        </div>
        <nav class="flex-row">
            <ul>
                <a href="index.html">
                    <li>Home</li>
                </a>
                <li>Tech</li>
                <li>Culture</li>
                <li>Video</li>
            </ul>
        </nav>
        <article>
            <section>
                <h1>Main Article</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis dolor et tellus eleifend porttitor
                    non ac turpis. Nam consequat gravida turpis, vel convallis urna. Sed tristique nec lectus at
                    interdum. In interdum orci est, at mollis felis consequat eget. Mauris non ante a erat laoreet
                    aliquam vel non urna. Proin a tincidunt ex. Pellentesque porta leo tellus. Pellentesque tristique
                    tincidunt pharetra. Fusce ac est interdum, malesuada orci vel, rhoncus elit. Aliquam erat volutpat.
                    Pellentesque at consectetur velit, ut faucibus felis. Pellentesque finibus vehicula pellentesque.
                    Integer hendrerit purus sit amet turpis pulvinar, ut rutrum eros laoreet. Phasellus bibendum libero
                    nec accumsan suscipit. </p>
                <br>
                <p>Mauris dignissim feugiat eros eget pharetra. Suspendisse volutpat eget leo id congue. Etiam vulputate
                    velit ut metus feugiat, non pulvinar augue suscipit. Curabitur mauris nulla, efficitur eu nunc ut,
                    feugiat convallis magna. Nunc tincidunt sapien metus, vel tincidunt ipsum sollicitudin a. Phasellus
                    aliquet, quam quis mollis pretium, nulla nibh finibus arcu, vel lobortis ex urna non quam. Curabitur
                    ac lectus vel tellus tempor consequat. Sed pharetra in dui id sagittis. Integer hendrerit odio
                    libero, nec ultrices magna pharetra non. Quisque luctus viverra orci vel sollicitudin. Maecenas
                    egestas arcu at enim mollis, non tempus velit tincidunt. Aliquam elementum nibh vel odio tempor
                    commodo. Aenean in lorem vitae lacus tempor feugiat nec in dui. Morbi tincidunt ornare neque, vel
                    pellentesque nunc porta non. </p>
            </section>
            <section>
                <h1>2nd Article</h1>
                <p>
                    Praesent eleifend ligula vitae posuere sodales. Suspendisse in bibendum ex, vitae tincidunt sapien.
                    Curabitur ut risus fermentum, maximus lectus non, porta neque. Quisque vulputate, quam at dignissim
                    eleifend, magna nulla convallis turpis, non porta est massa quis lectus. Mauris vestibulum ipsum ex.
                    Phasellus facilisis, libero a finibus accumsan, ante orci pretium ligula, suscipit venenatis mauris
                    lectus a mi. In quis nisl eros. Nullam massa eros, varius eu mauris sed, placerat facilisis arcu.
                    Nunc nec ultrices mi. Ut egestas est tortor, et venenatis nisi lacinia in. Ut non facilisis ligula.
                    Nulla a eros tellus. Integer nec est accumsan, sodales eros sed, hendrerit metus. Sed vel rutrum
                    dui. Quisque eleifend quam nibh, id accumsan dolor suscipit at. Nulla facilisi.
                </p>
                <br>
                <p>
                    Donec congue aliquam bibendum. Etiam feugiat dolor at libero blandit, eu imperdiet diam laoreet.
                    Quisque in auctor orci, eget bibendum tellus. Suspendisse potenti. Integer tristique finibus lacus
                    eget venenatis. Nulla a aliquam sem. Quisque cursus, ex et iaculis lobortis, libero urna convallis
                    velit, et vulputate quam eros ut massa. Praesent eu augue a mauris finibus cursus a eu lacus. Nullam
                    posuere lacus sed interdum interdum. Donec dapibus eget urna quis tincidunt. Duis placerat, tellus
                    id varius hendrerit, nunc risus fermentum orci, nec auctor lectus eros eget dui. Cras odio dui,
                    maximus vitae egestas id, finibus et ante.
                </p>
            </section>
        </article>
        <div>
            <h2>Weather forcast</h2>
            <?php

            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://community-open-weather-map.p.rapidapi.com/weather/weather?q=London%2Cuk&lat=0&lon=0&callback=test&id=2172797&lang=null&units=%22metric%22%20or%20%22imperial%22&mode=xml%2C%20html",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: community-open-weather-map.p.rapidapi.com",
                    "x-rapidapi-key: df9cf892f5msh5e0a49124ce18a5p1e6274jsnded6c5b43eba"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                echo $response;
            }
            ?>
        </div>
        <!-- <nav class="flex-row, nav-footer">
            <ul>
                <a href="index.html">
                    <li>Home</li>
                </a>
                <li>Tech</li>
                <li>Culture</li>
                <li>Video</li>
            </ul>
            <footer>
                <br>
                <img src="img/logo-newspaper-cf.png" alt="Logo" class="logo-footer">
                <p>Aaron Bumberger - CodeFactory 2020</p>
                <br>
            </footer>
            <script>
                console.log("Hello from the console :)")
            </script> -->
</body>

</html>