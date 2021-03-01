function setDarkTheme() {
    document.documentElement.classList.remove('theme-light');
    document.body.classList.remove('theme-light');
    document.documentElement.classList.add('theme-dark');
    document.body.classList.add('theme-dark');
}

function setLightTheme() {
    document.documentElement.classList.remove('theme-dark');
    document.body.classList.remove('theme-dark');
    document.documentElement.classList.add('theme-light');
    document.body.classList.add('theme-light');
}

function toggleDarkMode() {
    var toggler = document.getElementById('dark-mode-toggler');
    if ('false' === toggler.getAttribute('aria-pressed')) {
        toggler.setAttribute('aria-pressed', 'true');
        window.localStorage.setItem('darkMode', 'yes');
        setDarkTheme();
    } else {
        toggler.setAttribute('aria-pressed', 'false');
        window.localStorage.setItem('darkMode', 'no');
        setLightTheme();
    }
}

function checkIfDarkMode() {
    var isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    if ('yes' === window.localStorage.getItem('darkMode')) {
        isDarkMode = true;
    } else if ('no' === window.localStorage.getItem('darkMode')) {
        isDarkMode = false;
    }
    return isDarkMode;
}

function darkModeInitialLoad() {
    var toggler = document.getElementById('dark-mode-toggler'),
        isDarkMode = checkIfDarkMode();
    isDarkMode ? setDarkTheme() : setLightTheme();
    if (toggler && isDarkMode) {
        toggler.setAttribute('aria-pressed', 'true');
    }
}

darkModeInitialLoad();

var toggler = document.getElementById('dark-mode-toggler');
toggler.addEventListener("click", toggleDarkMode);