var Controller = function(){
    
    /* triggers all events */
    for(ev in this)
        this[ev]();
};

$(document).ready(function() { 
    new Controller();
}); 