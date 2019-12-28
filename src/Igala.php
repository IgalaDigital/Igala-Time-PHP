<?php
// Declare the Language Time Namespace
namespace LanguageTime;

// require the language constants
require_once "IgalaConstants.php";

class Igala
{
    public function __toString()
    {
        // Construct to return the current time
        return $this->getTime(time());
    }
    public function getTime($param)
    {
        $param = !is_numeric($param) ? strtotime($param) : $param;
        $param = date("H:i", $param);
        $hour = explode(":", $param)[0];
        $minute = explode(":", $param)[1];
        return $this->getTimeHour($hour, $minute);
    }
    public function getCurrentTime()
    {
        return $this->getTime(time());
    }

    public function getTimeHour($hour, $minute)
    {
        if (!(int) $hour) {
            $hour = 24;
        }

        $iga_minute = "";
        if ((int) $minute) {
            $iga_minute = $this->getMinute($minute);
        }

        if ($minute > 30) {
            $iga_hour = $this->getHour($hour + 1);
        } else {
            $iga_hour = $this->getHour($hour);
        }

        // iga_minute + iga_hour
        return $iga_hour . $iga_minute;
    }
    public function getMinute($minute)
    {
        $description = IgalaConstants::number30;
        if ($minute > 30) {
            $description = IgalaConstants::BEFORE_POINTER . $this->getNumber(60 - $minute);
        } elseif ($minute < 30) {
            $description = IgalaConstants::AFTER_POINTER . $this->getNumber($minute);
        }

        return $description;
    }
    public function getHour($hour)
    {
        if ($hour > 12) {
            return IgalaConstants::TIME_POINTER . $this->getNumber($hour - 12);
        } else {
            return IgalaConstants::TIME_POINTER . $this->getNumber($hour);
        }

    }

    public function getNumber($number)
    {
        $switch = [
            IgalaConstants::number1,
            IgalaConstants::number2,
            IgalaConstants::number3,
            IgalaConstants::number4,
            IgalaConstants::number5,
            IgalaConstants::number6,
            IgalaConstants::number7,
            IgalaConstants::number8,
            IgalaConstants::number9,
            IgalaConstants::number10,
            IgalaConstants::number11,
            IgalaConstants::number12,
            IgalaConstants::number13,
            IgalaConstants::number14,
            IgalaConstants::number15,
            IgalaConstants::number16,
            IgalaConstants::number17,
            IgalaConstants::number18,
            IgalaConstants::number19,
            IgalaConstants::number20,
            IgalaConstants::number21,
            IgalaConstants::number22,
            IgalaConstants::number23,
            IgalaConstants::number24,
            IgalaConstants::number25,
            IgalaConstants::number26,
            IgalaConstants::number27,
            IgalaConstants::number28,
            IgalaConstants::number29,
        ];

        return $switch[$number - 1];
    }

}
echo new Igala();