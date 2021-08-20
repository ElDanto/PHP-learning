$(document).ready(function(){
    $('#submit-btn').on('click', function(){
        var data = {};
        data.action = 'submit_form';
        data.first_input = $('#first-number').val();
        data.second_input = $('#second-number').val();
        data.third_input = $('#third-number').val();
        $.ajax({
            type: "POST",
            url: "functions.php",
            data: data
        }).done(function(response){
            var jsonObject = JSON.parse(response);
            if(jsonObject.second){
                var result = 'x1 = ' + jsonObject.first + ' ; ' + 'x2 = ' + jsonObject.second + ' ; ';
                $('#result').text(result);
            }else if(jsonObject.first && !jsonObject.second){
                var result = 'x1 = ' + jsonObject.first + ' ; ';
                $('#result').text(result);
            }else{
                var result = jsonObject;
                $('#result').text(result);
            }
        });
    });

    $('#get_sex').on('click', function(){
        var data = {};
        data.action = $('#get_sex').attr('action');
        data.name = $('#sex_name').val();
        $.ajax({
            type: "POST",
            url: "functions.php",
            data: data
        }).done(function(response){
            $('#sex_result').text(response);
            console.log(response);
        });
    });
});