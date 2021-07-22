// Check OS

window.onload = function() {
    var OSName = "Upgrade To NiranjanUX Today!";
    if (navigator.appVersion.indexOf("Win") != -1) OSName = "Upgrade From Windows Today!";
    if (navigator.appVersion.indexOf("Mac") != -1) OSName = "Upgrade From MacOS Today!";
    if (navigator.appVersion.indexOf("X11") != -1) OSName = "Upgrade From UNIX Today!";
    if (navigator.appVersion.indexOf("Linux") != -1) OSName = "Upgrade From Linux Today!";

    document.getElementById("upgrade").innerHTML = OSName;
}

//Wait for 2 seconds and open the downloaded page.

function downloaded()
{
	setTimeout(function() {
		window.open("downloaded.php","_self")
	}, 2000);	
}