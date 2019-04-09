idp compose
===========

Dit is een compose file om een simplesamlphp idp te maken

Go.sh
-----

Draai dit script op de swarm, het doet het volgende
- draait init.sh
- draait prepare.sh
- start container op

Init.sh
-------

Dit script zet de source code klaar in "src" die gebruikt wordt in de container

Prepare.sh
----------

Dit script maakt de omgeving in orde, denk aan volumes etc

Note: zowel prepare als init moeten uitgevoerd worden, voordat de container start
Note2: in init.sh zet je alleen code klaar. Als je iets wilt installeren in de container, dan maak je daarvoor een nieuw image.
