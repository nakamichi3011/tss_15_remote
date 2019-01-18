var REPEAT_DELAY_MAIN = 100;
var REPEAT_DELAY_SUB = 150;

$(document).ready(function () {
    
    $('#mode').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"mode" }
        });
    });
    
    $('#power').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"power" }
        });
    });
    
    $('#movie').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"movie" }
        });
    });
    
    $('#music').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"music" }
        });
    });
    
    $('#sports').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"sports" }
        });
    });
    
    $('#game').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"game" }
        });
    });
    
    $("#volume_down").jqxRepeatButton({ delay: REPEAT_DELAY_MAIN });
    $('#volume_down').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"volume_down" }
        });
    });
    
    $('#mute').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"mute" }
        });
    });
    
    $("#volume_up").jqxRepeatButton({ delay: REPEAT_DELAY_MAIN });
    $('#volume_up').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"volume_up" }
        });
    });
    
    $("#woofer_volume_up").jqxRepeatButton({ delay: REPEAT_DELAY_SUB });
    $('#woofer_volume_up').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"woofer_volume_up" }
        });
    });
    
    $("#woofer_volume_down").jqxRepeatButton({ delay: REPEAT_DELAY_SUB });
    $('#woofer_volume_down').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"woofer_volume_down" }
        });
    });

	$("#center_volume_up").jqxRepeatButton({ delay: REPEAT_DELAY_SUB });
    $('#center_volume_up').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"center_volume_up" }
        });
    });
    
    $("#center_volume_down").jqxRepeatButton({ delay: REPEAT_DELAY_SUB });
    $('#center_volume_down').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"center_volume_down" }
        });
    });
    
    $("#surround_volume_up").jqxRepeatButton({ delay: REPEAT_DELAY_SUB });
    $('#surround_volume_up').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"surround_volume_up" }
        });
    });
    
    $("#surround_volume_down").jqxRepeatButton({ delay: REPEAT_DELAY_SUB });
    $('#surround_volume_down').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"surround_volume_down" }
        });
    });
    
    $('#night_listening').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"night_listening" }
        });
    });
    
    $('#test').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"test" }
        });
    });
    
    $('#multiplex').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"multiplex" }
        });
    });
    
    $('#input1').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"input1" }
        });
    });
    
    $('#input2').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"input2" }
        });
    });
    
    $('#input3').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"input3" }
        });
    });
    
    $('#input4').on('click',function(){
        $.ajax({
            url:'./send_tss15_command.php',
            type:'POST',
            dataType:"json",
            data:{ command:"input4" }
        });
    });
    
});