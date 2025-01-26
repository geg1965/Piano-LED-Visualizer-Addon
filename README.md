# <a href="https://github.com/onlaj/Piano-LED-Visualizer"><img src="https://raw.githubusercontent.com/geg1965/Piano-LED-Visualizer-Addon/master/imgs/logo.svg" align="left" height="40" width="40" ></a> Piano LED Visualizer Addon
Addon to save and load presets in [Piano-LED-Visualizer](https://github.com/onlaj/Piano-LED-Visualizer). The Addon will be available on port 8080 (for example http://[HOST-IP]:8080)

##### <a href="url"><img src="https://raw.githubusercontent.com/geg1965/Piano-LED-Visualizer-Addon/master/imgs/screenshot_1.png" align="left" height="400" width="100%" ></a> A screenshot with the new buttons and dropdownmenus in top of the screen to save and load the PLV-settings and sequences.


## Prerequisits:

Up and running installation of [Piano-LED-Visualizer](https://github.com/onlaj/Piano-LED-Visualizer).

## Installation:

### 1. Create a backup:

This addon is without warranty! I strongly recommend making a backup of your existing installation beforehand. Generally, I recommend installing on a new SD card with the latest release of ["Raspbian 12 (bookworm)"](https://www.raspberrypi.com/software/) as minimal OS, as well as the latest version of [Piano-LED-Visualizer](https://github.com/onlaj/Piano-LED-Visualizer) and [rtpMIDI Daemon](https://github.com/davidmoreno/rtpmidid/releases).

### 2. Update your system!:

```bash
sudo apt-get update
sudo apt-get upgrade
```
###### *it will take a while, go grab a coffee

### 3. Copy php directory to your existing installation

Navigate to the webinterface folder of your PLV installation

```bash
cd /home/Piano-LED-Visualizer/webinterface
```

- GIT clone repository

```bash
sudo git clone https://github.com/geg1965/Piano-LED-Visualizer-Addon php
```

### 4. Installing php:
```bash
sudo apt-get install php8.2-common php8.2-cli
```
### 5. Enable autostart PHP script on boot:

```bash
sudo nano /lib/systemd/system/plvconfig.service
```

Paste and save:

```bash
[Unit]
Description=Piano LED Visualizer Addon
After=network-online.target
Wants=network-online.target

[Install]
WantedBy=multi-user.target

[Service]
ExecStart=sudo php -S 0.0.0.0:8080 -t /home/Piano-LED-Visualizer/webinterface/php
Restart=always
Type=simple
User=plv
Group=plv
```
###### *Press CTRL + O to save file, confirm with enter and CTRL + X to exit editor and don't forget to adjust the parameters "ExecStart", "User" and "Group"! 

### 6. Change permissions:

```bash
sudo chmod a+rwxX -R /home/Piano-LED-Visualizer/webinterface/php/
```

### 7. Reload daemon and enable service:

```bash
sudo systemctl daemon-reload
sudo systemctl enable plvconfig.service
sudo systemctl start plvconfig.service
```

## Credits:

Thanks to [onlaj](https://github.com/onlaj) for his work on the [Piano-LED-Visualizer](https://github.com/onlaj/Piano-LED-Visualizer)! I really enjoyed creating this interactive lighting for my master keyboard. The ledemu2.html used here is part of his code and has only been minimally adapted (autorefresh added). 
