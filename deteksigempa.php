#!/usr/bin/php
<?php
// Data EARTHQUAKE DETECTOR
// Coded By DW SQUAD

function main(){
	$url = "http://data.bmkg.go.id/autogempa.xml";
	$get = file_get_contents($url, False);
	$data = simplexml_load_string($get) or die("Error: Cannot create object");
	print " Tanggal   : ".$data->gempa->Tanggal."\n";
	print " Jam       : ".$data->gempa->Jam."\n";
	print "\n";
	print "\033[0;36m"; // Cyan
	print " Lintang   : ".$data->gempa->Lintang."\n";
	print " Bujur     : ".$data->gempa->Bujur."\n";
	print " Magnitude : ".$data->gempa->Magnitude."\n";
	print " Kedalaman : ".$data->gempa->Kedalaman."\n";
	print "\n";
	print "\033[0;32m"; // Hijau
	print " Wilayah   : ".$data->gempa->Wilayah1."\n";
	print " Potensi   : ".$data->gempa->Potensi."\n";
	print "\033[0m"; // Normal
}
system('clear');
print "\033[01;31m"; // Merah tua
print "=================================== \n";
print " //   ____  _                       \n";
print " //  /  _ \/ \  /|                  \n";
print " //  | | \|| |  ||                  \n";
print " //  | |_/|| |/\||                  \n";
print " //  \____/\_/  \|                  \n";
print "SQUAD                               \n";
print "EARTH QUAKE DETECTOR                \n";
print "=================================== \n";
print "\033[0m"; // Normal
main();
?>
