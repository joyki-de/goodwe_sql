#!/bin/bash
IP="127.0.0.1" # Server-IP
RESULT=$(python3 /home/pi/goodwe/send_pv_to_mysql.py) 
URL="http://"$IP"/post-goodwe-data.php?power="
# to debug: echo "curl "$URL$RESULT
curl $URL$RESULT
