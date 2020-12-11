$(document).ready(function(){
    // $('#Ficandlit').show();
    $('#Ficandlitcontent').hide();
    $('#sciandrescontent').hide();
    $('#entcontent').hide();
    $('#biocontent').hide();
    $('#lifecontent').hide();
    $('#prsnlgrowthcontent').hide();
    $('#businesscontent').hide();
    $('#relcontent').hide();
    $('#techcontent').hide();
    

    $('.filter-1').click(function() {
        $('.division').hide();
        $('#defaultcontent').show();
    });

    // Calling Fiction and Literature
    $('.Ficandlit').click(function() {
        $('.division').hide();
        $('#Ficandlitcontent').show();
        $('.dropdown_div').hide();
    });

    // Calling Science and Research
    $('.sciandres').click(function() {
        $('.division').hide();
        $('#sciandrescontent').show();
        $('.dropdown_div').hide();
    });

    // Calling Technology
    $('.technology').click(function() {
        $('.division').hide();
        $('#techcontent').show();
        $('.dropdown_div').hide();
    });
    
    // Calling Biography
    $('.biography').click(function() {
        $('.division').hide();
        $('#biocontent').show();
        $('.dropdown_div').hide();
    });

    // Calling Lifestyle
    $('.lifestyle').click(function() {
        $('.division').hide();
        $('#lifecontent').show();
        $('.dropdown_div').hide();
    });

    // Calling Personal Growth
    $('.personalgrowth').click(function() {
        $('.division').hide();
        $('#prsnlgrowthcontent').show();
        $('.dropdown_div').hide();
    });

    // Calling Religion 
    $('.religion').click(function() {
        $('.division').hide();
        $('#relcontent').show();
        $('.dropdown_div').hide();
    });

    // Calling Business 
    $('.business').click(function() {
        $('.division').hide();
        $('#businesscontent').show();
        $('.dropdown_div').hide();
    });
});
