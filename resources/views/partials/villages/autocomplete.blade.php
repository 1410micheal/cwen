<script>
    
    $('#village').autocomplete({
            type: "GET",
            minLength: 3,
            autoFocus:true,
            appendTo :'#autoElem',
            classes: {
                "ui-autocomplete": "highlight"
            },
            source : function (request, response) 
            {                         
                var source_url = "<?php echo route('villages'); ?>?q=" + $("#village").val();

                $.ajax({
                    url: source_url,
                    dataType: "json",
                    data: request,
                    success: function (data) { 
                        
                        var datas = data;

                        console.log(datas);

                        var list  = [];

                        datas.forEach(function(item){
                            let list_item = {
                                label:item.village_name+" "+item.district_name,
                                value:item.village_name+" "+item.district_name,
                                row_id:item.id
                            }

                            list.push(list_item);
                        });

                        response(list);
                     },
                    error : function (a,b,c) { console.log(a)}
                    });
            },                
            select: function (event, ui) { 
                //console.log(ui.item);
                $('#village_id').val(ui.item.row_id); 
            }               
        });

</script>
