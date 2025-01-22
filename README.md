# <a href="url"><img src="https://raw.githubusercontent.com/onlaj/Piano-LED-Visualizer/master/Docs/logo.svg" align="left" height="40" width="40" ></a> Piano LED Visualizer Addon
Addon to save and load presets in Piano-LED-Visualizer.

##### <a href="url"><img src="https://raw.githubusercontent.com/geg1965/Piano-LED-Visualizer-Addon/master/imgs/Screenshot.png" align="left" height="400" width="100%" ></a> A screenshot with the new buttons and dropdownmenus in top of the screen to save and load the PLV-settings and sequences.


## Prerequisits:

Up and running installation of [Piano-LED-Visualizer](https://github.com/onlaj/Piano-LED-Visualizer).

## Installation:

### 1. Update your system!:

```bash
sudo apt-get update
sudo apt-get upgrade
```
###### *it will take a while, go grab a coffee

### 2. Copy php directory to your existing installation

```bash
Navigate to the webinterface folder of your PLV installation
```

```bash
cd /home/Piano-LED-Visualizer/webinterface
```

- GIT clone repository

```bash
sudo git clone https://github.com/geg1965/Piano-LED-Visualizer-Addon php
```

### 3. Installing php:
```bash
sudo apt-get install php8.2-common php8.2-cli
```
### 4. Enable autostart PHP script on boot:

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

Don't forget to adjust the parameters for "ExecStart", "User" and "Group" to your environment! 

### 5. Change permissions:

```bash
sudo chmod a+rwxX -R /home/Piano-LED-Visualizer/webinterface/php/
```

### 6. Reload daemon and enable service:

```bash
sudo systemctl daemon-reload
sudo systemctl enable plvconfig.service
sudo systemctl start plvconfig.service
```

