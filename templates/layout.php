<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $metaDescription; ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php $config->rootPath(); ?>/Styles/index.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
    <script>
        function redirectToHomepage() {
            var url = window.location.href;
            var page = url.split('/').pop();
            if (page === 'email-success') {
                // Afficher la pop-up
                alert('Nous avons bien reçu votre e-mail. Merci.');
                // Rediriger vers la page d'accueil après un délai de 1 seconde
                setTimeout(function() {
                    window.location.href = '/';
                }, 1000);
            }
        }
        redirectToHomepage();
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php $config->rootPath(); ?>/img/9929image001.ico">
    <title><?= $title ?></title>
    <!-- start Gist JS code-->
    <script>
        (function(d, h, w) {
            var gist = w.gist = w.gist || [];
            gist.methods = ['trackPageView', 'identify', 'track', 'setAppId'];
            gist.factory = function(t) {
                return function() {
                    var e = Array.prototype.slice.call(arguments);
                    e.unshift(t);
                    gist.push(e);
                    return gist;
                }
            };
            for (var i = 0; i < gist.methods.length; i++) {
                var c = gist.methods[i];
                gist[c] = gist.factory(c)
            }
            s = d.createElement('script'), s.src = "https://widget.getgist.com", s.async = !0, e = d.getElementsByTagName(h)[0], e.appendChild(s), s.addEventListener('load', function(e) {}, !1), gist.setAppId("99emhsfi"), gist.trackPageView()
        })(document, 'head', window);
    </script>
    <!-- end Gist JS code-->
</head>

<body>
    <?= $body; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>