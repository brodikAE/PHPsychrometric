# PHPsychrometric
A simple PHP script to calculate psychrometric states of moist air.

## Installation
Place PHPsychrometric.php file in your working directory and include the file into your script.

## Description

PHPsychrometric is a PHP script that calculates psychrometric states of moist air. 
Altitude (to determinate the value of atmospheric pressure), temperature and relative humidity must be given to calculate all other state properties.
The state properties include: wet bulb temperature (Tbu), dew point temperature (Tr), specific volume (V), specific enthalpy (H) and absolute humidity (X).

## Formula

| Variable | Name | Formula | Require |
| -------- | ---- | ------- | ------- |
| Pws | Saturation vapour pressure | Pws($T) | dry bulb temperature (T) |
| Pp  | Partial pressure of water vapour | Pp($UR, $Pws) | relative humidity (UR) and saturation vapour pressure (Pws) |
| Tbu | Wet bulb temperature | Tbu($T, $UR) | dry bulb temperature (T) and relative humidity (UR) |
| Tr  | Dew point temperature | Tr($T, $P) | dry bulb temperature (T) and partial pressure of water vapor (Pp) |
| V | Specific volume | V($T, $X, $Z) | dry bulb temperature (T), absolute humidity (X) and altitude (Z) |
| H | Specific enthalpy | H($T, $X) | dry bulb temperature (T) and absolute humidity (X) |
| Tbs | Dry bulb temperature | Tbs($H, $X) | relative humidity (UR) and absolute humidity (X) |
| X | Absolute humidity | X($UR, $Pws, $Z) | relative humidity (UR), saturation vapour pressure (Pws) and altitude (Z) |
| UR | Relative humidity | UR($Pws, $X, $Z) | saturation vapour pressure (Pws), absolute humidity (X) and altitude (Z) |

## Usage

With a GET request you can get one or all the states of moist air identified by the point identified by the parameters of dry bulb temperature (T) and relative humidity (UR).

```sh Parameters:
T   [dry bulb temperature]  °C
UR  [relative humidity]     %
Z   [altitude]              m
F   [functions]             [all (default), Tbu, Tr, V, H, X]
```

**myscript.php?T=10&UR=60&Z=0&F=all**
