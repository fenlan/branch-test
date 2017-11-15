#! /bin/bash

python get_flight_from_web.py localhost fenlan 1475307818 reser_system
python get_bus_from_web.py localhost fenlan 1475307818 reser_system
python insert_hotels_data.py localhost fenlan 1475307818 reser_system
