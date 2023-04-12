(function(){

    igk.ready(function(){
        let i = document.querySelectorAll('*[data-bs-toggle=popover]');
 
        if (i){
            i.forEach((a)=>{
                let q = $igk(a);
                const opts = {};
                let c = null;
                if (c = q.getAttribute('igk-bootstrap-popover-container')){
                    opts.container = c;
                }
                new bootstrap.Popover(q.o, opts);
            });
        }
    });

})();