var output, started;

// Constants
duration = 5000;
desired = '50000';

// Initial setup
output = $('.glitch');
started = new Date().getTime();

// Animate!
animationTimer = setInterval(function() {
        output.text(
            ''+
            Math.floor(Math.random() * 10000)+
            Math.floor(Math.random() * 10000)
        );
}, 100);