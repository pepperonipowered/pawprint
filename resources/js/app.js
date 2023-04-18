import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const sun = document.querySelector("#sun");
const moon = document.querySelector("#moon");

const userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("(perfers-color-scheme: dark)").matches;

const toggle = () => {
    moon.classList.toggle("hidden");
    sun.classList.toggle("hidden");
};

// check theme
const checkTheme = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
        document.documentElement.classList.add("dark");
        moonIcon.classList.add("hidden");
        return;
    }
    sun.classList.add("hidden");
};

// switch
const switchTheme = () => {
    if ( document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
        toggle();
        return;
    }
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
    toggle();
}

sun.addEventListener("click", () => {
    switchTheme();
});
moon.addEventListener("click", () => {
    switchTheme();
});

checkTheme();