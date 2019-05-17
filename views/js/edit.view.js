       $(document).ready(function(){
            $("#setAttribute").click(function(){
                $("#edit").submit();
            });


            $("#btn1").click(function(){
                var id = $('#productid').val();
                $.ajax({
                    url: "selectattribute",
                    method: "POST",
                    dataType: "JSON",
                    data: {id:id},
                    success: function(data) {
                        if (data.json){
                            var newAttrib = $('<td>' + data.text + '</td><td><select id="nextVal" name="attribValue'+data.nextAtr +'"></select></td>');
                        $("#new_attrib").append(newAttrib);
                        $("#btn1").hide();
                        $("#nextAttribName").on("change", function () {
                            $.each(data.json, function (name, values) {
                                if ($("#nextAttribName").val() == name) {
                                    $.each(values, function (n, value) {
                                        nextVal += '<option>' + value + '</option>';
                                    });
                                    $('#nextVal').children('option').remove();
                                    $('#nextVal').append(nextVal);
                                    nextVal = "";
                                }


                            });


                            if ($("#nextAttribName").val() == 'Chose Attribute') {
                                $('#nextVal').children('option').remove();
                                $("#nextVal").append('<option>Choose attribut first</option>');
                            }
                        });
                        } else alert ("There are no any new attributes for for this product");
                                            }
                });
            });

    });