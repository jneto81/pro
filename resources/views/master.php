<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="//s3-us-west-2.amazonaws.com/typerocket-public/pro/pro.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class('light'); ?>>
<?php wp_body_open(); ?>

<div onclick="toggleTheme()" id="typerocket-theme-toggle">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hide-dark"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hide-light"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
</div>

<section>
    <img id="typerocket-logo" src="//s3-us-west-2.amazonaws.com/typerocket-public/pro/white-logo.svg" alt="TypeRocket Pro">
    <p><?php echo esc_html($title); ?></p>
</section>

<script>
    function toggleTheme() {
        document.body.classList.toggle("light");
        document.body.classList.toggle("dark");

        let theme = document.body.classList.contains("dark") ? "dark" : "light";

        if(theme === 'dark') {
            document.querySelector('#typerocket-logo').setAttribute('src', '//s3-us-west-2.amazonaws.com/typerocket-public/pro/logo.svg');
        } else {
            document.querySelector('#typerocket-logo').setAttribute('src', '//s3-us-west-2.amazonaws.com/typerocket-public/pro/white-logo.svg');
        }

        localStorage.setItem(
            "colorTheme",
            theme
        );
    }

    if (localStorage.getItem("colorTheme") === "dark") {
        toggleTheme();
    } else if (
        localStorage.getItem("colorTheme") !== "light" &&
        window.matchMedia &&
        window.matchMedia("(prefers-color-scheme: dark)").matches
    ) {
        toggleTheme();
    }
</script>

<?php wp_footer(); ?>
</body>
</html>