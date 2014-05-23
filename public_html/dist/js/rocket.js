window.onload = function() {
    setTimeout(function() {
        
        // reference to <head>
        var head = document.getElementsByTagName('head')[0];

        // a new CSS
        var css1 = document.createElement('link');
        css1.rel = stylesheet;
        css1.href = "//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css";

        // a new CSS
        var css2 = document.createElement('link');
        css2.rel = stylesheet;
        css2.href = "//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css";

        // a new CSS
        var css3 = document.createElement('link');
        css3.rel = stylesheet;
        css3.href = "//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic";

        // a new CSS
        var css4 = document.createElement('link');
        css4.rel = stylesheet;
        css4.href = "//cdn.jamesti.url.ph/css/landing-page.min.css";

        // preload JS and CSS
        head.appendChild(css1);        
        head.appendChild(css2);
        head.appendChild(css3);
        head.appendChild(css4);

        // preload image
        new Image().src = "//cdn.jamesti.url.ph/img/ipad.png";
        new Image().src = "//cdn.jamesti.url.ph/img/doge.png";
        new Image().src = "//cdn.jamesti.url.ph/img/phones.png";

    }, 1000);
};