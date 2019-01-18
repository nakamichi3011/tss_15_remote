<?php

$command = $_POST['command'];

switch ($command) {
	case 'mode':
		exec('sh send_to_command.sh tss_15_commands/mode.txt');
		break;
		
	case 'power':
		exec('sh send_to_command.sh tss_15_commands/power.txt');
		break;

	case 'movie':
		exec('sh send_to_command.sh tss_15_commands/movie.txt');
		break;
		
	case 'music':
		exec('sh send_to_command.sh tss_15_commands/music.txt');
		break;
		
	case 'sports':
		exec('sh send_to_command.sh tss_15_commands/sports.txt');
		break;
		
	case 'game':
		exec('sh send_to_command.sh tss_15_commands/game.txt');
		break;

	case 'volume_up':
		exec('sh send_to_command.sh tss_15_commands/volume_up.txt');
		break;
		
	case 'mute':
		exec('sh send_to_command.sh tss_15_commands/mute.txt');
		break;
		
	case 'volume_down':
		exec('sh send_to_command.sh tss_15_commands/volume_down.txt');
		break;
		
	case 'woofer_volume_up':
		exec('sh send_to_command.sh tss_15_commands/woofer_volume_up.txt');
		break;
		
	case 'center_volume_up':
		exec('sh send_to_command.sh tss_15_commands/center_volume_up.txt');
		break;
		
	case 'surround_volume_up':
		exec('sh send_to_command.sh tss_15_commands/surround_volume_up.txt');
		break;

	case 'woofer_volume_down':
		exec('sh send_to_command.sh tss_15_commands/woofer_volume_down.txt');
		break;

	case 'center_volume_down':
		exec('sh send_to_command.sh tss_15_commands/center_volume_down.txt');
		break;
		
	case 'surround_volume_down':
		exec('sh send_to_command.sh tss_15_commands/surround_volume_down.txt');
		break;
		
	case 'night_listening':
		exec('sh send_to_command.sh tss_15_commands/night_listening.txt');
		break;

	case 'test':
		exec('sh send_to_command.sh tss_15_commands/test.txt');
		break;
		
	case 'multiplex':
		exec('sh send_to_command.sh tss_15_commands/multiplex.txt');
		break;

	case 'input1':
		exec('sh send_to_command.sh tss_15_commands/input1.txt');
		break;
		
	case 'input2':
		exec('sh send_to_command.sh tss_15_commands/input2.txt');
		break;

	case 'input3':
		exec('sh send_to_command.sh tss_15_commands/input3.txt');
		break;
		
	case 'input4':
		exec('sh send_to_command.sh tss_15_commands/input4.txt');
		break;
}

?>