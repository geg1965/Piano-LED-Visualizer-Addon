#!/bin/bash
NR=$1
CFG_PATH="../../config"
CFGS="./cfgs"

if [ "$NR" == "" ]; then
  exit
fi

case "$NR" in
   [0-9][0-9]) cp $CFG_PATH/settings.xml $CFGS/settings.xml.$NR
               cp $CFG_PATH/sequences.xml $CFGS/sequences.xml.$NR;;
   *)          exit;;
esac
