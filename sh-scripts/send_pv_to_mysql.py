import asyncio
import goodwe
import requests 

async def get_runtime_data():
    ip_address = '192.168.178.50' # IP of your Goodwe Inverter / ET
    sensors = [
        "active_power" # 
    ]

    inverter = await goodwe.connect(ip_address)
    runtime_data = await inverter.read_runtime_data()
    for sensor in inverter.sensors():
        if sensor.id_ in runtime_data:
            if sensor.id_ in sensors:
                print(f'{runtime_data[sensor.id_]}')
                
asyncio.run(get_runtime_data())
