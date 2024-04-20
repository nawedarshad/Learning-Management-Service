// Select all elements with the classes .number-one and .number-two
const numberOnes = document.querySelectorAll('.number-one');
const numberTwos = document.querySelectorAll('.number-two');

// Remove .show from all .number-one elements and add .collapsed
numberOnes.forEach(element => {
    if (element.classList.contains('show')) {
        element.classList.remove('show');
        element.classList.add('collapse');
    }
});

// Remove .collapsed from all .number-two elements and add .show
numberTwos.forEach(element => {
    if (element.classList.contains('collapse')) {
        // element.classList.remove('collapse');
        element.classList.add('show');
    }
});
