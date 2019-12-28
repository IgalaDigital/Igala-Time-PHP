<?php
// Declare the Language Time Namespace
namespace LanguageTime;

// require the language constants
require_once "EnglishConstants.php";

class English
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

        $yor_minute = "";
        if ((int) $minute) {
            $yor_minute = $this->getMinute($minute);
        }

        if ($minute > 30) {
            $yor_hour = $this->getHour($hour + 1);
        } else {
            $yor_hour = $this->getHour($hour);
        }

        // yor_minute + yor_hour
        return $yor_minute . $yor_hour;
    }
    public function getMinute($minute)
    {
        $description = EnglishConstants::number30 . EnglishConstants::AFTER_POINTER;
        if ($minute == 15) {
            $description = $this->getNumber($minute) . EnglishConstants::AFTER_POINTER;
        } else if ($minute == 45) {
            $description = $this->getNumber(60 - $minute) . EnglishConstants::BEFORE_POINTER;
        } else if ($minute == 1) {
            $description = $this->getNumber($minute) . EnglishConstants::TIME_POINTER_SINGLE . EnglishConstants::AFTER_POINTER;
        } else if ($minute == 59) {
            $description = $this->getNumber(60 - $minute) . EnglishConstants::TIME_POINTER_SINGLE . EnglishConstants::BEFORE_POINTER;
        } else if ($minute > 30) {
            $description = $this->getNumber(60 - $minute) . EnglishConstants::TIME_POINTER_PLURAL . EnglishConstants::BEFORE_POINTER;
        } else if ($minute < 30) {
            $description = $this->getNumber($minute) . EnglishConstants::TIME_POINTER_PLURAL . EnglishConstants::AFTER_POINTER;
        }

        return $description;
    }
    public function getHour($hour)
    {
        if ($hour > 12) {
            return $this->getNumber($hour - 12);
        } else {
            return $this->getNumber($hour);
        }

    }

    public function getNumber($number)
    {
        $switch = [
            EnglishConstants::number1,
            EnglishConstants::number2,
            EnglishConstants::number3,
            EnglishConstants::number4,
            EnglishConstants::number5,
            EnglishConstants::number6,
            EnglishConstants::number7,
            EnglishConstants::number8,
            EnglishConstants::number9,
            EnglishConstants::number10,
            EnglishConstants::number11,
            EnglishConstants::number12,
            EnglishConstants::number13,
            EnglishConstants::number14,
            EnglishConstants::number15,
            EnglishConstants::number16,
            EnglishConstants::number17,
            EnglishConstants::number18,
            EnglishConstants::number19,
            EnglishConstants::number20,
            EnglishConstants::number21,
            EnglishConstants::number22,
            EnglishConstants::number23,
            EnglishConstants::number24,
            EnglishConstants::number25,
            EnglishConstants::number26,
            EnglishConstants::number27,
            EnglishConstants::number28,
            EnglishConstants::number29,
        ];

        return $switch[$number - 1];
    }
}
echo new English();