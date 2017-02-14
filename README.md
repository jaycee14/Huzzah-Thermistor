# Huzzah-Thermistor
Using an Adafruit Feather Huzzah ESP8266 to send thermistor readings to a web database.

## Rationale
Trying to keep an eye on my hot water provider presented a great opportunity to try some IoT fun. 

## Hardware
I used an [Adafruit Feather Huzzah](https://learn.adafruit.com/adafruit-feather-huzzah-esp8266/overview) as my micro-controller for it's built in wifi and battery facilities.
The Feather Huzzah has a single analogue pin with a max voltage in of 1v.
Hence a extra step in the voltage divider was needed. Being rusty in my electronics I simulated the temperature / voltage realtionship in Excel first to get the values needed not to damage the Feather.
![Temp-Voltage Graph](misc/volt_graph.png)

