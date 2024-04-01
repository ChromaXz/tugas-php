window.onload = function() {
    var header = document.querySelector('header');
    var headerText = header.textContent;
    header.textContent = '';

    var i = 0;
    function typeWriter() {
        if (i < headerText.length) {
            header.textContent += headerText.charAt(i);
            i++;
            setTimeout(typeWriter, 100);
        }
    }

    typeWriter();
}