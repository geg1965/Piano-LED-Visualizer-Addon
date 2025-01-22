#!/bin/bash
NR=$1
CFG_PATH="../../config"
CFGS="./cfgs"

if [ "$NR" == "" ]; then
  exit
fi

case "$NR" in
   [0-9][0-9]) cp $CFGS/settings.xml.$NR $CFG_PATH/settings.xml
               cp $CFGS/sequences.xml.$NR $CFG_PATH/sequences.xml
               systemctl restart visualizer.service;;
   *)          exit;;
esac
