<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TaskITEasy</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<nav class="navbar is-primary  has-text-white">
    <div class="container">
        <div class="navbar-brand">
            {{-- the container for the brand logo --}}
            <a href="/" class="navbar-item">
                <i class="fa-solid fa-list-check"></i>&nbsp;TaskITEasy
            </a>

            {{-- The navbar-burger is a hamburger menu that only appears on touch devices. --}}
            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        {{-- The navbar-menu is hidden on touch devices (<1024px). The modifier class `is-active` is added
             by means of the javascript to display it. --}}
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="/" class="navbar-item is-active">Home</a>
            </div>
        </div>
    </div>
</nav>

{{-- Content --}}
<section class="section">
    <div class="container">
        <h1 class="title is-4">My TODOs</h1>
        <h2 class="subtitle is-6 is-italic">
            Completing your tasks brings a sense of achievement, increases productivity,
            reduces stress, and helps you manage your time effectively. It creates a
            positive feedback loop, encourages you to prioritize important tasks, and
            provides opportunities to reward yourself. So, dive in, conquer your tasks,
            and enjoy the numerous benefits that come with it! You've got this!
        </h2>
    </div>
</section>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column has-text-centered">
                <div>
                    <a href="/" class="link">Home</a>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <a href="https://opensource.org/licenses/MIT" class="link">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a
                    href="https://github.com/dwaard">BugSlayer</a></p>
            <p>TaskITEasy</p>
        </div>
    </div>
</footer>

{{-- Scripts section --}}
<script>
    // Toggle the navbar hamburger menu on mobile devices
    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });

    });
</script>
</body>
</html>
