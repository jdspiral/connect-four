/**
 * Created by josh on 9/29/16.
 */
jQuery(document).ready(function($) {
    $('td[data-column="1"]').click(function(){
        $(this).css('background', 'red');
        $.ajax({
            type: "POST",
            data: {
                submit:true
            },
            url: "src/Game/Handlers/PlayerHandler.php",
            dataType: "text",
            async: false,
            success: [
                function(data) {
                        result=data;
                        console.log(result);
                    }
                ]
        });
    });
});



