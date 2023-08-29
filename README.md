# goodwe_sql
##### check PV Power Output from Goodwe-Inverter and send to MySQL/MariaDB on a Raspi

#### Requirements:

- Small Server (like a Raspi)
- Debian or Ubuntu-Linux
- Apache2 with php-Mod
- pyhton3
- pip (for install asyncio and goodwe)

for an insert all 5 minutes, use 'crontab -e' and enter as last line:
> */5 * * * * /home/pi/goodwe/output_to_sql.sh


*Next Steps*
- add Installer-Script for requirements
- add SQL-File for Example-Table