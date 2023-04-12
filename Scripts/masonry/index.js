"use strict";
// masonry utility 
(function(){    
    
    igk.ready(function(){ 
        if (!window.Masonry){
            console.log("mansory is missing");
            return;
        }
        igk.winui.initClassControl('igk-bootstrap-masonry', function(){
            if (!window.Masonry){
                return;
            }
            new Masonry(this.o);
            console.log('init lev');
        });
      
        // $igk('.igk-bootstrap-masonry').each_all(function(){
        //     this.init();
        //     console.log('ini( ...)');
        // });
        // .each_all(function(){
        //     console.log("init .... masonry");
        //     new Masonry(this.o);
        // }); // init();
        console.log('init ...');
    });
})();