$(document).ready(function(){
    //adding users
    $(document).on("submit","#addform", function(e){
        e.preventDefault();
        //ajax
        $.ajax(
            {
                url:"/BeCode/The-Mountain/php-crud/ajax.php",
                type: "POST",
                datatype: "json",
                data: new FormData(this),
                processData: false,
                contentType: false,
                beforeSend:function (){
                    console.log("Wait... Data is loading");

                },
                success: function(response){
                    console.log(response);
                },
                error:function (request, error){
                    console.log(arguments);
                    console.log("Error" + error);
                },
            }
        );
    });
})

