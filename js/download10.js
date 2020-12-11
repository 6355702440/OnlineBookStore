$(document).ready(function(){
    $('.container').hide();
    var pathArray = window.location.href.split('#');
    console.log(pathArray[1]);

    // Show Popular Books
    if(pathArray[1] === "moonsplit"){
        $('#moonsplit').addClass("show");
        $('#moonsplit').show();
    
    }

    if(pathArray[1] === "badass"){
        $('#badass').addClass("show");
    
    }

    if(pathArray[1] === "rules"){
        $('#rules').addClass("show");
    }

    if(pathArray[1] === "wingsoffire"){
        $('#wingsoffire').addClass("show");
    }


    // Show Fiction and Literature
    if(pathArray[1] === "wingsoffire"){
        $('#wingsoffire').addClass("show");
    }
    if(pathArray[1] === "monksoldferrari"){
        $('#monksoldferrari').addClass("show");
    }
    if(pathArray[1] === "3muskeeters"){
        $('#3muskeeters').addClass("show");
    }
    if(pathArray[1] === "williamshakes"){
        $('#williamshakes').addClass("show");
    }


    // Show Space time and Einstein Books
    if(pathArray[1] === "genphy"){
        $('#genphy').addClass("show");
    
    }
    if(pathArray[1] === "ste"){
        $('#ste').addClass("show");
    }
    if(pathArray[1] === "braidsweet"){
        $('#braidsweet').addClass("show");
    }
    if(pathArray[1] === "puremaths"){
        $('#puremaths').addClass("show");
    }


    // Show Technology Books
    if(pathArray[1] === "codeinter"){
        $('#codeinter').addClass("show");
    }

    // Show Biography Books
    if(pathArray[1] === "justmercy"){
        $('#justmercy').addClass("show");
    }
    if(pathArray[1] === "obamabio"){
        $('#obamabio').addClass("show");
    }

    // Lifestyle
    // Show Biography Books
    if(pathArray[1] === "climatechange"){
        $('#climatechange').addClass("show");
    }
    if(pathArray[1] === "nutrition"){
        $('#nutrition').addClass("show");
    }

    // Personal Growth Books
    if(pathArray[1] === "Psychology"){
        $('#Psychology').addClass("show");
    }
    if(pathArray[1] === "mirclemrng"){
        $('#mirclemrng').addClass("show");
    }

    // Religion books
    if(pathArray[1] === "secretwisdom"){
        $('#secretwisdom').addClass("show");
    }
});