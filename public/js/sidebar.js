var toggle_sidebar = document.querySelector('.toggle-sidebar');
var checkbox_toggle_sidebar = document.querySelector('.checkbox-toggle-sidebar');
var sidebar = document.querySelector('.sidebar');
var main = document.querySelector('.main');
var toggle_close_sidebar = document.querySelector('#toggle_close_sidebar');

toggle_sidebar.addEventListener('click', function () {
    if (checkbox_toggle_sidebar.checked == false) {
        checkbox_toggle_sidebar.checked = true;
    } else {
        checkbox_toggle_sidebar.checked = false;
    }
    if (checkbox_toggle_sidebar.checked) {
        sidebar.classList.remove('-translate-x-full');
        toggle_close_sidebar.classList.toggle('-translate-x-[400px]');
    } else {
        sidebar.classList.add('-translate-x-full');
    }
});

toggle_close_sidebar.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full');
    toggle_close_sidebar.classList.toggle('-translate-x-[400px]');
});