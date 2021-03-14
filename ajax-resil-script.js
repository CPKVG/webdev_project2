



    jQuery(document).ready(function($) {


   var date;
    function formatDate(date) {
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();
    
        if (month.length < 2) 
            month = '0' + month;
        if (day.length < 2) 
            day = '0' + day;
    
        return [day, month, year].join('-');
    }
    console.log(formatDate(new Date));
    
    
    $('input#next3').click('submit', function(e){
       
globalFinalScore
console.log(globalFinalScore)
console.log(formatDate(new Date));

    $.ajax({
        type: 'POST',
        datatype :'JSON',
        url: ajax_resil_object.ajaxurl,
        data: {
            'action' : 'ajax_tool',
            'score': globalFinalScore,
            'date' : formatDate(new Date),
            'ID': 'ID',
       
        ajax_nonce: ajax_resil_object.nonce
        },
        
        //success: function(result){
            //alert(result);
       // },
        
        success: function(data){
            //alert(data.messsage);
         console.log(data);//returning empty string
         //console.log(globalFinalScore);
         //setInterval(function (){console.log(globalFinalScore)},5000);
        
       },

        error: function(errorThrown){
            console.log(errorThrown);
            alert(errorThrown);
            
        }
    });
    e.preventDefault();
})
    });
