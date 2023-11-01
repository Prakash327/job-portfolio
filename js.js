$(document).on("keyup",function()){
    const searchText=$(this).val();
    if(searchText.length>1){
        $.ajax({
            url:"",
            type:"GET",
            dataTpe:"jason",
            data:{searchQuery:searchText,action:"searchuser"},
            success:function(users){

            }
        })
    }

}